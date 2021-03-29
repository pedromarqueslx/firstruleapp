<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Infraestrutura extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $date = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'referencia_orait',

        'user_name',
        'user_contribuinte',
        'user_morada',
        'user_telefone',
        'user_email',

        'referencia_operador',
        'responsavel_operador',
        'telefone_responsavel_operador',
        'email_responsavel_operador',
        'municipio_id',
        'municipio_cartas',
        'anexo',
        'cvp_entrada',
        'cvp_entrada_ponto_entrada',
        'cvp_entrada_ponto_ligacao',
        'cvp_entrada_folga',
        'cvp_saida',
        'cvp_saida_ponto_entrada',
        'cvp_saida_ponto_ligacao',
        'cvp_saida_folga',
        'tipo_tubo_ponto_entrada',
        'tipo_cabo',
        'seccao_cabo',
        'cabo_identificacao',
        'cabo_designacao_cabos',
        'cabo_capacidade',
        'cabo_peso',
        'cabo_diametro',
        'cabo_seccao',
        'cvp_identificacao_equipamento',
        'cvp_cabo_ligacao',
        'cvp_tipo_equipamento',
        'cvp_dimensoes',
        'cvp_peso',
        'cvp',
        'observacoes',
        'metragem',
        'quantidade_equipamentos',
        'quantidade_pontos_entrada',
        'observacoes_resposta',
        'resposta',
        'data_resposta_licenciamento',
        'data_pedido_acesso',
        'data_resposta_acesso',
        'data_pedido_cadastro',
        'data_resposta_cadastro'
    ];

    public function user(){

        return $this->belongsTo('App\Models\User');
        //return $this->belongsTo('App\Models\User', 'user_id');
        //return $this->belongsTo(User::class);

    }

    //Accessor for image URL
    public function getAnexoAttribute($value){

        return asset('storage/'. $value);

    }

}



