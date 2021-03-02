<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Toko;

class ProductController extends Controller
{
    public function index() 
    {
        $product = Product::get();
        return view('admin.product.index_polos',['product' => $product]);
    }

    public function add() 
    {
        $toko = Toko::get();
        $category = Category::get();
        return view('admin/product.add_polos',['toko' => $toko, 'category' => $category]);
    }

    public function create(Request $request) 
    {
        $request->validate([
            'nama_product' => 'required',
            'text' => 'required',
            'gambar'  => 'required|mimes:jpeg,jpg,png|max:500',
            'harga' => 'required',
            'category_id' => 'required',
            'toko_id' => 'required',
        ]);

        $filename = Storage::disk('public')->putFile('product', $request->file('gambar'));
        
        Product::create([
            'nama_product' => $request->nama_product,
            'text' => $request->text,
            'gambar' => $filename,
            'harga' => $request->harga,
            'category_id' => $request->category_id,
            'toko_id' => $request->toko_id,
        ]);

        return redirect()->route('admin.product.index')->with("Data Berhasil Ditambahkan!");
    }

    public function edit($id = NULL) 
    {
        $toko = Toko::get();
        $category = Category::get();
        $product  = Product::findOrFail($id);
        return view('admin.product.edit_polos',['product' => $product, 'toko' => $toko, 'category' => $category]);
    }

    public function update(Request $request) 
    {
        $request->validate([
            'nama_product' => 'required',
            'text' => 'required',
            'gambar'  => 'mimes:jpeg,jpg,png|max:500',
            'harga' => 'required',
            'category_id' => 'required',
            'toko_id' => 'required',
        ]);

        $product = Product::findOrFail($request->id);
        $product->nama_product  = $request->nama_product;
        $product->text  = $request->text;
        $product->harga  = $request->harga;
        $product->category_id  = $request->category_id;
        $product->toko_id  = $request->toko_id;

        if(isset($request->gambar)) {
            $filename = Storage::disk('public')->putFile('product', $request->file('gambar'));
            unlink(public_path('uploads/'.$request->old_gambar));
            $product->gambar = $filename;
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('Data Berhasil di Update');
    }

    public function delete($id = NULL) 
    {
        $product = Product::findOrFail($id);
        unlink(public_path('uploads/'.$product->gambar));
        $product->delete();

        return redirect()->route('admin.product.index')->with('Data Berhasil di Dihapus');
    }
}
