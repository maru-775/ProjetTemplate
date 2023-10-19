@extends('layouts.master')
@section('content')
    <br><br><br>
    <table class="table table-bordered table-striped table-responsive">
        <thead>
        <tr>
            <th style="widht:60%">id</th>
            <th style="widht:20%">nom_cours</th>
            <th style="widht:20%">description</th>
            <th style="widht:20%">horaire</th>
            <th style="widht:20%">jour_semaine</th>

        </tr>
        </thead>
        @foreach($mesCours as $unCours)
            <tr>
                <td>{{$unCours->id}}</td>
                <td>{{$unCours->nom_cours}}</td>
                <td>{{$unCours->description}}</td>
                <td>{{$unCours->horaire}}</td>
                <td>{{$unCours->jour_semaine}}</td>
            </tr>
        @endforeach

    </table>
    @include('Vues.error')
@stop
