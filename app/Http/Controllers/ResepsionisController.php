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
}
