@extends('layouts.master')
@section('content')
    <br><br>
    <h1>Modification d'un membre'</h1>
    {!! Form::open(array('route' => array ('postModifierMembre', $unMembre->id), 'method'=>'post')) !!}
    <div class="col-md-12  col-sm-12 well well-md">
        <div class="form-horizontal">
            <input type="hidden" name="id" value="{{$unMembre->id ?? ''}}"/>
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">nom : </label>
                <div class="col-md-2 col-sm-2">
                    <input type="text" name="nom" value="{{$unMembre->nom ?? ''}}" class="form-control" placeholder="Nom" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Age : </label>
                <div class="col-md-2  col-sm-2">
                    <input type="text" name="age" value="{{$unMembre->age ?? ''}}" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Contact : </label>
                <div class="col-md-2  col-sm-2">
                    <input type="text" name="contact" value="{{$unMembre->contact ?? ''}}" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                    <button type="submit" class="btn btn-default btn-primary">
                        <span class="glyphicon glyphicon-ok"></span> Valider
                    </button>
                    &nbsp;
                    <button type="button" class="btn btn-default btn-primary"
                            onclick="javascript: window.location = '{{url('/')}}';">
                        <span class="glyphicon glyphicon-remove"></span> Annuler</button>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-3  col-sm-6 col-sm-offset-3">
            </div>
        </div>
        @include('Vues.error')
    </div>
