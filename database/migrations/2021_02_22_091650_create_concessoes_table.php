<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcessoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concessoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable($value = true);
            $table->string('nome')->nullable($value = true);
            $table->string('email')->nullable($value = true);
            $table->string('contribuinte')->nullable($value = true);
            $table->string('telefone')->nullable($value = true);
            $table->string('morada')->nullable($value = true);
            $table->string('responsavel')->nullable($value = true);
            $table->string('responsavel_telefone')->nullable($value = true);
            $table->string('responsavel_email')->nullable($value = true);
            $table->string('observacoes')->nullable($value = true);
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
        Schema::dropIfExists('concessoes');
    }
}
