<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            //'role_id' => $this->faker->randomDigit,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'tipo_entidade' => $this->faker->name,
            'sector_atividade' => $this->faker->name,
            'codigo_certidao' => $this->faker->randomDigit,
            'morada' => $this->faker->address,
            'codigo_postal' => $this->faker->postcode,
            'contribuinte' => $this->faker->randomDigit,
            'telefone' => $this->faker->e164PhoneNumber,
            'pais' => $this->faker->country,
            'nome_responsavel_operador' => $this->faker->name,
            'email_responsavel_operador' => $this->faker->unique()->safeEmail,
            'telefone_responsavel_operador' => $this->faker->e164PhoneNumber,
            'anexos' => $this->faker->name,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
