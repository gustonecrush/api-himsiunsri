<?php

namespace Database\Seeders;

use App\Models\Akademik;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Akademik::create([
            'title' =>
                'Webinar Nasional Statistika : The Importance of Cyber Security in the Era of Big Data',
            'slug' =>
                'webinar-nasional-statistika-the-importance-of-cyber-security-in-the-era-of-big-data',
            'author' => 'Farhan Agustiansyah',
            'content' => 'test',
            'thumbnail' => '1648751183_953c2bbb10257a4aaa53.jpg',
            'category' => 'Webinar',
        ]);

        Akademik::create([
            'title' => 'Baparekraf Developer Day',
            'slug' => 'baparekraf-developer-day',
            'author' => 'Farhan Agustiansyah',
            'content' => 'test',
            'thumbnail' => '1648751183_953c2bbb10257a4aaa53.jpg',
            'category' => 'Webinar',
        ]);
    }
}
