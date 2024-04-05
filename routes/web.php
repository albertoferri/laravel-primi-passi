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
    return view('homepage');
});

Route::get('/pagina1', function () {

    $hello = "HELLO WOLRD";
    $hello2 = "SECONDO HELLO WORLD";


    return view('pagina1', compact('hello', 'hello2'));
})->name('pagina1');

Route::get('/pagina2', function () {

    
    return view('pagina2');
})->name('pagina2');

Route::get('/pagina3', function () {
    return view('pagina3');
})->name('pagina3');

Route::get('/pagina4', function () {
    return view('pagina4');
})->name('pagina4');