@extends('layouts.design')

@section('content')


    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Client</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr>
                        <th>CIN</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Numero</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($client as $c)


                        <tr class="odd gradeX">
                            <td>{{$c->cinclient}}</td>
                            <td>{{$c->nomclient}}</td>
                            <td>{{$c->prenomclient}}</td>
                            <td>{{$c->numtelclient}}</td>


                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>



        </div>
    </div>
    <!--End Advanced Tables -->


@endsection