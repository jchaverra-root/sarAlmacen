<?php

namespace Database\Seeders;

use App\Models\equiposTecnologia;
use App\Models\entregaEquiposTecnologia;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        equiposTecnologia::factory(5)->create();
        // entregaEquiposTecnologia::factory(5)->create();
        // \App\Models\Inventario::factory(900)->create();
    }
}
