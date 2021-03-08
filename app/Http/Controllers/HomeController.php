<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $data =[
            'slider' => Slider::get()
        ];
        return view('/front/layouts/template',$data);
    }
}
