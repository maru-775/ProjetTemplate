<?php

namespace App\Http\Controllers;

use App\dao\ServiceMembres;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Request;
use Exception;
use App\Exceptions\MonException;


class MembresController extends Controller{
    public function listerMembres(){

        try{
            $unServiceMembres = new ServiceMembres();
            $monErreur = Session::get('monErreur');
            $mesMembres = $unServiceMembres->getListeMembres();
            return view('Vues/listerMembres', compact('mesMembres', 'monErreur'));
        }catch(MonException $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }catch(Exception $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }
    }
    public function ajoutMembres(){
        $unServiceMembres = new ServiceMembres();
        $mesMembres = $unServiceMembres->getListeMembres();
        return view('Vues/formAjoutMembre', compact('mesMembres'));
    }

    public function postAjouterMembres(){
        try{
            $id = null;
            $nom = Request::input('nom');
            $age = Request::input('age');
            $contact = Request::input('contact');
            $unServiceMembres = new ServiceMembres();
            $unServiceMembres->ajoutMembre($id, $nom, $age, $contact);
            $monErreur = Session::get('monErreur');
            $mesMembres = $unServiceMembres->getListeMembres();
            return view('Vues/listerMembres', compact('mesMembres', 'monErreur'));
        }catch(MonException $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }catch(Exception $e){
            $monErreur = $e->getMessage();
            return view('Vues/error', compact('monErreur'));
        }
    }

    public function updateMembres($id){
        try{
            $monErreur = "";
            $unServiceMembres = new ServiceMembres();
            $unMembre = $unServiceMembres->getMembreByid($id);
            return view('Vues/formModificationMembre', compact('unMembre', 'monErreur'));
        }catch(MonException $e){
            $monErreur = $e->getMessage();
            return view('Vues/formModificationMembre', compact('monErreur'));
        }catch (Exception $e){
            $monErreur= $e->getMessage();
            return view('Vues/formModificationMembre', compact('monErreur'));
        }
    }

    public function postModificationMembres($id = null){
        try{
            $id = Request::input('id');
            $nom = Request::input('nom');
            $age = Request::input('age');
            $contact = Request::input('contact');
            $unServiceMembres = new ServiceMembres();
            $unMembre = $unServiceMembres->getMembreByid($id);
            $monErreur = Session::get('monErreur');
            $unServiceMembres->updateMembre($id, $nom, $age, $contact);
            $mesMembres = $unServiceMembres->getListeMembres();
            return view('Vues/listerMembres', compact('mesMembres', 'monErreur'));
        }catch(MonException $e){
            $monErreur = $e->getMessage();
            return view('Vues/formModificationMembre', compact('unMembre','monErreur'));
        }catch (Exception $e){
            $monErreur= $e->getMessage();
            return view('Vues/formModificationMembre', compact('unMembre','monErreur'));
        }
    }

    public function supprimeMembre($id){
        try{
            $unServiceMembres = new ServiceMembres();
            $unServiceMembres->deleteMembre($id);
        }catch(MonException $e){
            Session::put('monErreur', $e->getMessage());
        }catch (Exception $e){
            Session::put('monErreur', $e->getMessage());
        }finally{
            $monErreur = Session::get('monErreur');
            $mesMembres = $unServiceMembres->getListeMembres();
            return view('Vues/listerMembres', compact('mesMembres', 'monErreur'));
        }
    }

}
