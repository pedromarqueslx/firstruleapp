<?php

use App\Models\Infraestrutura;
use Illuminate\Support\Facades\DB;
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

Route::get('/licenciamentos', function () {
    return view('licenciamentos');
});

Route::resource('contato', 'App\Http\Controllers\Contato');

//Route::resource('disponibilidades/{id}/{name}', 'App\Http\Controllers\Disponibilidades');






//Eloquent ORM
Route::get('/read', function (){

    $infraestruturas = Infraestrutura::all();

    foreach ($infraestruturas as $infraestrutura) {
        return $infraestrutura->infraestruturas_referencia_orait;
    }
});


Route::get('/find', function (){

    $infraestruturas = Infraestrutura::find(3);

    return $infraestruturas->infraestruturas_referencia_orait;
});


Route::get('/findwhere', function (){

    $infraestruturas = Infraestrutura::where('id', 4)->orderBy('id', 'desc')->take(1)->get();
    return $infraestruturas;

});


Route::get('/findmore', function (){

    //$infraestruturas = Infraestrutura::findOrFail('id', 4)->orderBy('id', 'desc')->take(1)->get();

    //$infraestruturas = Infraestrutura::where('user_count', '<', 50)->findOrFail();


    //return $infraestruturas;

});

/*Route::get('/basicinsert', function (){

    $infraestruturas = new Infraestrutura;

    $infraestruturas->infraestruturas_referencia_orait = 'new';
    $infraestruturas->infraestruturas_nome_operador = 'cool';

    $infraestruturas->save();

});*/


Route::get('/basicinsert', function (){

    $infraestruturas = Infraestrutura::find(12);

    $infraestruturas->infraestruturas_referencia_orait = 'new 7';
    $infraestruturas->infraestruturas_nome_operador = 'cool 7';

    $infraestruturas->save();

});


Route::get('/create', function (){

    Infraestrutura::create(['infraestruturas_referencia_orait'=>'laravel', 'infraestruturas_nome_operador'=>'okidoki']);

});


Route::get('/update', function (){

    Infraestrutura::where('id',9)->where('is_admin', 0)->update(['infraestruturas_referencia_orait'=>'updade', 'infraestruturas_nome_operador'=>'okidoki']);

});


Route::get('/delete', function (){

    $infraestrutura = Infraestrutura::find(7);

    $infraestrutura->delete();

});


Route::get('/delete2', function (){

    Infraestrutura::destroy(8);

});











//Database Raw SQL Queries
Route::get('/insert', function(){

    DB::insert('insert into infraestruturas(infraestruturas_referencia_orait,infraestruturas_nome_operador) values(?, ?)', ['first','second']);

});


/*Route::get('/read',function(){

    $results = DB::select('select * from infraestruturas where id = ?', [2]);

    foreach ($results as $result){

        return $result->infraestruturas_referencia_orait;
    }

});*/


/*Route::get('/update', function(){

    $updated = DB::update('update infraestruturas set infraestruturas_referencia_orait = "first update" where id = ?', [2]);

    return $updated;
});*/


/*Route::get('/delete', function(){

    $deleted = DB::delete('delete from infraestruturas where id = ?', [2]);

    return $deleted;
});*/


Route::get('/softdelete', function(){

    Infraestrutura::find(12)->delete();

});


Route::get('/readsoftdelete', function(){

    $infraestrutura = Infraestrutura::onlyTrashed()->where('id',9)->get();

    return $infraestrutura;


});


Route::get('/restore', function(){

    Infraestrutura::withTrashed()->where('is_admin',0)->restore();


});


Route::get('/forcedelete', function(){

    Infraestrutura::onlyTrashed()->where('is_admin',0)->forceDelete();


});
