<?php

namespace Database\Factories;

use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Municipio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit,
            'nome' => $this->faker->city,
            'email' => $this->faker->companyEmail,
            'contribuinte' => $this->faker->bankAccountNumber,
            'telefone' => $this->faker->e164PhoneNumber,
            'morada' => $this->faker->address,
            'responsavel' => $this->faker->name,
            'responsavel_telefone' => $this->faker->e164PhoneNumber,
            'responsavel_email' => $this->faker->companyEmail,
            'observacoes' => $this->faker->sentence,
        ];
    }
}
