<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feedback::create([
            "email" => "augusf24@gmail.com",
            "subject" => "Web HIMSI Fasilkom UNSRI",
            "message" => "Webnya sangat bagus dan saya mendapatkan begitu banyak informasi terkait HIMSI Fasilkom UNSRI periode 2022. Semoga HIMSI jaya selalu!", 
        ]);

        Feedback::create([
            "email" => "farhantsyh@icloud.com",
            "message" => "Saya sebagai visitor website ini sangat tertarik dengan interface yang disuguhkan, informasi yang tersedia juga cukup variatif. Layanan yang paling saya sukai yaitu Pojok HIMSI, karena saya dapat mengetahui bagaimana HIMSI bekerja dan menjalankan proker-proker yang ada. Jaya Selalu HIMSI!", 
        ]);
    }
}
