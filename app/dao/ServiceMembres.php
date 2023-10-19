<?php
namespace App\dao;

use App\Exceptions\MonException;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class ServiceMembres{
    public function getListeMembres(){
        try{
            $lesMembres = DB::table('Membres')
                ->select('id', 'nom', 'age', 'contact')->get();
            return $lesMembres;
        }catch(QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
    public function ajoutMembre($id = null, $nom, $age, $contact){
        try{
            DB::table('Membres')->insert(
                ['id' => $id, 'nom' => $nom, 'age' => $age, 'contact' => $contact]
            );
        }catch(QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function getMembreByid($id){
        try{
            $unMembre = DB::table('Membres')
                ->select()
                ->where('id', '=', $id)
                ->first();
            return $unMembre;
        }catch(QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }
    public function updateMembre($id, $nom, $age, $contact){
        try{
            DB::table('Membres')
                ->where('id', $id)
                ->update(['nom'=>$nom, 'age'=>$age,
                    'contact'=>$contact]);
        }catch(QueryException $e){
            throw new MonException($e->getMessage(), 5);
        }
    }

    public function deleteMembre($id)
    {
        try {
            DB::table('Membres')->where('id', '=', $id)->delete();
        } catch (QueryException $e) {
            throw new MonException($e->getMessage(), 5);
        }
    }

}
