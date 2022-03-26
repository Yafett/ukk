<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    public function index()
    {

        $reservasi = DB::table('tb_reservasi')->get();

        return view('tamu.checkout', ['reservasi' => $reservasi]);
    }

    public function cetak()
    {

        $reservasi = DB::table('tb_reservasi')->get();

        return view('tamu.cetak', ['reservasi' => $reservasi]);
    }

    public function fasilitas()
    {

        $fasilitas = DB::table('tb_fasilitas')->get();

        return view('tamu.fasilitas', ['fasilitas' => $fasilitas]);
    }

    public function kamar()
    {

        $fkamar = DB::table('tb_fkamar')->get();

        return view('tamu.kamar', ['fkamar' => $fkamar]);
    }

}
