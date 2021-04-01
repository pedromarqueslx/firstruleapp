<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            //$table->integer('role_id')->nullable($value = true);
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tipo_entidade')->nullable($value = true);
            $table->string('sector_atividade')->nullable($value = true);
            $table->string('codigo_certidao')->nullable($value = true);
            $table->string('morada')->nullable($value = true);
            $table->string('codigo_postal')->nullable($value = true);
            $table->string('contribuinte')->nullable($value = true);
            $table->string('telefone')->nullable($value = true);
            $table->string('pais')->nullable($value = true);
            $table->string('nome_responsavel_operador')->nullable($value = true);
            $table->string('email_responsavel_operador')->nullable($value = true);
            $table->string('telefone_responsavel_operador')->nullable($value = true);
            $table->string('anexos')->nullable($value = true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
