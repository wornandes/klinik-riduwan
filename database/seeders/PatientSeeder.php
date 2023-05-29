<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Patient::factory(20)->create();
        Patient::create([
             "name" => "Lukman Mustofa",
             "birthdate" => Carbon::parse('1980-12-01'),
             "sex" => "Laki-laki",
             "address" => "Bandar Lampung",
             "allergy" => "Alergi makanan kacang",
             "phone" => "(+62) 643 1084 869"
         ]);

         Patient::create([
            "name" => "Iriana Agustina",
            "birthdate" => Carbon::parse('1991-08-23'),
            "sex" => "Perempuan",
            "address" => "Sibolga",
            "allergy" => "Alergi binatang kucing",
            "phone" => "0687 3812 8575"
        ]);

        Patient::create([
            "name" => "Heryanto Nashiruddin",
            "birthdate" => Carbon::parse('1993-04-13'),
            "sex" => "Laki-laki",
            "address" => "Binjai",
            "allergy" => "Tidak ada alergi",
            "phone" => "0971 5409 9634"
        ]);

        Patient::create([
            "name" => "Mursita Saragih",
            "birthdate" => Carbon::parse('1978-05-08'),
            "sex" => "Laki-laki",
            "address" => "Tebing Tinggi",
            "allergy" => "Tidak ada alergi",
            "phone" => "(+62) 246 7744 696"
        ]);

        Patient::create([
            "name" => "Genta Mandasari",
            "birthdate" => Carbon::parse('1997-07-12'),
            "sex" => "Perempuan",
            "address" => "Sabang",
            "allergy" => "Alergi kulit",
            "phone" => "0471 5177 1630"
        ]);

        Patient::create([
            "name" => "Wira Jailani",
            "birthdate" => Carbon::parse('1987-03-30'),
            "sex" => "Laki-laki",
            "address" => "Medan",
            "allergy" => "Alergi makanan laut seperti kerang",
            "phone" => "0959 1943 904"
        ]);

        Patient::create([
            "name" => "Febi Pudjiastuti",
            "birthdate" => Carbon::parse('1996-07-22'),
            "sex" => "Perempuan",
            "address" => "Padang",
            "allergy" => "Alergi kulit",
            "phone" => "0711 9066 2179"
        ]);

        Patient::create([
            "name" => "Hana Puspita",
            "birthdate" => Carbon::parse('2003-11-14'),
            "sex" => "Perempuan",
            "address" => "Bukit Tinggi",
            "allergy" => "Tidak ada alergi",
            "phone" => "0342 1313 7872"
        ]);

        Patient::create([
            "name" => "Tirtayasa Ramadan",
            "birthdate" => Carbon::parse('1992-02-27'),
            "sex" => "Laki-laki",
            "address" => "Medan",
            "allergy" => "Alergi binatang seperti kucing",
            "phone" => "(+62) 612 8506 5721"
        ]);

        Patient::create([
            "name" => "Kania Purwanti",
            "birthdate" => Carbon::parse('1988-05-09'),
            "sex" => "Perempuan",
            "address" => "Pematang Siantar",
            "allergy" => "Alergi obat A",
            "phone" => "0562 5054 230"
        ]);

        Patient::create([
            "name" => "Umaya Lazuardi",
            "birthdate" => Carbon::parse('2000-02-21'),
            "sex" => "Laki-laki",
            "address" => "Aceh",
            "allergy" => "Alergi Obat B",
            "phone" => "023 1737 557"
        ]);

        Patient::create([
            "name" => "Wisnu Sihotang",
            "birthdate" => Carbon::parse('2000-02-21'),
            "sex" => "Laki-laki",
            "address" => "Medan",
            "allergy" => "Alergi Obat C",
            "phone" => "0533 3820 964"
        ]);

        Patient::create([
            "name" => "Violet Hariyah",
            "birthdate" => Carbon::parse('1994-10-06'),
            "sex" => "Perempuan",
            "address" => "Kisaran",
            "allergy" => "Tidak ada alergi",
            "phone" => "(+62) 280 7815 5414"
        ]);

        Patient::create([
            "name" => "Anggabaya Damanik",
            "birthdate" => Carbon::parse('1987-08-08'),
            "sex" => "Laki-laki",
            "address" => "Pematang Siantar",
            "allergy" => "Tidak ada alergi",
            "phone" => "(+62) 787 0113 3073"
        ]);

        Patient::create([
            "name" => "Lutfan Haryanto",
            "birthdate" => Carbon::parse('1997-03-11'),
            "sex" => "Laki-laki",
            "address" => "Tebing Tinggi",
            "allergy" => "Alergi makanan A",
            "phone" => "(+62) 295 0654 166"
        ]);

        Patient::create([
            "name" => "Heru Zulkarnain",
            "birthdate" => Carbon::parse('1986-09-18'),
            "sex" => "Laki-laki",
            "address" => "Kisaran",
            "allergy" => "Alergi binatang berbulu",
            "phone" => "0799 4786 7482"
        ]);

        Patient::create([
            "name" => "Elisa Lestari",
            "birthdate" => Carbon::parse('1999-10-12'),
            "sex" => "Perempuan",
            "address" => "Medan",
            "allergy" => "Alergi Kulit",
            "phone" => "(+62) 28 8122 5883"
        ]);

        Patient::create([
            "name" => "Banawa Prabowo",
            "birthdate" => Carbon::parse('1976-11-26'),
            "sex" => "Laki-laki",
            "address" => "Medan",
            "allergy" => "Alergi makanan laut",
            "phone" => "(+62) 658 9942 918"
        ]);

        
        Patient::create([
            "name" => "Baktianto Waskita",
            "birthdate" => Carbon::parse('1992-04-17'),
            "sex" => "Laki-laki",
            "address" => "Binjai",
            "allergy" => "Alergi Obat A",
            "phone" => "025 1483 0679"
        ]);

        Patient::create([
            "name" => "Mila Farida",
            "birthdate" => Carbon::parse('2003-11-11'),
            "sex" => "Perempuan",
            "address" => "Medan",
            "allergy" => "Alergi Obat B",
            "phone" => "(+62) 805 3219 6692"
        ]);
    }
}
