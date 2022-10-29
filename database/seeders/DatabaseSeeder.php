<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LayananSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(ProkerSeeder::class);
        $this->call(DinasSeeder::class);
        $this->call(ProkerDinasSeeder::class);
        $this->call(StaffSeeder::class);
        $this->call(DivisiSeeder::class);
        $this->call(PojokHimsiSeeder::class);
        $this->call(AkademikSeeder::class);
    }
}
