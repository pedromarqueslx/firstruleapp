<?php

use App\Http\Controllers\HomeController;
use App\Models\Municipio;
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

Route::get('/', function () {

    return view('auth/login');

});

Route::middleware('auth')->group(function () {

    Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('infraestruturas/', 'App\Http\Controllers\InfraestruturasController@index')->name('infraestruturas.index');
    Route::get('infraestruturas/{infraestruturas}', 'App\Http\Controllers\InfraestruturasController@show')->name('infraestruturas.show');
    Route::get('infraestrutura/create', 'App\Http\Controllers\InfraestruturasController@create')->name('infraestruturas.create');
    Route::post('infraestruturas', 'App\Http\Controllers\InfraestruturasController@store')->name('infraestruturas.store');
    Route::get('infraestrutura/edit/{infraestruturas}', 'App\Http\Controllers\InfraestruturasController@edit')->name('infraestruturas.edit');
    Route::delete('infraestruturas/{infraestruturas}', 'App\Http\Controllers\InfraestruturasController@destroy')->name('infraestruturas.destroy');
    Route::patch('infraestruturas/{infraestruturas}/update', 'App\Http\Controllers\InfraestruturasController@update')->name('infraestruturas.update');

    //Route::resource('/acessos','App\Http\Controllers\InfraestruturasController');
    //Route::resource('/cadastros','App\Http\Controllers\InfraestruturasController');
    Route::resource('/users','App\Http\Controllers\UsersController');
    Route::resource('/municipios','App\Http\Controllers\MunicipiosController');
    Route::resource('/licenciamentos','App\Http\Controllers\LicenciamentosController');

    Route::get('admin/user/{user}/profile', 'App\Http\Controllers\UserController@show')->name('user.profile.show');
    Route::put('admin/user/{user}/update', 'App\Http\Controllers\UserController@update')->name('user.profile.update');

});


/*Route::get('/admin/user/roles', ['middleware'=> ['web'], function(){

    return "Middleware Role";

}]);*/


Route::get('/mail', function(){

    $data = [
        'title'     => 'okiodki',
        'content'   => 'oookiiokiidddoookkii',
    ];

    Mail::send('emails.mail', $data, function($message){

        $message->to('pedromarqueslx@gmail.com', 'Pedro')->subject('hello how are you');

    });

});
