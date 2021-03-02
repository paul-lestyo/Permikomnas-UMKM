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
        return redirect()->route('admin.category')->with('success','Data Berhasil di Hapus');
    }
}
