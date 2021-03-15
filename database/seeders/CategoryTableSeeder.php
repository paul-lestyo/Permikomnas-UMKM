<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_category' => 'Makanan',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_category' => 'Tanaman',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_category' => 'Minuman',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_category' => 'Kerajinan',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_category' => 'Alat',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_category' => 'Mainan Anak',
            ),
            6 => 
            array (
                'id' => 7,
                'nama_category' => 'Pakaian',
            ),
            7 => 
            array (
                'id' => 8,
                'nama_category' => 'Bahan Mentah',
            ),
            8 => 
            array (
                'id' => 9,
                'nama_category' => 'Bahan Kerajinan',
            ),
            9 => 
            array (
                'id' => 10,
                'nama_category' => 'Gerabah',
            ),
            10 => 
            array (
                'id' => 11,
                'nama_category' => 'Keramik',
            ),
        ));
        
        
    }
}