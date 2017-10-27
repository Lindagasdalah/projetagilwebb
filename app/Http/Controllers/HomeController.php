<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Station;
use App\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
    public function AddStation(Request $request){
     
        return view('station.viewstation');
    }

    public function AddGerant(){

        return view('gerant.viewgerant');
    }
    public function Addproduit(){

        return view('produit.viewproduit');
    }

    public function Affclient(){
        $client=Client::all();
        $arr=Array('client'=>$client);

        return view('client.viewclient',$arr);
    }

    public function affproduit(){

        return view('produit.afficherproduit');
    }
}
