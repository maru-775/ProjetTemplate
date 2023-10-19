<?php

namespace App\Http\Controllers;

use App\dao\ServiceCours;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Request;
use Exception;
use App\Exceptions\MonException;


class CoursController extends Controller{
    public function listerCours(){

        try{
            $unServiceCours = new ServiceCours();
            $monErreur = Session::get('monErreur');
            $mesCours = $unServiceCours->getListeCours();
            return view('Vues/listerCours', compact('mesCours', 'monErreur'));
        }catch(MonException $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }catch(Exception $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }
    }
}
