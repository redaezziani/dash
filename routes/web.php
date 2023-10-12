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
Route::post('/Store', [App\Http\Controllers\Controller::class, 'store'])->name('Store');

