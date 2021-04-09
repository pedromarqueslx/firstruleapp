<?php

use App\Http\Controllers\HomeController;
use App\Models\Concessoe;
use App\Models\Infraestrutura;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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

Auth::routes();

Route::get('/', function (){

    return view('auth/login');

});

Route::middleware('auth')->group(function (){

    //Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

Route::get('/mail', function(){

    $data = [
        'title'     => 'okiodki',
        'content'   => 'oookiiokiidddoookkii',
    ];

    Mail::send('emails.mail', $data, function($message){

        $message->to('pedromarqueslx@gmail.com', 'Pedro')->subject('hello how are you');

    });

});
