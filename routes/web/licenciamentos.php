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

    Route::resource('/licenciamentos','App\Http\Controllers\LicenciamentosController');

});
