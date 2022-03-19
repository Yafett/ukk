@extends('layouts.app-admin')

@section('content')


<div class="container">
  <div class="row">
    <div class="col-sm">
    </div>


    <div class="col-sm ">

         <div class="row justify-content-center">
        <div class="col-12 text-center">
             <h3>Tambah Fasilitas Kamar</h3>


<form action="/admin/fkamar/tambah" method="post">
    {{ csrf_field() }}

   
       <select class="form-control" id="tipe_kamar" name="tipe_kamar">
@foreach( $kamar as $k)
      <option value="{{ $k->tipe_kamar }}">{{ $k->tipe_kamar }}</option>
@endforeach
      
    </select>
    <br/>
    
    Nama Fasilitas <input type="text" name="nama_fasilitas" required="required"> <br/>
   

    <input type="submit" value="Simpan Data">
</form>

<a href="admin.dashboard"> Kembali</a>



    </div>



        </div>
    </div>
    
  


    <div class="col-sm">
    </div>
  </div>
</div>



@endsection