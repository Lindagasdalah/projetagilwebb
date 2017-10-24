@extends('layouts.app')

@section('content')
    <style>
        body {
            background: url('images.jpg') no-repeat fixed center center;
            background-size: cover;
            font-family: Montserrat;
        }
        .logo {
            width: 400px;
            height: 300px;
            background: url('logoo.png') no-repeat;
            margin: 150px auto;
        }
        .welcome {


            color: #fff;
            font-size: 100%;
            font-family:tahoma, geneva, sans-serif;
            width: 100%;
            border-bottom: none;}
        div#colonne1 {
            float: left;
            font-size: 170%;
            color: #fff;

            font-family:Times New Roman, geneva, serif;


        }
        div#colonne2 {
            float: right;

            color: #fff;
            font-size: 170%;
            font-family:Times New Roman, geneva, serif;


        }

    </style>
    <div class="container">


        <body>
        <div id="colonne1">Société Nationale de Distribution
            des Pétroles AGIL S.A.</div>
        <div id="colonne2">National Company of Oil
            Distribution AGIL S.A.</div>



        <div class="logo"></div>


        </body>





    </div>
@endsection
