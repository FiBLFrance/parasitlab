<?php
namespace App\Http\Controllers\Labo;

use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Mail\Mailer;
use App\Mail\EnvoiInfosConnexion;
use App\Http\Controllers\Controller;
use App\Fournisseurs\ListeEleveursFournisseur;
use App\Fournisseurs\ListeDemandesFournisseur;
use App\Fournisseurs\ListeDemandesEleveurAdminFournisseur;

use Carbon\Carbon;
use App\User;
use App\Models\Eleveur;
use App\Models\Veto;
use App\Models\Productions\Demande;

use App\Http\Traits\LitJson;
use App\Http\Traits\UserTypeOutil;
use App\Http\Traits\EleveurInfos;
use App\Http\Traits\UserCreateDetail;

/**
*
* CLASSE DE GESTION DES ELEVEURS (CRUD)
*
* @package Utilisateurs
*/
class EleveurAdminController extends Controller
{
  use LitJson, EleveurInfos, UserTypeOutil, UserCreateDetail;

  protected $menu;
  protected $pays;
  // protected $vetos;
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function __construct()
  {
    $this->menu = $this->litJson("menuLabo");
    $this->pays = $this->litJson("pays");
    $this->vetos = Veto::all();
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    session()->forget(['creation']); // on supprime les variables de sessions liées à la création d'une demande ou d'un user

    $users = User::where('usertype_id', $this->userTypeEleveur()->id)->get();

    $icone = $this->userTypeEleveur()->icone->nom;

    $fournisseur = new ListeEleveursFournisseur(); // voir class ListeFournisseur

    $datas = $fournisseur->renvoieDatas($users, __('titres.list_eleveurs'), $icone, 'tableauEleveurs', 'eleveurAdmin.create', __('boutons.add_eleveur'));

    return view('admin.index.pageIndex', [
    'menu' => $this->menu,
    'datas' => $datas,
    'userType_nom' => $this->userTypeEleveur()->nom,
    ]);

  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {

    session([
    'creation.usertype' => $this->userTypeEleveur(),
    'creation.route_retour' => 'eleveurAdmin.show',
    ]);

    return redirect()->route('user.create');

  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $datas = $request->all();

    // Le nouvel utilisateur créé n'est pas encore enregistré
    // (méthode pour éviter de créer un user sans les users spécifiques (labo, veto, éleveur)
    // si le formulaire n'est pas rempli juqu'au bout)
    // On le récupère par la variable de session.
    $nouvel_user = session('creation.nouvel_user');

    session()->forget(['creation.nouvel_user']);

    // On crée le mot de passe (maintenant et non dans UserController pour ne pas pas avoir à le stoker en session)
    $mdp = str_random(8);
    $nouvel_user->password = $mdp; // On stocke d'abord le mdp sous bcrypt pour pouvoir l'envoyer par mail

    //Envoyer au nouvel utilisateur ses identifants de connexion
    $mail = Mail::to($nouvel_user->email)->send(new EnvoiInfosConnexion($nouvel_user));

    // Puis on crypte le mdp avant de la stocker en base de donnée
    $nouvel_user->password = bcrypt($mdp);
    // Et on l'enregistre
    $nouvel_user->save();

    //Puis on fait appel au trait UserCreateDetail pour vérifier et enregistrer l'éleveur correspondant
    $this->eleveurCreateDetail($datas, $nouvel_user->id);

    session(['creation.user' => $nouvel_user]);
    // si le veto_id == 0, c'est qu'il faut créer un nouveau veto
    if($datas['veto_id'] === "0") {

      session(['creation.veto_d_eleveur' => true]);

      session(['creation.usertype' => $this->userTypeVeto()]);

      return redirect()->route('user.create')->with('status', __('message.create_new_vet').'&nbsp;'.$nouvel_user->name);

      // Cas où la création de l'éleveur se fait dans le cadre d'une demande d'analyse
    } elseif (session('creation.demande_en_cours')) {

      session(['creation.user' => $nouvel_user]); // On rajoute le nouvel user en session pour qu'il soit choisi par défaut dans la liste déroulante

      return redirect()->route('demandes.create'); // Et on renvoie au formulaire de création d'une nouvelle demande

      // sinon on peut revenir à la route de retour
    } else {

      session()->forget(['usertype', 'user_id']); // après avoir vidé les infos passées en session

      return redirect()->route('eleveurAdmin.show', $nouvel_user->id);

    }
    // TODO: Quel intêret de la valeur en session route_retour ?
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    session()->forget(['creation']);

    $user = User::find($id);

    session(['creation.user_eleveur' => $user]);

    $user = $this->eleveurFormatNumber($user);

    $eleveurInfos = $this->eleveurInfos($user);

    $demandes = Demande::where('user_id', $id)->orderBy('date_reception', 'desc')->get();

    $fournisseur = new ListeDemandesEleveurAdminFournisseur(); // voir class ListeFournisseur

    $datas = $fournisseur->renvoieDatas($demandes, __('titres.list_demandes'), 'demandes.svg', 'tableauDemandesEleveurAdmin', 'demandes.create', __('boutons.add_demande'));

    return view('admin.eleveurShow', [
    'menu' => $this->menu,
    'user' => $user,
    'eleveurInfos' => $eleveurInfos,
    'datas' => $datas,
    'pays' => $this->pays,
    ]);
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $user =User::find($id);

    $vetos = Veto::where('id', '<>', $user->eleveur->veto_id)->get();

    session(['creation.route_retour' => 'eleveurAdmin.show']);

    return view('admin.eleveur.eleveurEdit', [
    'menu' => $this->menu,
    'user' => $user,
    'pays' => $this->pays,
    'vetos' => $vetos

    ]);


  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    // NON IMPLEMENTEE CAR UTILISATION DE user.update + le trait UserUpdateDetail

  }
  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    // Si l'user détruit possède des demandes d'analyses, il faut les transférées à l'user anonyme
    $demandes= Demande::where('user_id', $id)->get();

    if($demandes->count() > 0) {

      foreach ($demandes as $demande) {

        $demande->user_id = 0;
        $demande->save();

      }
    }

    User::destroy($id);

    return redirect()->route('eleveurAdmin.index')->with('message', 'user_suppr');
  }
}
