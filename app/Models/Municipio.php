<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;


class Municipio extends Model
{
    use HasFactory;
    //use SoftDeletes;

    //protected $date = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'nome',
        'email',
        'contribuinte',
        'telefone',
        'morada',
        'responsavel',
        'responsavel_telefone',
        'responsavel_email',
        'observacoes'
    ];

    public function infraestruturas(){

        return $this->hasMany('App\Models\Infraestrutura');

    }

    public function user(){

        return $this->belongsTo('App\Models\User');

    }


}
