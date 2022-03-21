<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('tamu.home');
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
