<?php


use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){

    Route::get('admin/roles', 'App\Http\Controllers\RoleController@index')->name('roles.index');
    Route::post('admin/roles', 'App\Http\Controllers\RoleController@store')->name('roles.store');
    Route::delete('admin/roles/{role}/destroy', 'App\Http\Controllers\RoleController@destroy')->name('roles.destroy');
    Route::get('admin/roles/{role}/edit', 'App\Http\Controllers\RoleController@edit')->name('role.edit');

    Route::put('admin/roles/{role}/update', 'App\Http\Controllers\RoleController@update')->name('roles.update');
    Route::put('admin/roles/{role}/attach', 'App\Http\Controllers\RoleController@attach_permission')->name('role.permission.attach');
    Route::put('admin/roles/{role}/detach', 'App\Http\Controllers\RoleController@detach_permission')->name('role.permission.detach');

});


