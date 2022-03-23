<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FasilitasKamarController extends Controller
{
    public function index()
    {

        $kamar = DB::table('tb_kamar')->get();
        
        $fkamar = DB::table('tb_fkamar')->get();
        
        // dd($dkamar);
        return view('admin.fkamar.dashboard', ['kamar' => $kamar, 'fkamar' => $fkamar]);
    }
    
    public function tambah() 
    {
        $kamar = DB::table('tb_kamar')->get();
        return view('admin.fkamar.tambah', ['kamar' => $kamar]);
    }
    
    public function edit($id)
    {
        $fkamar = DB::table('tb_fkamar')->where('id_fkamar', $id)->get();

        return view('admin.fkamar.edit', ['fkamar' => $fkamar]);
    }

    public function update(Request $request)
    {
           $request->validate([
            'tipe_kamar' => 'required|min:1',
            'nama_fasilitas' => 'required|min:1'
        ]);
        
        DB::table('tb_fkamar')->where('id_fkamar', $request->id)->update([
        'tipe_kamar' => $request->tipe_kamar,
        'nama_fasilitas' => $request->nama_fasilitas
      ]);

    //   dd($request);
    
        return redirect('admin/fkamar/dashboard');
        
    }
    public function store(Request $request)
    {
      
    $request->validate([
            'tipe_kamar' => 'required|min:1',
            'nama_fasilitas' => 'required|min:1'
        ]);

        DB::table('tb_fkamar')->insert([
		'tipe_kamar' => $request->tipe_kamar,
		'nama_fasilitas' => $request->nama_fasilitas
	]);

        return redirect('admin/fkamar/dashboard');
    }

       public function hapus($id)
    {

        DB::table('tb_fkamar')->where('id_fkamar', $id)->delete();

        return redirect('admin/fkamar/dashboard');
    }
}
