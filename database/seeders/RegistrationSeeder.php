<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Registration;
use Carbon\Carbon;

class RegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Registration::factory(10)->create();
        Registration::create([
            "check_date" => Carbon::parse('2021-06-14'),
            "registration_date" => Carbon::parse('2021-06-14'),
            "patient_id" => 1
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-14'),
            "registration_date" => Carbon::parse('2021-06-14'),
            "patient_id" => 2
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-14'),
            "registration_date" => Carbon::parse('2021-06-14'),
            "patient_id" => 3
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-15'),
            "registration_date" => Carbon::parse('2021-06-15'),
            "patient_id" => 4
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-15'),
            "registration_date" => Carbon::parse('2021-06-15'),
            "patient_id" => 5
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-16'),
            "registration_date" => Carbon::parse('2021-06-16'),
            "patient_id" => 6
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-16'),
            "registration_date" => Carbon::parse('2021-06-16'),
            "patient_id" => 7
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-16'),
            "registration_date" => Carbon::parse('2021-06-16'),
            "patient_id" => 8
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-17'),
            "registration_date" => Carbon::parse('2021-06-17'),
            "patient_id" => 9
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-18'),
            "registration_date" => Carbon::parse('2021-06-18'),
            "patient_id" => 10
        ]);

        Registration::create([
            "check_date" => Carbon::parse('2021-06-18'),
            "registration_date" => Carbon::parse('2021-06-18'),
            "patient_id" => 11
        ]);
    }
}
