<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Station;
use Illuminate\Http\Request;
use Session;
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

    //Station*****************************************************
    public function AddStation(Request $request){
        if($request->isMethod('post')){
            $newstation=new Station();
            $newstation->idstation=$request->input('ids');
            $newstation->nomstation=$request->input('nom');
            $newstation->adressestation=$request->input('adresse');
            $result=     $newstation->save();
            if($result){
                Session::flash('message', 'Station est bien ajoutée');
                //return redirect('viewstation');
                return view('station/viewstation');

            }else
            {
                Session::flash('message', '');
                //return redirect('viewstation');
                return view('station/viewstation');
            }

        }
        return view('station/viewstation');
    }
    //*****************************************************
























    public function AddGerant(){

        return view('gerant.viewgerant');
    }
    public function Addproduit(){

        return view('produit.viewproduit');
    }

    public function Affclient(){

        return view('client.viewclient');
    }

    public function affproduit(){

        return view('produit.afficherproduit');
    }
}
