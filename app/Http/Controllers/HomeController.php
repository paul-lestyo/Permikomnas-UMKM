<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Toko;
use App\Models\Product;
use App\Models\JmlPengunjung;


class HomeController extends Controller
{

    public function index()
    {
        // setiap reload jumlah view bertambah
        $pengunjung = JmlPengunjung::find(JmlPengunjung::max('id'));
        $pengunjung->jumlah_pengunjung = $pengunjung->jumlah_pengunjung +1 ;
        $pengunjung->save();
        
        $data =[
            'category' => Category::get(),
            'slider' => Slider::get(),
            'toko' => Toko::get(),
            'product' => Product::get(),
        ];
        return view('/front/layouts/template',$data);
    }
}
