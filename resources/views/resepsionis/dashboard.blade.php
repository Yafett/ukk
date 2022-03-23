@extends('layouts.app-resepsionis')

{{-- @include('partials.navbar') --}}



@section('content')

<div class="container justify-content-right">


  
  <br>
  
  <form class="d-flex" action="{{ route('resepsionis.search') }}" method="POST">
	@csrf
    <input name="nama_tamu" class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>


  </form>

  <table class="table">
	<thead class="thead-dark">
	  <tr>
		<th scope="col">Nama Tamu</th>
		<th scope="col">Tanggal Check In</th>
		<th scope="col">Tanggal Check Out</th>
		<th scope="col">Aksi</th>
	  </tr>
	</thead>
	<tbody>
	
		@foreach($reservasi as $r)
		
		<tr>
			<td>{{ $r->nama_tamu }}</td>
			<td>{{ $r->tgl_checkin }}</td>
			<td>{{ $r->tgl_checkin }}</td>
			<td>
				
				<a href="" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Check In</a>

				
				{{-- <a href="/admin/reservasi/hapus/{{ $r->id_reservasi }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</a> --}}


			</td>
		</tr>
		@endforeach
	</tbody>
  </table>

  <div class="d-flex flex-column align-items-end">
		
		<a href="/admin/fasilitas/tambah" type="button" class="btn btn-success btn-circle btn-sm">+</a>

    </div>


</div>


@endsection
