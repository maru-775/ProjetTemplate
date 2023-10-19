<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/listerMembres', [\App\Http\Controllers\MembresController::class, 'listerMembres']);
Route::get('/listerCours', [\App\Http\Controllers\CoursController::class, 'listerCours']);
Route::get('/listerInscriptions', [\App\Http\Controllers\InscriptionsController::class, 'listerInscriptions']);

Route::get('/ajouterMembres', [\App\Http\Controllers\MembresController::class, 'ajoutMembres']);
Route::post('/validerAjoutMembre', array(
    'uses' => '\App\Http\Controllers\MembresController@postAjouterMembres',
    'as' => 'postAjouterMembres',
));

Route::get('/modifierMembres/{id}', [\App\Http\Controllers\MembresController::class, 'updateMembres']);
Route::post('/postModifierMembre/{id}',
    array(
        'uses' => '\App\Http\Controllers\MembresController@postModificationMembres',
        'as' => 'postModifierMembre',
    )
);

Route::get('/supprimerMembre/{id}', [\App\Http\Controllers\MembresController::class, 'supprimeMembre']);
