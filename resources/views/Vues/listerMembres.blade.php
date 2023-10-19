@extends('layouts.master')
@section('content')
    <br><br><br>
    <table class="table table-bordered table-striped table-responsive">
        <thead>
        <tr>
            <th style="widht:60%">id</th>
            <th style="widht:20%">nom</th>
            <th style="widht:20%">age</th>
            <th style="widht:20%">contact</th>
            <th style="widht:20%">modifier</th>
            <th style="widht:20%">supprimer</th>

        </tr>
        </thead>
        @foreach($mesMembres as $unMembre)
            <tr>
                <td>{{$unMembre->id}}</td>
                <td>{{$unMembre->nom}}</td>
                <td>{{$unMembre->age}}</td>
                <td>{{$unMembre->contact}}</td>
                <td style="text-align:center;">
                    <a href="{{url('/modifierMembres')}}/{{$unMembre->id}}">
                        <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" data-placement="top" title="Modification"></span>
                    </a>
                </td>
                <td style="text-align:center;">
                    <a class="glyphicon glyphicon-remove" data-toggle="tooltip" data-placement="top" title="Suppression"
                       onclick="javascript:if (confirm('Suppression confirmée ?'))
                    { window.location = '{{url('/supprimerMembre')}}/{{$unMembre->id}}';}">
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
    @include('Vues.error')
@stop
