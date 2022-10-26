<?php

namespace Database\Seeders;

use App\Models\ProkerDinas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProkerDinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProkerDinas::create([
            'name' =>
                'PORGESELSI ( Pekan Olahraga dan Pergelaran Seni Sistem Informasi )',
            'dinas_id' => 1,
            'description' =>
                'Kegiatan yang bertujuan untuk menjalin silaturahmi antara mahasiswa sistem informasi dengan sesama mahasiswa sistem informasi lain nya dalam sebuah kompetisi non-akademik serta berguna untuk menyeleksi dan melihat kemampuan-kemampuan anak-anak SI di bidang olahraga agar bisa mengirimkan perwakilan pada saat Fasilkom Games nanti.',
        ]);

        ProkerDinas::create([
            'name' => 'Sharing Session With Alumni',
            'dinas_id' => 3,
            'description' =>
                'Kegiatan yang memperkenalkan para alumni kepada staff baru di dinas kestari HIMSI Fasilkom Unsri agar dapat menjalin silaturahmi antar angkatan atau generasi.',
        ]);

        ProkerDinas::create([
            'name' => 'Pemutakhiran Web HIMSI ',
            'dinas_id' => 3,
            'description' =>
                'Pemutakhiran Web HIMSI merupakan proker atau jobdesk di divisi PTI yang bertujuan untuk memutakhirkan web yang telah dibuat sebelumnya menjadi lebih baik lagi.',
        ]);
    }
}
