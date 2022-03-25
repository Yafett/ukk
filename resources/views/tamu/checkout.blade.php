@extends('layouts.app-tamu')

{{-- @include('partials.navbar') --}}



@section('content')
    <div class="container justify-content-right">

        <br>

        <div class="container">
            

      



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

                @foreach ($reservasi as $r)
                    <tr>
                        <td>{{ $r->nama_tamu }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>

                            <a href="" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Cetak</a>


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
