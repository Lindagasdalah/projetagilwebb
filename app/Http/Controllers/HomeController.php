<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Station;
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
    public function Addproduit(Request $request){


    }

    public function Affclient(){

        return view('client.viewclient');
    }

    public function affproduit(){

        return view('produit.afficherproduit');
    }
}
