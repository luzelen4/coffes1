<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Categoria;
use App\Models\Coffe;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear 5 categorías
        Categoria::factory(5)->create()->each(function ($categoria) {
            // Para cada categoría, crear 3 cafés asociados a esa categoría
            Coffe::factory(3)->create(['categoria_id' => $categoria->id]);
        });

        // Crear un usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

