<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::insert([
            ['name' => 'Elettronica', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fumetti', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Videogames', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Telefonia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Libri', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Accessori', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Figure', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Collezionabili', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
