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

    Route::put('admin/user/{user}/update', 'App\Http\Controllers\UserController@update')->name('user.profile.update');
    Route::get('admin/users/edit', 'App\Http\Controllers\UserController@edit')->name('users.edit');
    Route::delete('admin/users/{user}/destroy', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');

});


Route::middleware(['role:admin','auth'])->group(function (){

    Route::get('admin/users', 'App\Http\Controllers\UserController@index')->name('users.index');
    Route::put('/users/{user}/attach', 'App\Http\Controllers\UserController@attach')->name('user.role.attach');
    Route::put('/users/{user}/detach', 'App\Http\Controllers\UserController@detach')->name('user.role.detach');

});

Route::middleware(['can:view,user'])->group(function (){

    Route::get('admin/user/{user}/profile', 'App\Http\Controllers\UserController@show')->name('user.profile.show');

});
