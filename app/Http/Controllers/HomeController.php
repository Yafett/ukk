<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $superior = DB::table('tb_kamar')->where('tipe_kamar', 'Superior')->get();

        $deluxe = DB::table('tb_kamar')->where('tipe_kamar', 'Deluxe')->get();

        return view('tamu.home', compact('superior', 'deluxe'));
    }

    public function tes(Request $request){

        dd($request);
        $request->validate([
                'tgl_checkout' => 'required',
                'tgl_checkin' => 'required',
                'jumlah_kamar' => 'required'
            ]);


        return back()->with('success', 'User created successfull');
  // return view('tamu.home');


    }
}
