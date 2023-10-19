<?php
namespace App\dao;

use App\Exceptions\MonException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class ServiceInscriptions{
    public function getListeInscriptions(){
        try{
            $lesInscriptions = DB::table('Inscriptions')
                ->select('Inscriptions.id', 'Membres.nom', 'Cours.nom_cours', 'Inscriptions.date_inscription')
                ->join('Membres', 'Inscriptions.membre_id', '=', "Membres.id")
                ->join('Cours', 'Inscriptions.cours_id', '=', 'Cours.id')
                ->get();
            return $lesInscriptions;
        }catch(QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
}
