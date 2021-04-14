<?php

use App\Http\Controllers\HomeController;
use App\Models\Concessoe;
use App\Models\Infraestrutura;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function (){

    Route::get('infraestruturas/', 'App\Http\Controllers\InfraestruturasController@index')->name('infraestruturas.index');
    Route::get('infraestruturas/{infraestruturas}', 'App\Http\Controllers\InfraestruturasController@show')->name('infraestruturas.show');
    Route::get('infraestrutura/create', 'App\Http\Controllers\InfraestruturasController@create')->name('infraestruturas.create');
    Route::post('infraestruturas', 'App\Http\Controllers\InfraestruturasController@store')->name('infraestruturas.store');
    Route::get('infraestrutura/edit/{infraestruturas}', 'App\Http\Controllers\InfraestruturasController@edit')->name('infraestruturas.edit');
    Route::delete('infraestruturas/{infraestruturas}', 'App\Http\Controllers\InfraestruturasController@destroy')->name('infraestruturas.destroy');
    Route::patch('infraestruturas/{infraestruturas}/update', 'App\Http\Controllers\InfraestruturasController@update')->name('infraestruturas.update');

    Route::get('disponibilidades/', 'App\Http\Controllers\InfraestruturasController@index')->name('infraestruturas.index');
    Route::get('acessos/', 'App\Http\Controllers\InfraestruturasController@acessos')->name('infraestruturas.acessos');
    Route::get('cadastros/', 'App\Http\Controllers\InfraestruturasController@cadastros')->name('infraestruturas.cadastros');

    //Route::resource('/acessos','App\Http\Controllers\InfraestruturasController');
    //Route::resource('/cadastros','App\Http\Controllers\InfraestruturasController');
    //Route::resource('/users','App\Http\Controllers\UsersController');


});
