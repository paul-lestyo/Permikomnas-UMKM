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
        ));
        
        
    }
}