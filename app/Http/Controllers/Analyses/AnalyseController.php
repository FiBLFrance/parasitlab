<?php

namespace App\Http\Controllers\Analyses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Fournisseurs\ListeAnalysesFournisseur;

use App\Models\Analyses\Analyse;

use App\Http\Traits\LitJson;

class AnalyseController extends Controller
{
  use LitJson;

    protected $menu;

    public function __construct()
    {
      $this->menu = $this->litJson('menuLabo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analyses = Analyse::all();

        $fournisseur = new ListeAnalysesFournisseur(); // voir class ListeFournisseur

        $datas = $fournisseur->renvoieDatas($analyses, __('titres.list_analyses'), "analyse.svg", 'tableauAnalyses', 'analyses.create', __('boutons.add_analyse'));

        return view('admin.index.pageIndex', [
          'menu' => $this->menu,
          'datas' => $datas,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('errors.entravaux');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('errors.entravaux');

    }

    /**
     * Met à jour les associations entre analyse et anaitem.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = $request->all();
        // On récupère le préfixe qui permet de repérer les anaitems
        $prefixe = $datas['prefixe'];
        // On crée une collection vide
        $liste_anaitems_id = [];

        foreach ($datas as $key => $element) {
          // On explose les datas
          if(explode('_', $key)[0] === $prefixe) {
            // Pour ne récupérer que celles conernant les anaitems qu'on ajoute à la liste
            $liste_anaitems_id[] = $element;

          }

        }
        // On récupère l'analyse
        $analyse = Analyse::find($id);
        // On enlève toutes les associations entre cette analyse et les anaitems
        $analyse->anaitems()->detach($analyse->anaitems);
        // On recrée ces mêmes associations avec la nouvelle liste
        $analyse->anaitems()->attach($liste_anaitems_id);
        // Et on renvoie à la même page
        return redirect()->route('anatypes.edit', $datas['anatype_id'])->with('message', 'anatype_update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
