<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Station;
use Illuminate\Http\Request;
use App\idStation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    use Illuminate\Http\Request;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function liststation()
    {
        $station=idStation::all();
        return view('gerant.viewgerant',compact('station'));
    }
   /* public function AddStation(Request $request){
     
        return view('station.viewstation');
    }*/

    public function AddGerant(Request $request){
        if($request->isMethod('post')) {
            $newgerant = new gerants();
            $newgerant->cingerant = $request->input('cin');
            $newgerant->nomgerant = $request->input('nom');
            $newgerant->prenomgerant = $request->input('pnom');
            $newgerant->adressegerant = $request->input('adr');
            $newgerant->numtelgerant = $request->input('num');
            $newgerant->idstation = $request->input('id');
            $newgerant->login = $request->input('login');
            $newgerant->motdepasse = $request->input('password');
            $result = $newgerant->save();
            if ($result) {
                return response()->json(array(array('message'=>'ajout avec succès')));


            } else {
                return response()->json(array('message' => 'probleme'));
            }


        return view('gerant.viewgerant');
    }}
   /* public function Addproduit(){

        return view('produit.viewproduit');
    }

    public function Affclient(){

        return view('client.viewclient');
    }

    public function affproduit(){

        return view('produit.afficherproduit');
    }*/
}
