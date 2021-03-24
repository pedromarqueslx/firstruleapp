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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::group(['middleware'=>'web'], function() {
Route::middleware('auth')->group(function () {

    Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.index');
    Route::resource('/infraestruturas','App\Http\Controllers\InfraestruturasController');
    Route::get('/infraestruturas', 'App\Http\Controllers\InfraestruturasController@index')->name('infraestruturas.index');
    Route::get('/infraestruturas/create', 'App\Http\Controllers\InfraestruturasController@create')->name('infraestruturas.create');
    Route::post('/infraestruturas', 'App\Http\Controllers\InfraestruturasController@store')->name('infraestruturas.store');
    Route::get('/infraestruturas/edit', 'App\Http\Controllers\InfraestruturasController@edit')->name('infraestruturas.edit');
    Route::patch('/infraestruturas/update', 'App\Http\Controllers\InfraestruturasController@update')->name('infraestruturas.update');


    Route::resource('/disponibilidades','App\Http\Controllers\InfraestruturasController');
    // The problem were is that it can link to Disponibilidades, Acessos or Cadastros
    Route::get('/disponibilidades/{$infraestrutura}', [App\Http\Controllers\HomeController::class, 'show'])->name('disponibilidades');

    Route::resource('/acessos','App\Http\Controllers\InfraestruturasController');
    Route::resource('/cadastros','App\Http\Controllers\InfraestruturasController');
    Route::resource('/users','App\Http\Controllers\UsersController');
    Route::resource('/municipios','App\Http\Controllers\MunicipiosController');
    // use infraestruturas table ???
    Route::resource('/licenciamentos','App\Http\Controllers\LicenciamentosController');

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
