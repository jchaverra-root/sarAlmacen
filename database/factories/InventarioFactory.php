<?php

namespace Database\Factories;

use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventario>
 */
class InventarioFactory extends Factory
{
    protected $model = Inventario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence(5),
            'periodo' => $this->faker->date('Y'),
            'entrada' => $this->faker->date('Y-m-d'),
            'salida' => $this->faker->date('Y-m-d'),
            'origen' => $this->faker->randomElement(['Base Yopal', 'Indico', 'Maracas', 'El Dificil']),
            'destino' => $this->faker->randomElement(['Base Yopal', 'Adalia', 'Begonia', 'Capachos']),
            'ubicacionActual' => $this->faker->randomElement(['Base Yopal', 'Indico', 'Maracas', 'El Dificil', 'Adalia', 'Begonia', 'Capachos']),
            'nit' => $this->faker->numberBetween(10000000, 999999999),
            'codigoProducto' => $this->faker->randomNumber(6),
            'serialProducto'=> $this->faker->randomNumber(6),
            'cantidad'=> $this->faker->randomNumber(4),
            'precioUnitario' => $this->faker->randomFloat(2, 0, 99999999),
        ];
    }
}
