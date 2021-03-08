<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Toko;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index() {
        $data =[
        'kategori' =>count( Category::get()),
        'toko' => count(Toko::get()),
        'produk' => count(Product::get()),
        ];
        return view('admin.dashboard',$data);
    }
}
