<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at ',
        'password',
        'morada',
        'contribuinte',
        'telefone',
        'nome_responsavel_operador',
        'email_responsavel_operador',
        'telefone_responsavel_operador'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function infraestrutura(){

        //user_id
        return $this->hasOne('App\Models\Infraestrutura');

    }

    public function municipio(){

        //user_id
        return $this->hasOne('App\Models\Municipio');

    }

    public function infraestruturas(){

        return $this->hasMany('App\Models\Infraestrutura');
    }

    public function roles(){

        // To customize table names and columns
        //return $this->belongsToMany('App\Models\Role', 'role_user', 'user_id','role_id');

        return $this->belongsToMany('App\Models\Role')->withPivot('created_at');

    }

}
