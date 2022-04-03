<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    public function index()
    {

        $reservasi = DB::table('tb_reservasi')->get();

        $test = auth()->user()->id;

        //  DB::table('tb_reservasi')->get();

         $reservasi =DB::table('tb_reservasi')->where('id_user', $test)->get();


        return view('tamu.checkout', ['reservasi' => $reservasi]);
    }

    public function cetak()
    {
        $test = auth()->user()->id;

        //  DB::table('tb_reservasi')->get();

         $reservasi =DB::table('tb_reservasi')->where('id_user', $test)->get();

        // dd($reservasi);

        return view('tamu.cewtak', ['reservasi' => $reservasi]);
    }

    public function fasilitas()
    {

        $fasilitas = DB::table('tb_fasilitas')->get();

        return view('tamu.fasilitas', ['fasilitas' => $fasilitas]);
    }

    public function kamar()
    {

        $super = DB::table('tb_fkamar')->where('tipe_kamar', 'Superior')->get();

        $deluxe = DB::table('tb_fkamar')->where('tipe_kamar', 'Deluxe')->get();

        return view('tamu.kamar', compact('super', 'deluxe'));
    }

    public function success()
    {
        $test = auth()->user()->id;

        //  DB::table('tb_reservasi')->get();

         $reservasi =DB::table('tb_reservasi')->where('id_user', $test)->paginate(1);

        // dd($reservasi);

        return view('tamu.checkout', ['reservasi' => $reservasi]);
    }

    public function cetakhome()
    {
        $test = auth()->user()->id;

        //  DB::table('tb_reservasi')->get();

         $reservasi =DB::table('tb_reservasi')->where('id_user', $test)->get();

        // dd($reservasi);

        return view('tamu.cetakhome', ['reservasi' => $reservasi]);
    }

    public function cetaksatu($id)
    {

         $reservasi = DB::table('tb_reservasi')->where('id_reservasi', $id)->get();

        // dd($reservasi);

        return view('tamu.cetaksatu', ['reservasi' => $reservasi]);
    }


}
