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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = $request->all();

        $prefixe = $datas['prefixe'];

        $liste_anaitems_id = [];

        foreach ($datas as $key => $element) {

          if(explode('_', $key)[0] === $prefixe) {

            $liste_anaitems_id[] = $element;

          }

        }

        $analyse = Analyse::find($id);

        $liste_origine_anaitems_id = [];

        foreach ($analyse->anaitems as $anaitem) {

          $liste_origine_anaitems_id[] = $anaitem->id;

        }

        $anaitems_enleves = array_diff($liste_origine_anaitems_id, $liste_anaitems_id);

        $analyse->anaitems()->detach($anaitems_enleves);

        $analyse->anaitems()->attach($liste_anaitems_id);
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
