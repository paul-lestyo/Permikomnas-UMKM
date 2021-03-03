<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Toko;

class TokoController extends Controller
{
    public function index() 
    {
        $toko = Toko::get();
        return view('admin.toko.index_polos',['toko' => $toko]);
    }

    public function add() 
    {
        return view('admin/toko.add_polos');
    }

    public function create(Request $request) 
    {
        $request->validate([
            'nama_toko' => 'required',
            'logo'  => 'mimes:jpeg,jpg,png|max:500' 
        ]);

        $filename = Storage::disk('public')->putFile('toko', $request->file('logo'));
        
        Toko::create([
            'nama_toko' => $request->nama_toko,
            'logo' => $filename
        ]);

        return redirect()->route('admin.toko.index')->with("Data Berhasil Ditambahkan!");
    }

    public function edit($id = NULL) 
    {
        $toko = Toko::findOrFail($id);
        return view('admin.toko.edit_polos',['toko' => $toko]);
    }

    public function update(Request $request) 
    {
        $request->validate([
            'nama_toko' => 'required',
            'logo'  => 'mimes:jpeg,jpg,png|max:500' 
        ]);

        $toko = Toko::findOrFail($request->id);
        $toko->nama_toko  = $request->nama_toko;

        if(isset($request->logo)) {
            $filename = Storage::disk('public')->putFile('toko', $request->file('logo'));
            unlink(public_path('uploads/'.$request->old_logo));
            $toko->logo = $filename;
        }

        $toko->save();

        return redirect()->route('admin.toko.index')->with('Data Berhasil di Update');
    }

    public function delete($id = NULL) 
    {
        $toko = Toko::findOrFail($id);
        unlink(public_path('uploads/'.$toko->logo));
        $toko->delete();

        return redirect()->route('admin.toko.index')->with('Data Berhasil di Dihapus');
    }
}
