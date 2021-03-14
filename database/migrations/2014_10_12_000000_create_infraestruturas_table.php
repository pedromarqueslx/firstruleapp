<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraestruturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestruturas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable($value = true);
            $table->string('referencia_orait')->nullable($value = true);
            $table->string('nome_operador')->nullable($value = true);
            $table->string('contribuinte_operador')->nullable($value = true);
            $table->string('morada_operador')->nullable($value = true);
            $table->string('telefone_operador')->nullable($value = true);
            $table->string('email_operador')->nullable($value = true);
            $table->string('referencia_operador')->nullable($value = true);
            $table->string('responsavel_operador')->nullable($value = true);
            $table->string('telefone_responsavel_operador')->nullable($value = true);
            $table->string('email_responsavel_operador')->nullable($value = true);
            $table->string('municipio_id')->nullable($value = true);
            $table->string('municipio_cartas')->nullable($value = true);
            $table->string('cvp_entrada')->nullable($value = true);
            $table->string('cvp_entrada_ponto_entrada')->nullable($value = true);
            $table->string('cvp_entrada_ponto_ligacao')->nullable($value = true);
            $table->string('cvp_entrada_folga')->nullable($value = true);
            $table->string('cvp_saida')->nullable($value = true);
            $table->string('cvp_saida_ponto_entrada')->nullable($value = true);
            $table->string('cvp_saida_ponto_ligacao')->nullable($value = true);
            $table->string('cvp_saida_folga')->nullable($value = true);
            $table->string('tipo_tubo_ponto_entrada')->nullable($value = true);
            $table->string('tipo_cabo')->nullable($value = true);
            $table->string('seccao_cabo')->nullable($value = true);
            $table->string('cabo_identificacao')->nullable($value = true);
            $table->string('cabo_designacao_cabos')->nullable($value = true);
            $table->string('cabo_capacidade')->nullable($value = true);
            $table->string('cabo_peso')->nullable($value = true);
            $table->string('cabo_diametro')->nullable($value = true);
            $table->string('cabo_seccao')->nullable($value = true);
            $table->string('cvp_identificacao_equipamento')->nullable($value = true);
            $table->string('cvp_cabo_ligacao')->nullable($value = true);
            $table->string('cvp_tipo_equipamento')->nullable($value = true);
            $table->string('cvp_dimensoes')->nullable($value = true);
            $table->string('cvp_peso')->nullable($value = true);
            $table->string('cvp')->nullable($value = true);
            $table->text('observacoes')->nullable($value = true);
            $table->string('metragem')->nullable($value = true);
            $table->string('quantidade_equipamentos')->nullable($value = true);
            $table->string('quantidade_pontos_entrada')->nullable($value = true);
            $table->text('observacoes_resposta')->nullable($value = true);
            $table->text('resposta')->nullable($value = true);
            $table->date('data_resposta_licenciamento')->nullable($value = true);
            $table->date('data_pedido_acesso')->nullable($value = true);
            $table->date('data_resposta_acesso')->nullable($value = true);
            $table->date('data_pedido_cadastro')->nullable($value = true);
            $table->date('data_resposta_cadastro')->nullable($value = true);
            $table->timestamps();
            $table->softDeletes();
            $table->integer('is_admin')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infraestruturas');
    }
}
