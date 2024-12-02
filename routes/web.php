<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StagiaireController;

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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('auth')->group(function(){
Route::get('/home', function(){
     return view('home') ;
});

Route::match(['get', 'post'], '/stagiaires', [App\Http\Controllers\StagiaireController::class, 'index'])->name('stagiaires.index');
Route::get('/stagiaires/create', [App\Http\Controllers\StagiaireController::class, 'create'])->name('create');
Route::post('/stagiaires/store', [App\Http\Controllers\StagiaireController::class, 'store'])->name('stagiaires.store');

Route::get('/stagiaires/{stagiaire}/edit', [App\Http\Controllers\StagiaireController::class, 'edit'])->name('stagiaires.edit');
Route::put('/stagiaires/{stagiaire}', [App\Http\Controllers\StagiaireController::class, 'update'])->name('stagiaires.update');

Route::delete('/stagiaires/{id}/delete', [App\Http\Controllers\StagiaireController::class, 'destroy'])->name('stagiaires.destroy');
Route::get('/stagiaires/{id}/show', [App\Http\Controllers\StagiaireController::class, 'show'])->name('stagiaires.show');

Route::get('/download-cv/{userId}', [App\Http\Controllers\StagiaireController::class, 'downloadCV'])->name('download.cv');
Route::get('/show-demande/{stagiaire}', [App\Http\Controllers\StagiaireController::class, 'demande'])->name('show.demande');

});
