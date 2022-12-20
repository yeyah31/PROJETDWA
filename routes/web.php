<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\ConnexionController;
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

Auth::routes();
Route::resource('connexion', connexionController::class);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/**
 * User Route
 */
Route::middleware(['auth','user-access:user'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index.home');
    Route::post('/home', [App\Http\Controllers\HomeController::class, 'store'])->name('store.home');
 Route::get('/home/forClient', [App\Http\Controllers\HomeController::class, 'clients'])->name('clients.home');

 //   Route::resource('envois', FormulaireController::class);

});
/**
 * Admin Route
 */
Route::middleware(['auth','user-access:admin'])->group(function(){
    Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
    Route::post('/admin/home', [App\Http\Controllers\HomeController::class, 'destroy'])->name('destroy.home');
    Route::post('/admin/home/traiterDemande', [App\Http\Controllers\HomeController::class, 'traiter'])->name('traiter.admin.home');
    Route::get('/admin/home/traiterDemande', [App\Http\Controllers\HomeController::class, 'voir'])->name('voir.admin.home');
  //  Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'contac'])->name('contac.home');

});
/**
 * Assistancia Route
 */
Route::middleware(['auth','user-access:assistancia'])->group(function(){
    Route::get('/assistancia/home', [App\Http\Controllers\HomeController::class, 'assistanciaHome'])->name('assistancia.home');
});

