<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() 
    {
        $category = Category::get();
        return view('admin.category.index',['category' => $category]);
    }
    public function delete($id)
    {
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('admin.category.index')->with('success','Data Berhasil di Hapus');
    }

    public function add(request $request)
    {
       $data = new Category;
       $data->nama_category = \DB::table('category')->max('id') + 1;
       $data->nama_category = $request->nama;
       $data->save();
        return redirect()->route('admin.category.index')
        ->with('success', 'Data Berhasil Ditambahkan.');
    }
    
    public function update(request $request,$id)
    {
        $data = Category::find($id);
        $data->nama_category  = $request->nama;
        $data->save();
        return redirect()->route('admin.category.index')
        ->with('success', 'Data Berhasil Diubah.');
    }
}
