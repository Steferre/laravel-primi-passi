<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',
    [
        'name' => 'Utente',
    ]
);
})->name("paginaPrincipale");

Route::get('/contatti', function () {
    return view('contacts', [
        'numeroUfficio' => 5074897523,
        'numeroCell' => 3502478914
    ]
);
})->name("contacts");

Route::get('/progetti', function() {
    return view('projects', [
        'none' => 'Ancora nessun progetto caricato!',
    ]);
})->name('projects');

Route::get('/descrizione', function () {
    return view('about');
})->name("about");
