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
		<th scope="col">Tipe Kamar</th>
		<th scope="col">Jumlah Kamar</th>
		<th scope="col">Aksi</th>
	  </tr>
	</thead>
	<tbody>
	
		@foreach($kamar as $k)
		<tr>
			<td>{{ $k->tipe_kamar }}</td>
			<td>{{ $k->jumlah_kamar }}</td>

			<td>
				<a href="/admin/dashboard/edit/{{ $k->id_kamar }}" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Edit</a>

				
				<a href="/admin/dashboard/hapus/{{ $k->id_kamar }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</a>


			</td>
		</tr>
		@endforeach
	</tbody>
  </table>

  <a href="/admin/dashboard/tambah">
    tambah data kamar
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
