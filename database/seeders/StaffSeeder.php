<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::create([
            'name' => 'Marcellinus Michael',
            'nim' => '09031382126131',
            'password' => '09031382126131',
            'slug' => 'marcellinus-michael',
            'dinas_id' => 1,
            'divisi_id' => 1,
            'ttl' => 'Palembang, 20 Februari 2003',
            'gender' => 'Laki-laki',
            'alamat' => 'Kenten, Palembang',
            'angkatan' => '2021',
            'jabatan' => 'Staff',
            'hobi' => 'Ngoding',
            'email' => 'marcellinusmichael202@gmail.com',
            'periode' => '2022',
            'instagram' => 'michael.marcellinus',
            'kesan_pesan' => 'Mantap HIMSI, mamamu pasti bangga',
            'picture' => 'Michael.png',
        ]);

        Staff::create([
            'name' => 'Zafira Thuraya',
            'nim' => '09031382126143',
            'password' => '09031382126143',
            'slug' => 'zafira-thuraya',
            'dinas_id' => 3,
            'divisi_id' => 1,
            'ttl' => 'Palembang, 4 September 2003',
            'gender' => 'Perempuan',
            'alamat' =>
                'Jalan R.A Abusamah Komp.Green Palm blok C1 kec.Sukarame kel.Sukajaya, Palembang',
            'angkatan' => '2021',
            'jabatan' => 'Staff',
            'hobi' => 'Membaca buku dan mendengarkan musik',
            'email' => 'zafirath3@gmail.com',
            'periode' => '2022',
            'instagram' => 'zafirath03',
            'kesan_pesan' => 'Semua berjalan baik dan seru ! Semoga semuanya sehat selalu dan berumur panjang.',
            'picture' => 'Patrick.png',
        ]);
    }
}
