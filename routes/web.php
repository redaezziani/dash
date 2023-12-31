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
    return redirect('/welcome');
});
Route::get('/Add-Contrat', [App\Http\Controllers\Controller::class, 'Add'])->name('Add');
Route::get('/welcome', [App\Http\Controllers\Controller::class, 'welcome'])->name('Welcome');
Route::get('/Show', [App\Http\Controllers\Controller::class, 'Show'])->name('Show');
Route::get('/Delete/{id}', [App\Http\Controllers\Controller::class, 'Delete'])->name('Dlete');
Route::get('/DeleteFacture/{id}', [App\Http\Controllers\Controller::class, 'DeleteFacture'])->name('DeleteFacture');
Route::post('/Store', [App\Http\Controllers\Controller::class, 'store'])->name('Store');
Route::get('/edit-contrat/{id}', [App\Http\Controllers\Controller::class, 'Edit'])->name('Edit');
Route::get('/facture-modal/{id}', [App\Http\Controllers\Controller::class, 'facturemodal'])->name('facture-modal');
Route::post('/updateContart', [App\Http\Controllers\Controller::class, 'Up'])->name('Up');
Route::post('/updateFacture', [App\Http\Controllers\Controller::class, 'UpFacture'])->name('updateFacture');
Route::get('/Add-Facture', [App\Http\Controllers\Controller::class, 'AddFacture'])->name('AddFacture');
Route::post('/Store-Facture', [App\Http\Controllers\Controller::class, 'storeFacture'])->name('Store-Facture');
Route::get('/Show-facture', [App\Http\Controllers\Controller::class, 'ShowFacture'])->name('Show-facture');
Route::get('/PDFContrat/{id}', [App\Http\Controllers\Controller::class, 'PDFContrat'])->name('PDFContrat');
Route::get('/PDFFacture/{id}', [App\Http\Controllers\Controller::class, 'PDFFacture'])->name('PDFFacture');


