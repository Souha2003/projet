<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnseignantController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'homepage'])->name('home');
Route::get('/listeEnseignant',[EnseignantController::class,'listepage'])->name('listeEnseignant');
Route::post('/enseignantAdmin',[EnseignantController::class, 'addEnseignant'])->name('addEnseignant');  //ajouter enseignant
Route::get('/enseignantAdmin',[EnseignantController::class, 'allEnseignant'])->name('allEnseignant');
Route::get('/delete/{id}',[EnseignantController::class, 'delete'])->name('deleteEnseignant');
Route::put('/update/{id}',[EnseignantController::class, 'update'])->name('updateEnseignant');
Route::get('/edit/{id}',[EnseignantController::class, 'edit'])->name('editEnseignant');



