<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Station;
use App\Gerant;

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
   /* public function create()
    {
        $items = stations::all(['idstation', 'nomstation']);
        return View::make('gerant.viewgerant', compact('items',$items));
    }*/
    public function indexliste(){
        $stations = agil::table('station')->lists('idstation,','nomstation');

        return view('gerant.viewgerant', ['stations'=> $stations]);
    }

   /* public function liststation()
    {
        $station=idStation::all();
        return view('gerant.viewgerant',compact('station'));
    }*/
   /* public function AddStation(Request $request){
     
        return view('station.viewstation');
    }*/

    public function AddGerant(Request $request){
        if($request->isMethod('post'))
        {
            $newgerant = new Gerant();
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
                Session::flash('message','Gérant est bien ajouté');
                return view('gerant/viewgerant');


            } else {
                Session::flash('message','erreur');
                return view('gerant/viewgerant');

            }


        return view('gerant/viewgerant');
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
