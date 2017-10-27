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

        <form id="pro" action="" method="POST">

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
                    <input class="form-control" id="idpromotion" type="text" placeholder="123" required >
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Nom Produit :</label>
                    <select class="form-control">
                        <option>produit1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Nom station :</label>
                    <select class="form-control">
                        <option>station1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <br/>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="disabledSelect">Ancien prix :</label>
                    <input class="form-control" id="ancienprix" type="text" placeholder="6dt" disabled="">
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label>Pourcentage:</label>
                    <select class="form-control" id="pourcentage">
                        <option>5%</option>
                        <option>10%</option>
                        <option>20%</option>
                        <option>30%</option>
                        <option>50%</option>
                    </select>
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="disabledSelect">Nouveau prix :</label>
                    <input class="form-control" id="nouveauprix" type="text" placeholder="6dt" disabled="">
                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="exampleInputAdresse">Date début :</label>
                    <input  id="dd" type="date"  placeholder="26/02/2012" class="form-control" >

                </div>
            </div>
            </br>
            <div class="form-row">
                <div class="col-md-6">
                    <label for="exampleInputAdresse">Date fin:</label>
                    <input  id="df" type="date"  placeholder="31/02/2017" class="form-control">
                </div>
            </div>


            <br/>
            <div class="from-row">
                <div class="col-md-6">
                    <a href="#" class="btn btn-success">Ajouter</a>
                </div>
            </div>

        </form>



    </div>
    </body>
    </html>
@endsection
