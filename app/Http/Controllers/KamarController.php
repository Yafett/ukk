<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index()
    {

        $kamar = DB::table('tb_kamar')->get();

        $fasilitas = DB::table('tb_fkamar')->get();

        return view('admin.kamar.dashboard', ['kamar' => $kamar, 'fasilitas' => $fasilitas]);
    }

    public function tambah() 
    {
        return view('admin.kamar.tambah');
    }

    public function store(Request $request)
    {

        $request->validate([
            'tipe_kamar' => 'required|min:1',
            'jumlah_kamar' => 'required|min:1'
        ]);

        DB::table('tb_kamar')->insert([
	        	'tipe_kamar' => $request->tipe_kamar,
	        	'jumlah_kamar' => $request->jumlah_kamar
	]);

        return redirect('admin/dashboard');
    }

    public function edit($id)
    {
       
        
        $kamar = DB::table('tb_kamar')->where('id_kamar', $id)->get();

        return view('admin.kamar.edit', ['kamar' => $kamar]);
    }

    public function update(Request $request)
    {
        
     $request->validate([
            'tipe_kamar' => 'required|min:1',
            'jumlah_kamar' => 'required|min:1'
        ]);
        
        DB::table('tb_kamar')->where('id_kamar', $request->id)->update([
        'tipe_kamar' => $request->tipe_kamar,
	    	'jumlah_kamar' => $request->jumlah_kamar
      ]);

    //   dd($request);
    
        return redirect('admin/dashboard');
        
    }

    public function hapus($id)
    {

        $tip = DB::table('tb_kamar')->where('id_kamar', $id)->value('id_kamar');
    
        $nam = DB::table('tb_kamar')->where('id_kamar', $tip)->value('tipe_kamar');
    
        DB::table('tb_fkamar')->where('tipe_kamar', $nam)->delete();

        DB::table('tb_kamar')->where('id_kamar', $id)->delete();

        return redirect('admin/dashboard');
    }

    public function lihat($id)
    {
        
        $kamar = DB::table('tb_kamar')->where('id_kamar', $id)->get();

        $fasilitas = DB::table('tb_fkamar')->where('id_fkamar', $id)->value('nama_fasilitas');

        // $fasilitas = DB::table('tb')

        return view('admin.kamar.lihat', ['kamar' => $kamar, 'fasilitas' => $fasilitas]);
    }

    }

