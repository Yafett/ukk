<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<body onafterprint="window.close()">
    <div class="container">'
        @foreach ($reservasi as $r)
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-5">
                <div class="display-4 mb-5">

                    Reservasi

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                Nama Pemesan
            </div>
            <div class="col-3">
                : {{ $r->nama_pemesan }}
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                Nama Tamu
            </div>
            <div class="col-3">
                : {{ $r->nama_tamu }}
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                Email
            </div>
            <div class="col-3">
                : {{ $r->email }}
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                No Handphone
            </div>
            <div class="col-3">
                : {{ $r->no_telp }}
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                Tipe Kamar
            </div>
            <div class="col-3">
                : {{ $r->tipe_kamar }}
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                Jumlah Kamar
            </div>
            <div class="col-3">
                : {{ $r->jumlah_kamar }}
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
                Tanggal 
            </div>
            <div class="col-3">
                : checkin   {{ $r->tgl_checkin }}
            </div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-3">
             
            </div>
            <div class="col-3">
                : checkout {{ $r->tgl_checkout }}
            </div>
        </div>
        
    </div>



</div>


@endforeach



<script type="text/javascript">
    window.print();
</script>
</body>
