<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenciamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenciamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable($value = true);
            $table->string('municipio')->nullable($value = true);
            $table->date('data')->nullable($value = true);
            $table->string('referencia_orait')->nullable($value = true);
            $table->date('data_inicio_trabalhos')->nullable($value = true);
            $table->date('data_fim_trabalhos')->nullable($value = true);
            $table->string('anexos')->nullable($value = true);
            $table->date('data_envio_licenciamento_municipio')->nullable($value = true);
            $table->string('referencia_licenciamento_munipicio')->nullable($value = true);
            $table->date('data_autorizacao_municipio')->nullable($value = true);
            $table->date('data_envio_autorizacao_operador')->nullable($value = true);
            $table->string('observacoes')->nullable($value = true);
            $table->softDeletes();
            $table->integer('is_admin')->default(0);
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
        Schema::dropIfExists('licenciamentos');
    }
}
