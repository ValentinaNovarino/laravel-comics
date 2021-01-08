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
    $comics = config('comics');
    $data = [
        'series' => $comics
    ];
    return view('home', $data);
});

Route::get('/comic/{id}', function($id) {
    // recupero fumetti
    $comic = config('comics');
    // verifico che l'id è una chiave
    if(array_key_exists($id, $comic)) {
        $fumetto = $comics[$id];
        $data = [
            'comic' => $fumetto
        ];
        return view('details', $data);
    }
    abort(404);
});
