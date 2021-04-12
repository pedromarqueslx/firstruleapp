<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Licenciamento extends Model
{
    use HasFactory;
    //use SoftDeletes;

    //protected $date = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'municipio',
        'data',
        'referencia_orait',
        'data_inicio_trabalhos',
        'data_fim_trabalhos',
        'anexos',
        'data_envio_licenciamento_municipio',
        'referencia_licenciamento_munipicio',
        'data_autorizacao_municipio',
        'data_envio_autorizacao_operador',
        'observacoes',
        'is_admin'
    ];

    public function infraestruturas(){

        return $this->hasMany('App\Models\Infraestrutura');

    }

    public function user(){

        return $this->belongsTo('App\Models\User');

    }

}
