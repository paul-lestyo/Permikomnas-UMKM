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
            // Slider 1
            ['id' => 1, 
            'judul' => 'Anthurium Corong', 
            'text' => 'Tanaman anthurium corong berasal dari spesies Araceace yang bentuknya menyerupai corong. Bentuk corong pada daunnya membuat tanaman yang satu ini mudah dikenali oleh banyak orang. Selain itu, bentuk daunnya yang khas membuat tanaman ini terlihat cantik menghiasi rumah.', 
            'gambar' => 'slider/566VhHcoTg0428LgrdQcEYUd638rTDbPOPz1nDgs.jpg', 'urutan' => 1],
            //Slider 2
            ['id' => 2, 'judul' => 'Keripik Pare', 
            'text' => 'Alternatif cemilan sehat saat bosan dikala WFH', 
            'gambar' => 'slider/cJsQfVHQuBRjdJJpkccCsu7waf8S1QXvRx6dVpoK.png', 'urutan' => 2],
            //Slider 3
            ['id' => 3, 'judul' => 'Teh Gambyong', 
            'text' => 'Berbeda dengan teh biasanya, teh Hitam Gambyong asal Dusun Mbadan RT 04/07, Kemuning, Ngargoyoso, Karanganyar, Jawa Tengah ini memiliki cita rasa yang khas. Dimana rasa teh yang setelah diseduh memiliki rasa kopi baik dari aroma hingga rasanya.', 
            'gambar' => 'slider/UuY4nroIgyYuZA2snZbLgtOthOBiKB1qX7OMU18E.jpg', 'urutan' => 3]
        ];
        DB::table('slider')->insert($slider);
    }
}
