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
    return view('home');
})->name('home');



Route::get('/prodotti', function () {
    $pasta = config('pasta');

    $data = [ 'formati' => $pasta];
    return view('prodotti', $data);

})->name('prodotti');


Route::get('/prodotto/{id}', function ($id) {
    $pasta = config('pasta');


    $data = [ 'prodotto' => $pasta];
    return view('prodotto', $data);

})->name('dettagli-prodotto');



Route::get('/news', function () {
    return view('news');
})->name('news');
