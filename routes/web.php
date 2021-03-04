<?php

use App\Models\Municipio;
use App\Models\Infraestrutura;
use App\Models\User;
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

/*
Route::get('/disponibilidades', function () {
    return view('disponibilidades');
});
*/

//Route::get('/disponibilidades/{id}', 'App\Http\Controllers\Disponibilidades@index');

//Route::get('/disponibilidade/{id}', function($id) {
//    return view('disponibilidades');
//});

/*
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
*/

//Route::resource('contato', 'App\Http\Controllers\Contato');

//Route::resource('disponibilidades/{id}/{name}', 'App\Http\Controllers\Disponibilidades');






//Eloquent ORM
Route::get('/read', function (){

    $infraestruturas = Infraestrutura::all();

    foreach ($infraestruturas as $infraestrutura) {
        return $infraestrutura->referencia_orait;
    }
});


Route::get('/find', function (){

    $infraestruturas = Infraestrutura::find(3);

    return $infraestruturas->referencia_orait;
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

Route::get('/basicinsert', function (){

    $infraestruturas = new Infraestrutura;

    $infraestruturas->referencia_orait = 'new';
    $infraestruturas->nome_operador = 'cool';

    $infraestruturas->save();

});


/*Route::get('/update', function (){
    $infraestruturas = Infraestrutura::find(5);
    $infraestruturas->referencia_orait = 'new 7';
    $infraestruturas->nome_operador = 'cool 7';
    $infraestruturas->save();
});*/





/*
Route::get('/municipios/create', function (){

    $user = User::findOrFail(1);

    $municipio = new Municipio([
        'nome'=>'nome',
        'email'=>'email',
        'contribuinte'=>'contribuinte'
    ]);

    $user->municipio()->save($municipio);

});
*/


Route::get('/municipios/update', function (){

    $municipio = Municipio::whereUserId(1)->first();

    $municipio->nome = 'oeiras';

    $municipio->save();

});


Route::get('/update', function (){

    Infraestrutura::where('id',9)->where('is_admin', 0)->update(['referencia_orait'=>'updade', 'nome_operador'=>'okidoki']);

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

    DB::insert('insert into infraestruturas(referencia_orait, nome_operador) values(?, ?)', ['first','second']);

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












//Eloquent Relationships
// One to One relationship

Route::get('/user/{id}/infraestrutura', function($id){

    return User::find($id)->infraestrutura->referencia_orait;

});

/*
Route::get('/infraestrutura/{id}/user', function($id){

    return Infraestrutura::find($id)->user->email;

});
*/

//One to Many relationship
/*
Route::get('/infraestruturas/{id}', function($id){

    $user = User::find($id);

    foreach ($user->infraestruturas as $infraestrutura){

        echo $infraestrutura->referencia_orait;

    }
});
*/


Route::get('/user/{id}/role', function($id){

    $user = User::find($id)->roles()->orderBy('id','desc')->get();

    return $user;

    /* foreach ($user->roles as $role){

        return $role->id;

    }*/

});


// Acess pivot table

Route::get('user/pivot', function(){

    $user = User::find(1);

    foreach ($user->roles as $role){

        echo $role->pivot->created_at;

    }
});



//

/*
 *
 *
 *

Route::get('/infraestruturas/{id}/municipio', function($id){

    //$municipio = Municipio::find($id)->infraestruturas()->orderBy('id','desc')->get();

    $municipio = Municipio::find($id);

    //return $municipio;

    foreach ($municipio->infraestruturas as $infraestrutura){

        return $infraestrutura->id;

    }


});

*/




// FirstRule Application

//Route::get('/infraestruturas/create', function (){

    //$user = User::findOrFail(1);

    /*$infraestrutura = new Infraestrutura([
        'referencia_orait'=>'reforait',
        'nome_operador'=>'operator',
        'contribuinte_operador'=>'contribuinte_operador',
        'morada_operador'=>'morada_operador',
        'telefone_operador'=>'telefone_operador',
        'email_operador'=>'email_operador',
        'referencia_operador'=>'referencia_operador',
        'responsavel_operador'=>'responsavel_operador',
        'telefone_responsavel_operador'=>'telefone_responsavel_operador',
        'email_responsavel_operador'=>'email_responsavel_operador',
        'municipio_id' =>'municipio_id',
        'municipio_cartas'=>'municipio_cartas',
        'cvp_entrada'=>'cvp_entrada',
        'cvp_entrada_ponto_entrada'=>'cvp_entrada_ponto_entrada',
        'cvp_entrada_ponto_ligacao'=>'cvp_entrada_ponto_ligacao',
        'cvp_entrada_folga'=>'cvp_entrada_folga',
        'cvp_saida'=>'cvp_saida',
        'cvp_saida_ponto_entrada'=>'cvp_saida_ponto_entrada',
        'cvp_saida_ponto_ligacao'=>'cvp_saida_ponto_ligacao',
        'cvp_saida_folga'=>'cvp_saida_folga',
        'tipo_tubo_ponto_entrada'=>'tipo_tubo_ponto_entrada',
        'tipo_cabo'=>'tipo_cabo',
        'seccao_cabo'=>'seccao_cabo',
        'cabo_identificacao'=>'cabo_identificacao',
        'cabo_designacao_cabos'=>'cabo_designacao_cabos',
        'cabo_capacidade'=>'cabo_capacidade',
        'cabo_peso'=>'cabo_peso',
        'cabo_diametro'=>'cabo_diametro',
        'cabo_seccao'=>'cabo_seccao',
        'cvp_identificacao_equipamento'=>'cvp_identificacao_equipamento',
        'cvp_cabo_ligacao'=>'cvp_cabo_ligacao',
        'cvp_tipo_equipamento'=>'cvp_tipo_equipamento',
        'cvp_dimensoes'=>'cvp_dimensoes',
        'cvp_peso'=>'cvp_peso',
        'cvp'=>'cvp',
        'observacoes'=>'observacoes',
        'metragem'=>'metragem',
        'quantidade_equipamentos'=>'quantidade_equipamentos',
        'quantidade_pontos_entrada'=>'quantidade_pontos_entrada',
        'observacoes_resposta'=>'observacoes_resposta',
        'resposta'=>'resposta',
        'data_resposta_licenciamento'=>'2021-02-22',
        'data_pedido_acesso'=>'2021-02-22',
        'data_resposta_acesso'=>'2021-02-22',
        'data_pedido_cadastro'=>'2021-02-22',
        'data_resposta_cadastro'=>'2021-02-22'
        ]);*/

    //$user->infraestrutura()->save($infraestrutura);

    //Infraestrutura::create(['referencia_orait'=>'laravel', 'nome_operador'=>'okidoki']);

    //return view('infraestruturas/create');

//});

Route::group(['middleware'=>'web'], function(){

    Route::resource('/infraestruturas','App\Http\Controllers\InfraestruturasController');

    Route::resource('/municipios','App\Http\Controllers\MunicipiosController');

    Route::resource('/users','App\Http\Controllers\UsersController');

});
