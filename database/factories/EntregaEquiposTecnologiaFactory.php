<?php

namespace Database\Factories;

use App\Models\entregaEquiposTecnologia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\entregaEquiposTecnologia>
 */
class EntregaEquiposTecnologiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fechaEntrega' => $this->faker->dateTimeBetween('2022-01-01', 'now'),
            'tipoNovedad' => $this->faker->randomElement(['ASIGNACION', 'PRESTAMO']),
            'ubicacion' => $this->faker->randomElement(['Base Yopal', 'Indico', 'Maracas', 'El Dificil', 'Adalia', 'Begonia', 'Capachos']),
            'idFuncionario' => $this->faker->unique()->randomNumber(4),
            'idEquipo' => $this->faker->unique()->randomNumber(4),
            'proceso' => $this->faker->sentence(7),
            'observaciones' => $this->faker->sentence(7),
        ];
    }
}
