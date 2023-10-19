<?php
namespace App\dao;

use App\Exceptions\MonException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class ServiceCours{
    public function getListeCours(){
        try{
            $lesCours = DB::table('Cours')
                ->select('id', 'nom_cours', 'description', 'horaire', 'jour_semaine')->get();
            return $lesCours;
        }catch(QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }

}
