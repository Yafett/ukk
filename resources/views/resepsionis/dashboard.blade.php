@extends('layouts.app-resepsionis')

{{-- @include('partials.navbar') --}}



@section('content')
    <div class="container">


        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form class="d-flex" action="{{ route('resepsionis.search') }}" method="POST">
                        @csrf

                        <div class="form-floating">
                            <input required type="text" name="nama_tamu" class="form-control" id="nama_tamu" value=""
                                style="width : 250px">
                            <label for="floatingInputGrid">Search ( nama tamu)</label>
                        </div>
                        <button class="btn btn-outline-success ml-3" type="submit">Search</button>
                    </form>

                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <form action="{{ route('resepsionis.filter') }}" class="d-flex" method="POST">
                        @csrf

                        <div class="form-floating">
                            <input required type="date" name="tgl_checkin" class="form-control" id="tgl_checkin" value=""
                                style="width : 250px">
                            <label for="floatingInputGrid">filter ( tanggal check-in)</label>
                        </div>
                        <button class="btn btn-outline-success ml-3" type="submit">Filter</button>
                    </form>
                </div>
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

                @foreach ($reservasi as $r)
                    <tr>
                        <td>{{ $r->nama_tamu }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>

                            <a href="/resepsionis/dashboard/hapus/{{ $r->id_reservasi }}" class="btn btn-success btn-sm active" role="button" aria-pressed="true">Check
                                In</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form method="post" action="{{ route('resepsionis.dashboard') }}">
            <div class="d-flex flex-column align-items-end">

                <a href="/resepsionis/dashboard" type="button" class="btn btn-success btn-circle btn-sm"  style="font-size: 14px">reset</a>

            </div>

        </form>

    </div>
    </div>


    </div>
@endsection
