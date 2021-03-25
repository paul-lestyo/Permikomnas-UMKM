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
        return view('admin.toko.index',['toko' => $toko]);
    }


    public function add(Request $request) 
    {
        $request->validate([
            'nama_toko' => 'required',
            'logo'  => 'mimes:jpeg,jpg,png|max:500' 
        ]);

        $filename = Storage::disk('public')->putFile('toko', $request->file('logo'));
        
        Toko::create([
            'id' => \DB::table('toko')->max('id') + 1,
            'nama_toko' => $request->nama_toko,
            'logo' => $filename
        ]);
        return redirect()->route('admin.toko.index')->with("success","Data Berhasil Ditambahkan!");
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'nama_toko' => 'required',
            'logo'  => 'mimes:jpeg,jpg,png|max:500' 
        ]);

        $toko = Toko::findOrFail($request->id);
        $toko->nama_toko  = $request->nama_toko;

        if(isset($request->logo)) {
            $filename = Storage::disk('public')->putFile('toko', $request->file('logo'));
            if(file_exists(public_path('uploads/toko/'.$request->old_logo)) ){
                unlink(public_path('uploads/toko/'.$request->old_logo));
            }
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

        return redirect()->route('admin.toko.index')->with('success','Data Berhasil di Dihapus');
    }
}
