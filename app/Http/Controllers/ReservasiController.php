<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    public function store(Request $request){

        $awal = DB::table('tb_kamar')->where('tipe_kamar', $request->tipe_kamar)->value('jumlah_kamar');

        // dd($awal);

        DB::table('tb_kamar')->where('tipe_kamar', $request->tipe_kamar)->update([
            'jumlah_kamar' => $awal - $request->jumlah_kamar
        ]);

        // dd($request->jumlah_kamar);

        $test = auth()->user()->id;

        // dd($test);
        // dd($request);
        $request->validate([
            'tgl_checkin' => 'required|date',
            'tgl_checkout' => 'required|date|after_or_equal:tgl_checkin',
            'jumlah_kamar' => 'required|min:1',
            'pemesan' => 'required|regex:/^([a-zA-Z]+)*$/',
            'email' => 'required|email',
            'notelp' => 'required|min:3',
            'tamu' => 'required|min:1',
            'tipe_kamar' => 'required'
        ]);

        $data = [
            'tgl_checkin' => $request->tgl_checkin,
            'tgl_checkout' => $request->tgl_checkout,
            'jumlah_kamar' => $request->jumlah_kamar,
            'nama_pemesan' => $request->pemesan,
            'email' => $request->email,
            'no_telp' => $request->notelp,
            'nama_tamu' => $request->tamu,
            'tipe_kamar' => $request->tipe_kamar,
            'id_user' => $test,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ];

        DB::table('tb_reservasi')->insert($data);
        // return back()->with('success','Data Berhasil di Input');
        return redirect()->route('tamu.succ');

        // if($request->filled('tgl_checkin')) {
        //     dd('user_id is not empty.');
        // } else {
        //     dd('user_id is empty.');
        //     return redirect()->route('tamu.home', ['data' => $request])->with('success','Data Berhasil di Input');
        // }

    }
}
