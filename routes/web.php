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
    return view('home',[
        'arrComics'  => config('comics'),
    ]);
})->name('home');

Route::get('/{id}', function ($id) {
    // inizializiamo la variabile card nulla
    $card = null;
    // cicliamo con un for each direttamente sul array 'comics'
    foreach (config('comics') as $value) {
        // se il valore di ID(nel array) e uguale al valore di id(parametro)
        if ($value['id'] == $id) {
            // attribuiamo alla variabile card il contenuto del iterazione
            $card = $value;
            break;
        }
    }
    // se la variabile card e true
    if ($card) {
        // mi ritorni la pagina card_page passandoli i seguenti parametri
        return view('card_page', [
            'pageTitle' => 'card - Comics',
            'card'     => $card,
        ]);
    } else {
        // se no mi ritorni errore(pagina non trovata).
        abort(404);
    }
})->name('card_page');
