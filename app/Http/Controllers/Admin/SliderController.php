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
        return view('admin.slider.index_polos',['slider' => $slider]);
    }

    public function edit($id = NULL) 
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit_polos',['slider' => $slider]);
    }

    public function update(Request $request) 
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
            unlink(public_path('uploads/'.$request->old_gambar));
            $slider->gambar = $filename;
        }

        $slider->save();

        return redirect()->route('admin.slider.index')->with('Data Berhasil di Update');
    }

    // public function delete($id = NULL) 
    // {
    //     $slider = Slider::findOrFail($id);
    //     unlink(public_path('uploads/'.$slider->gambar));
    //     $slider->delete();

    //     return redirect()->route('admin.slider.index')->with('Data Berhasil di Dihapus');
    // }
}
