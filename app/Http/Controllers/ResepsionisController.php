<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepsionisController extends Controller
{
    public function index()
    {

        $reservasi = DB::table('tb_reservasi')->get();

        return view('resepsionis.dashboard', ['reservasi' => $reservasi]);
    }

    public function search(Request $request){


        // dd($request->nama_tamu);
        $reservasi = DB::table('tb_reservasi')->where('nama_tamu',$request->nama_tamu)->get();
        
        return view('resepsionis.dashboard', ['reservasi' => $reservasi]);

    }
}
