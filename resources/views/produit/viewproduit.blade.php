@extends('layouts.design')

@section('content')
    <html>
    <head>
        <style>

            {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-font-smoothing: antialiased;
                -moz-font-smoothing: antialiased;
                -o-font-smoothing: antialiased;
                font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
            }


        </style>

    </head>
    <body>
    <div id="page-inner">

        <form id="pro" action="{{URL::to('/produit')}}" method="POST">

            {{csrf_field()}}

            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Ajouter un produit <small>Ajouter produit en promotion</small>
                    </h1>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="disabledSelect">Id promotion :</label>
                    <input class="form-control" id="idpromotion" name="idpromotion" type="text" placeholder="123456" required >
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Nom Produit :</label>
                    <select class="form-control" name="produit" id="produit" required>
                        @foreach(App\Produit::all() as $produit)
                            <option value="{{$produit->idproduit}}">{{$produit->nomproduit}}</option>

                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Nom station :</label>
                    <select class="form-control" name="idstation" id="idstation" required>
                        @foreach(App\Station::all() as $station)
                            <option value="{{$station->id}}">{{$station->nomstation}}</option>

                        @endforeach

                    </select>
                </div>
            </div>
            <br/>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="disabledSelect">Ancien prix :</label>
                    <input class="form-control" id="ancienprix" name="ancienprix" type="text" placeholder="6dt" >
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Pourcentage:</label>
                    <select class="form-control" name="pourcentage" id="pourcentage" required>
                        <option value="5">5%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="50">50%</option>
                    </select>
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="disabledSelect">Nouveau prix :</label>
                    <input class="form-control" id="nouveauprix" name="nouveauprix" type="text" placeholder="6dt"  required>
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="exampleInputAdresse">Date début :</label>
                    <input  id="dd" type="date"  name="date_debut" placeholder="26/02/2012" class="form-control" required>

                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="exampleInputAdresse">Date fin:</label>
                    <input  id="df" type="date" name="date_fin"  placeholder="31/02/2017" class="form-control" required>
                </div>
            </div>


            <br/>
            <div class="from-row">
                <div class="col-md-6">

                    <input type="submit" name="ajouter" value="Ajouter" class="btn btn-success">
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>

        </form>



    </div>
    </body>
    </html>
@endsection
