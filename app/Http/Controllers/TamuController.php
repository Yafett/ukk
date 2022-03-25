<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TamuController extends Controller
{
    public function index()
    {

        $reservasi = DB::table('tb_reservasi')->paginate(1);

        return view('test', ['reservasi' => $reservasi]);
    }
}
