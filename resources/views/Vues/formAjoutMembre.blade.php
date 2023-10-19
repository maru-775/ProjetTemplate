@extends('layouts.master')
@section('content')
    <br><br>
    <br><br>
    {!! Form::open(['url' => '/validerAjoutMembre']) !!}
    <div class="col-md-12  col-sm-12 well well-md">
        <h1> Ajout Manga</h1>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Nom : </label>
                <div class="col-md-2 col-sm-2">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">Age : </label>
                <div class="col-md-2 col-sm-2">
                    <input type="number" name="age" class="form-control" placeholder="Age" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 col-sm-3 control-label">contact : </label>
                <div class="col-md-2 col-sm-2">
                    <input type="text" name="contact" class="form-control" placeholder="contact" required>
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
    </div>
