<?php

use App\Http\Controllers\StagiaireController;
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
    return view('welcome');
});


Route::get('/stagiaires',[StagiaireController::class,'index'])->name('stagiaires.index');// route('stagiaires.index')
Route::get('/stagiaires/create',[StagiaireController::class,'create'])->name('stagiaires.create');
Route::get('/stagiaires/{stagiaire}',[StagiaireController::class,'show'])->name('stagiaires.show');// route('stagiaires.show',['stagiaire'=>$stagiaire])
Route::post('/stagiaires',[StagiaireController::class,'store'])->name('stagiaire.store');
Route::get('/stagiaires/{stagiaire}/edit',[StagiaireController::class,'edit'])->name('stagiaires.edit');
Route::put('/stagiaires/{stagiaire}',[StagiaireController::class,'update'])->name('stagiaires.update');
Route::delete('/stagiaires/{stagiaire}',[StagiaireController::class,'destroy'])->name('stagiaires.destroy');



//Route::resource('stagiairs',StagiaireController::class);
