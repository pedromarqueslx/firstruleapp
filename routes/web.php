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
    return view('welcome');
});


Route::get('/disponibilidades', function () {
    return view('disponibilidades');
});

//Route::get('/disponibilidades/{id}', 'App\Http\Controllers\Disponibilidades@index');

//Route::get('/disponibilidade/{id}', function($id) {
//    return view('disponibilidades');
//});

Route::get('/acessos', function () {
    return view('acessos');
});

Route::get('/cadastros', function () {
    return view('cadastros');
});

Route::get('/operadores', function () {
    return view('operadores');
});

Route::get('/municipios', function () {
    return view('municipios');
});

Route::get('/licenciamentos', function () {
    return view('licenciamentos');
});

Route::get('/contato', function () {
    return view('contato');
});


Route::resource('disponibilidades/{id}', 'App\Http\Controllers\Disponibilidades');



