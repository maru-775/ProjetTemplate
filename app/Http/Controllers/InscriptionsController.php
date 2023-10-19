<?php

namespace App\Http\Controllers;

use App\dao\ServiceInscriptions;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Request;
use Exception;
use App\Exceptions\MonException;


class InscriptionsController extends Controller{
    public function listerInscriptions(){

        try{
            $unServiceInscriptions = new ServiceInscriptions();
            $monErreur = Session::get('monErreur');
            $mesInscriptions = $unServiceInscriptions->getListeInscriptions();
            return view('Vues/listerInscriptions', compact('mesInscriptions', 'monErreur'));
        }catch(MonException $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }catch(Exception $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }
    }
}
