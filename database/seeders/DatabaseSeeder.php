<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use Illuminate\Database\Seeder;
use UserRoleSeeder,SerieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
            $this->call([
                PeliculaSeeder::class,
                SerieSeeder::class,
                UserRole::class
            ]);
    }
}
