<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRole extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['nombre' => 'user']);
        Role::create(['nombre' => 'admin']);
        Role::create(['nombre' => 'guest']);
    }
}
