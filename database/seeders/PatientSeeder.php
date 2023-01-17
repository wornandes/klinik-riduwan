<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::factory(10)->create();
        // Patient::create([
        //     "name" => "Admin",
        //     "birthdate" => "admin",
        //     "sex" => Hash::make("admin"),
        //     "address" => 1,
        //     "allergy" => 1,
        //     "phone" => 1
        // ]);
    }
}
