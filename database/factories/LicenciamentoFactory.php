<?php

namespace Database\Factories;

use App\Models\Licenciamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class LicenciamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Licenciamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit,
            'municipio' => $this->faker->name,
            'data' => $this->faker->dateTime,
            'referencia_orait' => $this->faker->randomDigit,
            'data_inicio_trabalhos' => $this->faker->dateTime,
            'data_fim_trabalhos' => $this->faker->dateTime,
            'anexos'=> $this->faker->imageUrl($width = 640, $height = 480),
            'data_envio_licenciamento_municipio' => $this->faker->dateTime,
            'referencia_licenciamento_munipicio' => $this->faker->randomDigit,
            'data_autorizacao_municipio' => $this->faker->dateTime,
            'data_envio_autorizacao_operador' => $this->faker->dateTime,
            'observacoes' => $this->faker->sentence,
        ];
    }
}
