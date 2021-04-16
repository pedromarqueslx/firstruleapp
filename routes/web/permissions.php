<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){

    Route::get('admin/permissions', 'App\Http\Controllers\PermissionController@index')->name('permissions.index');

});
