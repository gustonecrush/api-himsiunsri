<?php

namespace Database\Seeders;

use App\Models\Proker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proker::create([
            'name' => 'Sharing Session Manajemen Organisasi',
            'slug' => 'sharing-session-manajemen-organisasi-2022',
            'target_audience' => 'Seluruh Anggota BPH HIMSI FASILKOM UNSRI',
            'date' => '2022-03-12',
            'periode' => '2022',
            'status_proker' => 1,
            'description' =>
                'Sebagai anggota HIMSI, tentu sangat perlu mengetahui bagaimana cara berorganisasi, serta cara menghadapi kesulitan-kesulitan dengan pemecahan masalahnya dengan baik dan benar. Maupun pengalaman lain seperti saat menjalankan masa studi. Untuk itu, diadakannya event Sharing Session Pelatihan Manajemen Organisasi ini diharapkan anggota mendapat pengalaman serta menjalin hubungan baik dengan para alumni sebagai pemateri.',
        ]);

        Proker::create([
            'name' => 'Workshop Design Grafis',
            'slug' => 'workshop-design-grafis-2022',
            'target_audience' =>
                'Terbuka untuk umum khususnya mahasiswa Sistem Informasi Fakultas Ilmu Komputer Universitas Sriwijaya',
            'date' => '2022-03-26',
            'periode' => '2022',
            'status_proker' => 1,
            'description' =>
                'Workshop Design Grafis merupakan pelatihan mengenai Design Grafis untuk membantu khalayak umum khususnya mahasiswa Sistem Informasi Fakultas Ilmu Komputer Universitas Sriwijaya dalam mengembangkan potensinya di dalam hal design grafis.',
        ]);

        Proker::create([
            'name' => 'Kajian Rohani',
            'slug' => 'kajian-rohani-2022',
            'target_audience' =>
                'Mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya',
            'date' => '2022-04-22',
            'periode' => '2022',
            'status_proker' => 1,
            'description' =>
                'Kajian kerohanian Islam bertujuan untuk meningkatkan keimanan dan ketakwaan kepada Allah SWT., meningkatkan jalinan silahturahmi, serta membangun semangat spiritual mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya dalam proses menuju generasi rabbani.',
        ]);

        Proker::create([
            'name' => 'Baksos dan Bukber',
            'slug' => 'baksos-dan-bukber-2022',
            'target_audience' => 'Anggota BPH HIMSI FASILKOM UNSRI',
            'date' => '2022-04-23',
            'periode' => '2022',
            'status_proker' => 1,
            'description' =>
                'Bakti sosial biasanya dilakukan dengan mengumpulkan dana ataupun jga keperluan keperluan lain seperti sembako, pakaian dll yang kemudian akan diberikan ke saudara saudara yang membutuhkan. Sementara buka bersama sendiri merupakan buka bersama BPH HIMSI FASILKOM UNSRI. Baksos dan bukber dilaksanakan bertepatan dengan bulan Ramadhan.',
        ]);

        Proker::create([
            'name' => 'Sharing Session Kerja Praktik',
            'slug' => 'sharing-session-kerja-praktik-2022',
            'target_audience' => 'Seluruh Anggota BPH HIMSI FASILKOM UNSRI',
            'date' => '2022-06-19',
            'periode' => '2022',
            'status_proker' => 1,
            'description' =>
                'Kegiatan sharing bersama alumni ataupun kakak tingkat dengan tujuan untuk memberikan cerita pengalaman dan informasi lebih mengenai kerja praktik untuk meningkatkan wawasan, dan semangat mahasiswa fasilkom unsri dalam mengikuti kerja praktik.',
        ]);

        Proker::create([
            'name' => 'SI FEST',
            'slug' => 'si-fest-2022',
            'target_audience' => 'Untuk Umum',
            'date' => '2022-11-12',
            'periode' => '2022',
            'status_proker' => 0,
            'description' =>
                'SI FEST adalah acara tahunan yang diselenggarakan HIMSI Fasilkom Unsri dengan harapan dapat menambah ilmu pengetahuan, meningkatkan kreativitas, dan inovasi, serta dapat memberikan edukasi tentang bidang teknologi.',
        ]);

        Proker::create([
            'name' => 'Musyawarah Besar',
            'slug' => 'musyawarah-besar-2022',
            'target_audience' => 'Untuk Umum',
            'date' => '2022-12-10',
            'periode' => '2022',
            'status_proker' => 0,
            'description' =>
                'Musyawarah Besar atau Muber merupakan kegiatan tahunan yang dilaksanakan pada akhir masa bakti BPH yang akan membahasa RAD atau RAT sampai dengan GHPKO serta pemilihan Bupati Periode baru.',
        ]);
    }
}
