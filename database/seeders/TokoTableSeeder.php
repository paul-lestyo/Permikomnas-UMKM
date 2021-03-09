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
        ));
        
        
    }
}