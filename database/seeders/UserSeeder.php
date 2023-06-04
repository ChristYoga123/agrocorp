<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin Agrocorp",
            "email" => "adminagrocorp@gmail.com",
            "password" => bcrypt("password"),
            "role_id" => 1
        ]);

        User::create([
            "name" => "Tegar",
            "email" => "tegar@gmail.com",
            "password" => bcrypt("password"),
            "role_id" => 2
        ]);

        User::create([
            "name" => "Ilham",
            "email" => "ilham@gmail.com",
            "password" => bcrypt("password"),
            "role_id" => 3
        ]);
    }
}
