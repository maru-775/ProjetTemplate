@extends('layouts.master')
@section('content')
    <br><br><br>
    <table class="table table-bordered table-striped table-responsive">
        <thead>
        <tr>
            <th style="widht:60%">id_inscription</th>
            <th style="widht:20%">nom du membre</th>
            <th style="widht:20%">nom du cour</th>
            <th style="widht:20%">date d'inscription</th>

        </tr>
        </thead>
        @foreach($mesInscriptions as $unInscription)
            <tr>
                <td>{{$unInscription->id}}</td>
                <td>{{$unInscription->nom}}</td>
                <td>{{$unInscription->nom_cours}}</td>
                <td>{{$unInscription->date_inscription}}</td>

            </tr>
        @endforeach

    </table>
    @include('Vues.error')
@stop
