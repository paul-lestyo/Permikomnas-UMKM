<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
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

    public function edit($id = NULL) 
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit_polos',['slider' => $slider]);
    }

    public function update(Request $request,$id) 
    {
        $request->validate([
            'judul' => 'required',
            'text' => 'required',
            // 'urutan' => 'required',
            'gambar'  => 'mimes:jpeg,jpg,png|max:500' 
        ]);

        $slider = Slider::findOrFail($request->id);
        $slider->judul  = $request->judul;
        $slider->text   = $request->text;
        $slider->urutan = $request->urutan;

        if(isset($request->gambar)) {
            $filename = Storage::disk('public')->putFile('slider', $request->file('gambar'));
            if(file_exists(public_path('uploads/toko/'.$request->old_gambar)) ){
                unlink(public_path('uploads/toko/'.$request->old_gambar));
            }
            $slider->gambar = $filename;
        }
        $slider->save();
        return redirect()->route('admin.slider.index')->with('success','Data Berhasil di Update');
    }
}
