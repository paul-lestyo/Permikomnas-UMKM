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
        $this->call([
            SliderSeeder::class,
            UserSeeder::class,
            ProductTableSeeder::class,
            TokoTableSeeder::class,
            CategoryTableSeeder::class,
            PengunjungSeeder::class,
        ]);
    }
}
