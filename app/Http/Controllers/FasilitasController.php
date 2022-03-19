<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FasilitasController extends Controller
{

    public function index()
    {

        $fasilitas = DB::table('tb_fasilitas')->get();
        
        
        // dd($dkamar);
        return view('admin.fasilitas.dashboard', ['fasilitas' => $fasilitas]);
    }
    


}
