    @extends('layouts.app-admin')

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <h3>Tambah Fasilitas Kamar</h3>
                    <div class="card p-3" style="background-color: white; width : 380px;">

                        <form action="/admin/fkamar/tambah" method="post">
                            {{ csrf_field() }}


                            <select name="tipe_kamar" id="tipe_kamar" class="form-control">
                                <option selected class="form-select form-check disabled text-muted" aria-label="disabled select example" disabled>Pilih salah satu tipe kamar</option>
                                <option value="superior">Superior</option>
                                <option value="deluxe">Deluxe</option>
                            </select>

                            Tipe Kamar

                        
                            <br />

                            Nama Fasilitas <input class="form-control" type="text" name="nama_fasilitas" required="required">
                            <br />

                            <div class="col">

                                <a href="{{ route('admin.fkamar.dashboard') }}"> Kembali</a>
                                <input class="btn btn-success ml-3" type="submit" value="Simpan Data">
                            </div>
                        </form>


                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
    @endsection
