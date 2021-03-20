<?php

namespace Database\Factories;

use App\Models\Infraestrutura;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfraestruturaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Infraestrutura::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit,
            'referencia_orait' => $this->faker->randomDigit,
            'nome_operador' => $this->faker->name,
            'contribuinte_operador' => $this->faker->bankAccountNumber,
            'morada_operador' => $this->faker->address,
            'telefone_operador' => $this->faker->e164PhoneNumber,
            'email_operador' => $this->faker->companyEmail,
            'referencia_operador' => $this->faker->randomDigit,
            'responsavel_operador' => $this->faker->name,
            'telefone_responsavel_operador' => $this->faker->e164PhoneNumber,
            'email_responsavel_operador' => $this->faker->companyEmail,
            'municipio_id' => $this->faker->randomDigit,
            'municipio_cartas' => $this->faker->randomDigit,
            'cvp_entrada' => $this->faker->randomDigit,
            'cvp_entrada_ponto_entrada' => $this->faker->randomDigit,
            'cvp_entrada_ponto_ligacao' => $this->faker->randomDigit,
            'cvp_entrada_folga' => $this->faker->randomDigit,
            'cvp_saida' => $this->faker->randomDigit,
            'cvp_saida_ponto_entrada' => $this->faker->randomDigit,
            'cvp_saida_ponto_ligacao' => $this->faker->randomDigit,
            'cvp_saida_folga' => $this->faker->randomDigit,
            'tipo_tubo_ponto_entrada' => $this->faker->randomDigit,
            'tipo_cabo' => $this->faker->randomDigit,
            'seccao_cabo' => $this->faker->randomDigit,
            'cabo_identificacao' => $this->faker->randomDigit,
            'cabo_designacao_cabos' => $this->faker->randomDigit,
            'cabo_capacidade' => $this->faker->randomDigit,
            'cabo_peso' => $this->faker->randomDigit,
            'cabo_diametro' => $this->faker->randomDigit,
            'cabo_seccao' => $this->faker->randomDigit,
            'cvp_identificacao_equipamento' => $this->faker->randomDigit,
            'cvp_cabo_ligacao' => $this->faker->randomDigit,
            'cvp_tipo_equipamento' => $this->faker->randomDigit,
            'cvp_dimensoes' => $this->faker->randomDigit,
            'cvp_peso' => $this->faker->randomDigit,
            'cvp' => $this->faker->randomDigit,
            'observacoes' => $this->faker->sentence,
            'metragem' => $this->faker->randomDigit,
            'quantidade_equipamentos' => $this->faker->randomDigit,
            'quantidade_pontos_entrada' => $this->faker->randomDigit,
            'observacoes_resposta' => $this->faker->sentence,
            'resposta' => $this->faker->randomDigit,
            'data_resposta_licenciamento' => $this->faker->dateTime,
            'data_pedido_acesso' => $this->faker->dateTime,
            'data_resposta_acesso' => $this->faker->dateTime,
            'data_pedido_cadastro' => $this->faker->dateTime,
            'data_resposta_cadastro' => $this->faker->dateTime,

        ];
    }
}
