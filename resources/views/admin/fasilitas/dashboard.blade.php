@extends('layouts.app-admin')

{{-- @include('partials.navbar') --}}



@section('content')

<div class="container justify-content-right">



  <h1>
      Dashboard Administrator
  </h1>


  
  <br>


  <table class="table">
	<thead class="thead-dark">
	  <tr>
		<th scope="col">Nama Fasilitas</th>
		<th scope="col">Keterangan</th>
		<th scope="col">Image</th>
		<th scope="col">Aksi</th>
	  </tr>
	</thead>
	<tbody>
	
		@foreach($fasilitas as $f)
		
		<tr>
			<td>{{ $f->nama_fasilitas }}</td>
			<td>{{ $f->keterangan }}</td>
			<td>{{ $f->image }} </td>
			<td>
				<a href="/admin/fkamar/edit/{{ $f->id_fasilitas }}" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Edit</a>

				
				<a href="/admin/fkamar/hapus/{{ $f->id_fasilitas }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</a>


			</td>
		</tr>
		@endforeach
	</tbody>
  </table>

  <a href="/admin/fkamar/tambah">
    tambah data fasilitas umum
  </a> 

    <div class="d-flex flex-column align-items-end">
		<button class="btn btn-lg btn-raised btn-wave btn-icon btn-rounded mb-2 teal active" href="/admin/dashboard/tambah"> 
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
			<line x1="12" y1="5" x2="12" y2="19"></line>
			<line x1="5" y1="12" x2="19" y2="12"></line>
		</svg>
		</button>
    </div>



</div>
@endsection
