<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TokoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('toko')->delete();
        
        \DB::table('toko')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_toko' => 'Tahu Kupat Pak Rohiman',
                'contact' => NULL,
                'logo' => 'toko/Nwop8jw1FSgwkaTIoBpxlM0N31vSuRVr00L23YNS.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_toko' => 'Tanaman Hias Pak Solihin',
                'contact' => NULL,
                'logo' => 'toko/ZUme1xC6GKBSUKI1R1BmwPKDELixd3bJDIqSq2MD.jpg',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_toko' => 'Kue Amir',
                'contact' => NULL,
                'logo' => 'toko/wvgrG58SE9KL6l49HZsOIfC7S6oHGwfTsNzyjOXs.jpg',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_toko' => 'Jamu dan Wedang Jawa',
                'contact' => NULL,
                'logo' => 'toko/H3vfIgo1BbREBgYr4sxYNIyPxT0ZCQwVxkSazafj.png',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_toko' => 'Alz Kemuning',
                'contact' => NULL,
                'logo' => 'toko/tmH6ArTXJJfRMbcscbe7P3pryWvfaKhgvv7tHSzW.jpg',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_toko' => 'Tanaman Pak Dwi Laksono',
                'contact' => NULL,
                'logo' => 'toko/HWlkCvH3yGLmi08qLBMVqfnW6zGh6roUJstjeTJ0.jpg',
            ),
        ));
        
        
    }
}