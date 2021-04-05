<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

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
        'email_verified_at',
        'password',
        'tipo_entidade',
        'sector_atividade',
        'codigo_certidao',
        'morada',
        'codigo_postal',
        'contribuinte',
        'telefone',
        'pais',
        'nome_responsavel_operador',
        'email_responsavel_operador',
        'telefone_responsavel_operador',
        'anexos',
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

    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }

    //Accessor for image URL
    public function getAnexosAttribute($value){
        return asset('storage/'. $value);
    }

    public function infraestruturas(){
        return $this->hasMany('App\Models\Infraestrutura');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function userHasRole($role_name){
        foreach($this->roles as $role) {
            if (Str::lower($role_name) == Str::lower($role->name))
                return true;
        }
        return false;
    }

}
