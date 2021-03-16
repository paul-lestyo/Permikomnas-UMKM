<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Toko;
use App\Models\Product;
use App\Models\JmlPengunjung;

class DashboardController extends Controller
{
    public function index() {
        $pengunjung = JmlPengunjung::find(JmlPengunjung::max('id'));
        $data =[
        'kategori' =>count( Category::get()),
        'toko' => count(Toko::get()),
        'produk' => count(Product::get()),
        'pengunjung'=> $pengunjung->jumlah_pengunjung
        ];
        return view('admin.dashboard',$data);
    }
}
