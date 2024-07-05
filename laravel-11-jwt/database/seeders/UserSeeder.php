<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un usuario de ejemplo
        User::create([
            'name' => 'cristiano',
            'email' => 'cr7@siuu.com',
            'password' => '123',  //bcrypt('password'),
        ]);
    }
}
