<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MaisonController;

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

Route::get('/etudiant', [EtudiantController::class, 'index'])->name('index.etudiant');
Route::post('/etudiant', [EtudiantController::class, 'enregistrer']);
Route::get('/etudiant/{id}/delete', [EtudiantController::class, 'supprimer'])->name('delete.etudiant');
Route::get('/etudiant/{id}/edit', [EtudiantController::class, 'editer'])->name('edit.etudiant');
Route::post('/etudiant/{id}/update', [EtudiantController::class, 'update'])->name('update.etudiant');
Route::get('/maison', [MaisonController::class, 'index']);
