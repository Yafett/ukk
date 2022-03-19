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
    
    public function store(Request $request)
    {

        DB::table('tb_fkamar')->insert([
		'tipe_kamar' => $request->tipe_kamar,
		'nama_fasilitas' => $request->nama_fasilitas
	]);

        return redirect('admin/fkamar/dashboard');
    }
}
