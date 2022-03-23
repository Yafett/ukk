<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class FasilitasController extends Controller
{

    public function index()
    {

        $fasilitas = DB::table('tb_fasilitas')->get();
        
        
        // dd($dkamar);
        return view('admin.fasilitas.dashboard', ['fasilitas' => $fasilitas]);
    }
    
    public function tambah()
    {

    	return view('admin/fasilitas/tambah');
    }

    public function store(Request $request)
    {
    	// dd($request);

    	// return $request->file('image')->store('images');


 
		$image = $request->file('image');
    	$nameImage = $request->file('image')->getClientOriginalName();

	    $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
	    $thumbPath = public_path() . '/gambar/' . $nameImage;
	    $thumbImage = Image::make($thumbImage)->save($thumbPath);

        // dd($originalPath);
   $request->validate([
            'nama_fasilitas' => 'required|min:1',
            'keterangan' => 'required|min:1',
            'image' => 'required'
        ]);
        
    	DB::table('tb_fasilitas')->insert([
		'nama_fasilitas' => $request->nama_fasilitas,
		'keterangan' => $request->keterangan,
		'image' => $nameImage,
	]);

        return redirect('admin/fasilitas/dashboard');

    }

        public function edit($id)
    {
        $fasilitas = DB::table('tb_fasilitas')->where('id_fasilitas', $id)->get();

        return view('admin.fasilitas.edit', ['fasilitas' => $fasilitas]);
    }

    public function update(Request $request)
    {

 
		$image = $request->file('image');
    	$nameImage = $request->file('image')->getClientOriginalName();

	    $thumbImage = Image::make($image->getRealPath())->resize(100, 100);
	    $thumbPath = public_path() . '/gambar/' . $nameImage;
	    $thumbImage = Image::make($thumbImage)->save($thumbPath);
  
  $request->validate([
            'nama_fasilitas' => 'required|min:1',
            'keterangan' => 'required|min:1',
            'image' => 'required'
        ]);
        
        
        
        DB::table('tb_fasilitas')->where('id_fasilitas', $request->id)->update([
       'nama_fasilitas' => $request->nama_fasilitas,
		'keterangan' => $request->keterangan,
		'image' => $nameImage,
      ]);
    
        return redirect('admin/fasilitas/dashboard');
        
    }

       public function hapus($id)
    {

        DB::table('tb_fasilitas')->where('id_fasilitas', $id)->delete();

        return redirect('admin/fasilitas/dashboard');
    }


}
