<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            "name" => "Pojok HIMSI",
            "slug" => "pojok-himsi",
            "available_status" => 2,
        ]);

        Layanan::create([
            "name" => "Akademik",
            "slug" => "akademik",
            "available_status" => 2,
        ]);

        Layanan::create([
            "name" => "Ekspresi",
            "slug" => "ekspresi",
            "available_status" => 2,
        ]);

        Layanan::create([
            "name" => "Baperan",
            "slug" => "baperan",
            "available_status" => 2,
        ]);

        Layanan::create([
            "name" => "Aspirasi",
            "slug" => "aspirasi",
            "available_status" => 0,
        ]);

        Layanan::create([
            "name" => "iMaba",
            "slug" => "imaba",
            "available_status" => 0,
        ]);
    }
}
