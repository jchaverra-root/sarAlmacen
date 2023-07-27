<?php

namespace Database\Factories;

use App\Models\equiposTecnologia;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\equiposTecnologia>
 */
class EquiposTecnologiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estado' => $this->faker->randomElement(['ASIGNADO', 'NO ASIGNADO']),
            'ubicacionActual' => $this->faker->randomElement(['Base Yopal', 'Indico', 'Maracas', 'El Dificil', 'Adalia', 'Begonia', 'Capachos']),
            'idUsuario' => $this->faker->numerify('00'.$this->faker->randomNumber(2)),
            'observaciones' => $this->faker->sentence(7),
            'serialProducto' => $this->faker->bothify($this->faker->numerify('##??').'##??'),
            'tipo' => $this->faker->randomElement(['CELULAR', 'LAPTOP', 'DESKTOP', 'IMPRESORA', 'MONITOR', 'OTRO']),
            'marca' => $this->faker->randomElement(['Marca1', 'Marca2', 'Marca3', 'Marca4', 'Marca5', 'Otra Marca']),
            'modelo' => $this->faker->numberBetween(1995, date('Y')),
            'imei' => $this->faker->bothify($this->faker->numerify('##??').'##??'),
            'procesador' => $this->faker->randomElement(['Procesador1', 'Procesador2', 'Procesador3']),
            'ram' => $this->faker->randomElement(['2', '4', '8', '16', '36', '64']),
            'discoDuro' => $this->faker->randomElement(['240 GB', '480 GB', '512 GB', '1 T', '2 T', '4 T']),
            'sistemaOperativo' => $this->faker->randomElement(['Windows 7', 'Windows 10', 'Windows 11']),
            'licenciaSistemaOperativo' => $this->faker->bothify($this->faker->numerify('##??').'##??'),
            'office' => $this->faker->randomElement(['Office 2010', 'Office 2013', 'Office 2019', 'Office 2021']),
            'licenciaOffice' => $this->faker->bothify($this->faker->numerify('##??').'##??'),
            'antivirus' => $this->faker->randomElement(['NORTON', 'AVIRA', 'ESET']),
            'idProveedor' => $this->faker->randomNumber(2),
            'idCompra' => $this->faker->randomNumber(2),
        ];
    }
}
