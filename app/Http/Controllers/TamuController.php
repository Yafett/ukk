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

        return view('tamu.cetak', ['reservasi' => $reservasi]);
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

        // dd($test);
        $reservasi =DB::table('tb_reservasi')->where('id_user', $test)->get();

        // dd($reservasi);

        return view('tamu.checkout', ['reservasi' => $reservasi]);
    }

    public function cetakhome()
    {
        $test = auth()->user()->id;

        //  DB::table('tb_reservasi')->get();

         $reservasi =DB::table('tb_reservasi')->where('id_user', $test)->get();


        return view('tamu.cetakhome', ['reservasi' => $reservasi]);
    }

    public function cetaksatu($id)
    {

         $reservasi = DB::table('tb_reservasi')->where('id_reservasi', $id)->get();

        // dd($reservasi);

        return view('tamu.cetaksatu', ['reservasi' => $reservasi]);
    }

    
    public function checkin($id)
    {

        DB::table('tb_reservasi')->where('id_reservasi', $id)->update([
            'status' => 'b'    
        ]);

        
        $reservasi = DB::table('tb_reservasi')->get();

        // return view('resepsionis.dashboard', ['reservasi' => $reservasi]);

        return redirect()->route('home.check');
    }
   
    public function checkout($id)
    {

        DB::table('tb_reservasi')->where('id_reservasi', $id)->update([
            'status' => 'c'    
        ]); 
        
        $jumlah = DB::table('tb_reservasi')->where('id_reservasi', $id)->value('jumlah_kamar'); 
        
        $jml_kamar = DB::table('tb_kamar')->where('id_kamar', $id)->value('jumlah_kamar');
        
        DB::table('tb_kamar')->where('id_kamar', $id)->update([
            'jumlah_kamar' => $jumlah + $jml_kamar
        ]);
        
        $reservasi = DB::table('tb_reservasi')->get();

        // return view('resepsionis.dashboard', ['reservasi' => $reservasi]);

        return redirect()->route('home.check');
    }

    public function batalkan($id)
    {
        
        $jumlah = DB::table('tb_reservasi')->where('id_reservasi', $id)->value('jumlah_kamar'); 
        
        $jml_kamar = DB::table('tb_kamar')->where('id_kamar', $id)->value('jumlah_kamar');
        
        DB::table('tb_kamar')->where('id_kamar', $id)->update([
            'jumlah_kamar' => $jumlah + $jml_kamar
        ]);
        
        DB::table('tb_reservasi')->where('id_reservasi', $id)->update([
            'status' => 'd'
        ]); 

        // $reservasi = DB::table('tb_reservasi')->get();

        // return view('resepsionis.dashboard', ['reservasi' => $reservasi]);

        return redirect()->route('home.check');
    }


}
