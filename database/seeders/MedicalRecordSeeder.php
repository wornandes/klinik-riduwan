<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalRecord;
use Carbon\Carbon;

class MedicalRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //MedicalRecord::factory(10)->create();
        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-14'),
            "anamnesis" => "Gejala Penyakit Flu",
            "diagnosis" => "Penyakit Demam, Flu dan Batuk",
            "therapy" => "Dianjurkan meminum obat A",
            "patient_id" => 1
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-14'),
            "anamnesis" => "Gejala Penyakit Demam",
            "diagnosis" => "Penyakit Demam Tinggi",
            "therapy" => "Dianjurkan meminum obat A",
            "patient_id" => 2
        ]);
        
        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-14'),
            "anamnesis" => "Gejala Penyakit Meriang",
            "diagnosis" => "Penyakit Demam Tinggi",
            "therapy" => "Dianjurkan meminum obat A",
            "patient_id" => 3
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-15'),
            "anamnesis" => "Gejala Sakit Perut, Mules",
            "diagnosis" => "Penyakit Diare",
            "therapy" => "Dianjurkan meminum obat B",
            "patient_id" => 4
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-15'),
            "anamnesis" => "Gejala Sakit Perut dan Mencret",
            "diagnosis" => "Penyakit Diare",
            "therapy" => "Dianjurkan meminum obat B",
            "patient_id" => 5
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-16'),
            "anamnesis" => "Gejala Penyakit Lemas",
            "diagnosis" => "Penyakit Kurang gizi",
            "therapy" => "Dianjurkan meminum obat C",
            "patient_id" => 6
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-16'),
            "anamnesis" => "Gejala Penyakit Flu, demam dan lemas",
            "diagnosis" => "Penyakit Tipes",
            "therapy" => "Dianjurkan meminum obat A",
            "patient_id" => 7
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-16'),
            "anamnesis" => "Gejala Penyakit Mata",
            "diagnosis" => "Penyakit Mata",
            "therapy" => "Dianjurkan meminum obat D",
            "patient_id" => 8
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-17'),
            "anamnesis" => "Gejala Sakit Perut ",
            "diagnosis" => "Penyakit Diare",
            "therapy" => "Dianjurkan meminum obat B",
            "patient_id" => 9
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-18'),
            "anamnesis" => "Gejala Penyakit Panas badan tinggi",
            "diagnosis" => "Penyakit Demam Tinggi",
            "therapy" => "Dianjurkan meminum obat A",
            "patient_id" => 10
        ]);

        MedicalRecord::create([
            "date" => Carbon::parse('2021-06-18'),
            "anamnesis" => "Gejala Penyakit Panas badan tinggi",
            "diagnosis" => "Penyakit Demam Tinggi",
            "therapy" => "Dianjurkan meminum obat A",
            "patient_id" => 11
        ]);
        
    }
}
