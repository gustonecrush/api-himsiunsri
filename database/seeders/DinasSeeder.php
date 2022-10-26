<?php

namespace Database\Seeders;

use App\Models\Dinas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dinas::create([
            'name' => 'Pengurus INTI ',
            'slug' => 'inti',
            'thumbnail' => '',
            'singkatan' => 'INTI',
            'description' =>
                'Pengurus inti dalam HIMSI Fasilkom UNSRI terdiri dari Bupati, Wakil Bupati, Sekretaris, serta Bendahara yang mengkoordinasikan keseluruhan aktivitas kerja dalam HIMSI FASILKOM UNSRI.',
        ]);

        Dinas::create([
            'name' => 'Kajian Strategi dan Advokasi',
            'slug' => 'kastrad',
            'thumbnail' => '',
            'singkatan' => '',
            'description' => 'Dinas Kajian Strategi dan Advokasi atau yang sering disebut <b>KASTRAD</b> merupakan dinas yang bergerak sebagai penggerak roda intelektual HIMSI FASILKOM UNSRI melalui kajian, diskusi, dan propaganda kreatif sehingga dapat menjadi tempat yang tepat bagi mahasiswa/i Sistem Informasi UNSRI untuk menyalurkan berbagai aspirasinya secara tepat kritis dan rasional, dengan tujuan untuk mengembangkan daya kritis, daya nalar, dan kepedulian mahasiswa terhadap isu-isu sekitar dan isu-isu politik nasional.',
        ]);

        Dinas::create([
            'name' => 'Bisnis dan Kemitraan',
            'slug' => 'bistra',
            'thumbnail' => '',
            'singkatan' => 'BISTRA',
            'description' => 'Dinas Bisnis dan Kemitraan atau yang sering disebut Bistra adalah dinas yang bergerak dalam bidang keuangan serta kemitraan untuk memenuhi dan mendukung segala kegiatan yang diselenggarakan HIMSI. Dinas ini juga mewadahi minat dan bakat mahasiswa/i Sistem Informasi UNSRI pada bidang wirausaha/bisnis.',
        ]);

        Dinas::create([
            'name' => 'Riset dan Teknologi',
            'slug' => 'ristek',
            'thumbnail' => '',
            'singkatan' => 'RISTEK',
            'description' => 'Dinas Riset dan Teknologi atau yang sering disebut RISTEK, merupakan dinas yang bergerak di bidang ilmu pengetuahuan dan teknologi yang berperan sebagai wadah bagi mahasiswa/i sistem informasi untuk mencari informasi seputar akademik. Dinas RISTEK juga berperan dalam mengelola informasi berbasis digital.',
        ]);

        Dinas::create([
            'name' => 'Media dan Informasi',
            'slug' => 'medinfo',
            'thumbnail' => '',
            'singkatan' => 'MEDINFO',
            'description' => 'Dinas Media dan Informasi atau sering disebut Medinfo berperan sebagai sarana untuk mengelola dan menyampaikan informasi akademik maupun non-akademik terupdate seputar jurusan maupun luar jurusan yang didukung oleh sarana multimedia untuk mempermudah penyampaian informasinya.',
        ]);
    }
}
