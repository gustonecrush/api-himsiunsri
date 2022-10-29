<?php

namespace Database\Seeders;

use App\Models\PojokHimsi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PojokHimsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PojokHimsi::create([
            'title' => 'KEGIATAN RAMADHAN HIMSI 2022 : SERAMBI',
            'slug' => 'kegiatan-ramadhan-himsi-2022-serambi',
            'author' => 'Muhammad Achalendra Feroz',
            'content' => 'test',
            'periode' => 2022,
            'cover' => '1660232365_8c0df7968f62c4332430.png',
        ]);

        PojokHimsi::create([
            'title' => 'Webinar Enterpreneur 2021',
            'slug' => 'webinar-enterpreneur-2021',
            'author' => 'Galih Ananda Dwisari',
            'content' => 'test',
            'periode' => 2021,
            'cover' => '1660232365_8c0df7968f62c4332430.png',
        ]);
    }
}
