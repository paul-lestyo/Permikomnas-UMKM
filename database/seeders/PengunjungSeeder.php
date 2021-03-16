<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PengunjungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jml_pengunjung')->delete();
        $jumlah_pengunjung=[
            [
            'id'=>1,
            'jumlah_pengunjung'=> 0
            ]
        ];

        DB::table('jml_pengunjung')->insert($jumlah_pengunjung);
    }
}
