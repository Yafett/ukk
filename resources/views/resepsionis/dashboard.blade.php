@extends('layouts.app-resepsionis')

{{-- @include('partials.navbar') --}}



@section('content')

<div class="container justify-content-right">


  
  <br>
  
  <div class="container">
  <div class="row">
    <div class="col-6">
          
      <form action="{{ route('resepsionis.filter') }}" class="d-flex" method="POST">
        @csrf
        
                   <div class="form-floating">
                                <input required type="date" name="tgl_checkin" class="form-control" id="tgl_checkin" value="" style="width : 250px">
                                <label for="floatingInputGrid">Tanggal Check In</label>
                            </div>  
                             <button class="btn btn-outline-success" type="submit">Filter</button>
    </div>
      </form>
    
  
    <div class="col-6">
      <form class="d-flex" action="{{ route('resepsionis.search') }}" method="POST">
	@csrf
 <!--   <input name="nama_tamu" class="form-control-sm mr-2 " type="search" placeholder="Search" aria-label="Search">-->
    
      <div class="form-floating">
                                <input required type="text" name="nama_tamu" class="form-control" id="nama_tamu" value="" style="width : 250px">
                                <label for="floatingInputGrid">Search</label>
                            </div>    
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  </div>
  
  </div>
  <div class="row">
    <div class="col-8"></div>
    <div class="col-4"></div>
  </div>
</div>

  

  <table class="table mt-3">
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

<form method="post" action="{{ route('resepsionis.dashboard') }}">
  <div class="d-flex flex-column align-items-end">
		
		<a href="/resepsionis/dashboard" type="button" class="btn btn-success btn-circle btn-sm">reset</a>

    </div>
  
</form>
  


</div>


@endsection