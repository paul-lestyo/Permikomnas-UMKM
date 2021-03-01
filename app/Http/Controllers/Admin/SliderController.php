<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function index() 
    {
        $slider = Slider::get();
        return view('admin.slider.index',['slider' => $slider]);
    }
}
