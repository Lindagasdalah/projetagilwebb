<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Promotion;
use Session;

class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $promotions = DB::table('promotions')->get();
        // tu sélectionnes toutes les entrées de la table 'products'

        return View::make('produit.viewproduit')->with('promotions', $promotions);
        // tu retourne la vue 'index' qui se trouve dans le dossier 'views/products' (ce sera un fichier index.blade.php si tu utilises blade)


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produit.viewproduit');
    }


    public function addpromotion(Request $request)
    {
      // dd($request->all());
        Promotion::create([
            'id'=>$request->idpromotion,
            'idproduit'=>$request->produit,
            'idstation'=>$request->idstation,
            'pourcentage'=>$request->pourcentage,
            'prixfinal'=>$request->nouveauprix,
            'datedebut'=>$request->date_debut,
            'datefin'=>$request->date_fin
        ]);

        Session::flash('message', 'promotion est bien ajoutée');


        return redirect()->back();


    }




    public function show($id)
    {
        $promo= \App\Promotion::find($id);
        return view('produit/viewproduit.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function store(Request $request)
    {
        $this->validate($request, [
            'idpromotion' => 'required',
            'dd' => 'required',
            'df' => 'required',
            'pro' => 'required',
            'sta' => 'required',
            'pourcentage' => 'required',
        ]);

        $input = $request->all();

        Task::create($input);

        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }
}
