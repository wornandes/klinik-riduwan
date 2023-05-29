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
            "name" => "Wornandes Michel Sinaga",
            "username" => "michel",
            "password" => Hash::make("admin"),
            "role_id" => 1
        ]);

        User::create([
            "name" => "Elizabeth Emma",
            "username" => "emma13",
            "password" => Hash::make("perawat"),
            "role_id" => 2
        ]);

        User::create([
            "name" => "dr. Riduwan Vidya Wira M.Kes",
            "username" => "Riduwan",
            "password" => Hash::make("dokter"),
            "role_id" => 3
        ]);
    }
}
