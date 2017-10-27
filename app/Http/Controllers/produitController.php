<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class produitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo= \App\Promotion::all();
        return view('produit/viewproduit.index');
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
        if ($request->isMethod('post')) {
            $newpromotion = new Promotion();
            $newpromotion->idpromotion = $request->input('idpromotion');
            $newpromotion->nouveauprix = $request->input('prixfinal');
            $newpromotion->pourcentage = $request->input('pourcentage');
            $newpromotion->dd = $request->input('datedebut');
            $newpromotion->df = $request->input('datefin');

            $resultat = $newpromotion->save();
            if ($resultat){
                return  response()-> json(array ('message'=>'ajout'));}
            else
            {
                return  response()-> json(array ('message'=>'probleme'));
            }

        }
        return view('produit/viewproduit');
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

    private function validateInput($request) {
        return Validator::make($request, [
            'idpromotion' => 'required|min:6',
            'pourcentage' => 'required',
            'nomproduit' => 'required',
            'nomstation' => 'required',
        ]);
    }
}
