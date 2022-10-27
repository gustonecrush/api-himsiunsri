<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Divisi::create([
            "name" => "Akademik",
            "dinas_id" => 1,
            "description" => "Divisi Akademik merupakan divisi yang memiliki tugas sebagai jembatan antara mahasiswa dan dosen Sistem Informasi Unsri untuk memfasilitasi hal yang berkaitan dengan akademik. Selain itu divisi ini aktif dalam menyebarkan informasi akademik seperti beasiswa, event, lomba, dan volunteer yang lingkupnya adalah mahasiswa."
        ]);
        
        Divisi::create([
            "name" => "Akademik",
            "dinas_id" => 1,
            "description" => "Divisi Akademik merupakan divisi yang memiliki tugas sebagai jembatan antara mahasiswa dan dosen Sistem Informasi Unsri untuk memfasilitasi hal yang berkaitan dengan akademik. Selain itu divisi ini aktif dalam menyebarkan informasi akademik seperti beasiswa, event, lomba, dan volunteer yang lingkupnya adalah mahasiswa."
        ]);
    }
}
