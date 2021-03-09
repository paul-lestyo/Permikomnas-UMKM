<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product')->delete();
        
        \DB::table('product')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_product' => 'Tahu Kupat',
                'text' => 'AKU LUWE MBOK TULUNG JAJAKKE TENONGAN RASAH SAMBAT RASAH SAMBAT',
                'gambar' => 'product/3kCe1EbpdIMkTNMAyyXB1epR03HIOJmFbC5bdtkg.jpg',
                'harga' => '15000',
                'shope_link' => 'https://shopee.co.id/',
                'toped_link' => 'https://www.tokopedia.com',
                'category_id' => 1,
                'toko_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nama_product' => 'Sate Lontong',
                'text' => 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAaaaaaaaaaaaaaaaaaaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASSSSSSSSSSSSSSSSSSSSSSSSSSSSSSDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDWWWWWWWWWWWWWWWWWWWWWWWWWWWWaaaaaaaaaaaaaaaaaawwwwwwwwwwwwwwwwwwwwwddddddddddddddddsssssssssssssssssssssssssssssssssssss',
                'gambar' => 'product/GL3LN631mAjIWmqcJYbX5UW8WY3snjb7szTM8iY2.jpg',
                'harga' => '30000',
                'shope_link' => 'https://shopee.co.id/Tahu-Bakso-Semarang-Siap-Goreng-Isi-15-Pcs-i.72219563.7955376208',
                'toped_link' => 'https://www.tokopedia.com/tokobahankuedona/royal-palmia-butter-margarine-200-gr-murah?src=topads',
                'category_id' => 1,
                'toko_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'nama_product' => 'Anthurium Corong',
                'text' => 'Antonium Corong adalah tanaman hias unik dimana tanaman ini memiliki daun yang unik dan warna yang unik',
                'gambar' => 'product/AVp70eI0L1V3zPNuYfuQvipoA1uhyWWwws0bVR9W.jpg',
                'harga' => '150000',
                'shope_link' => 'https://shopee.co.id/Tahu-Bakso-Semarang-Siap-Goreng-Isi-15-Pcs-i.72219563.7955376208',
                'toped_link' => 'https://www.tokopedia.com/tokobahankuedona/royal-palmia-butter-margarine-200-gr-murah?src=topads',
                'category_id' => 2,
                'toko_id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'nama_product' => 'Putu Ayu',
                'text' => 'PUTU AYUUUUUUUUUUUUUUUUUUUUUUU PUTU AYUNEEEEEEEE BUUUUUUUUUUUUUUUUUUUUUUUUUU',
                'gambar' => 'product/hjEUcDDsLIW8YSuC8xcSrqQlewD5DzlMMVWFm7qn.jpg',
                'harga' => '2000',
                'shope_link' => 'https://shopee.co.id/Tahu-Bakso-Semarang-Siap-Goreng-Isi-15-Pcs-i.72219563.7955376208',
                'toped_link' => 'https://www.tokopedia.com/tokobahankuedona/royal-palmia-butter-margarine-200-gr-murah?src=topads',
                'category_id' => 1,
                'toko_id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}