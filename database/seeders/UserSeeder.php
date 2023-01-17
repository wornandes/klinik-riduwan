<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Admin",
            "username" => "admin",
            "password" => Hash::make("admin"),
            "role_id" => 1
        ]);

        User::create([
            "name" => "Perawat",
            "username" => "perawat",
            "password" => Hash::make("perawat"),
            "role_id" => 2
        ]);

        User::create([
            "name" => "Dokter",
            "username" => "dokter",
            "password" => Hash::make("dokter"),
            "role_id" => 3
        ]);
    }
}
