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

    $collection = collect($pasta);

    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];
    return view('prodotti', $data);

})->name('prodotti');


Route::get('/prodotto/{id}', function ($id) {
    $pasta = config('pasta');

    if (is_numeric($id) && $id >= 0 && $id < count($pasta)) {

        $prodotto = $pasta[$id];

        $data = [ 
        'prodotto' => $prodotto
        ];
        return view('prodotto', $data);
    } else {
        abort('404');
    }
    

})->name('dettagli-prodotto');



Route::get('/news', function () {
    return view('news');
})->name('news');
