<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('slider')->delete();
        $slider = [
            ['id' => 1, 'judul' => 'a', 'text' => 'a', 'gambar' => 'slider/a.jpg', 'urutan' => 1],
            ['id' => 2, 'judul' => 'b', 'text' => 'b', 'gambar' => 'slider/b.jpg', 'urutan' => 2],
            ['id' => 3, 'judul' => 'b', 'text' => 'jadb', 'gambar' => 'slider/c.jpg', 'urutan' => 3]
        ];
        DB::table('slider')->insert($slider);
    }
}
