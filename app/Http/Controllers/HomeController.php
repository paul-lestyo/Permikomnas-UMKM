<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Toko;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $data =[
            'category' => Category::get(),
            'slider' => Slider::get(),
            'toko' => Toko::get(),
            'product' => Product::get(),
        ];
        return view('/front/layouts/template',$data);
    }
}
