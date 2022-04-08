<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<!DOCTYPE html>
<html>

<head>
    {{-- <link rel="stylesheet" href="style.css" /> --}}

    <style>
        /* Styles go here */

        .page-header,
        .page-header-space {
            height: 100px;
        }

        .page-footer,
        .page-footer-space {
            height: 50px;

        }

        .page-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 1px solid black;
            /* for demo */
            background: yellow;
            /* for demo */
        }

        .page-header {
            position: fixed;
            top: 0mm;
            width: 100%;
            border-bottom: 1px solid black;
            /* for demo */
            background: yellow;
            /* for demo */
        }

        .page {
            page-break-after: always;
        }

        @page {
            margin: 20mm
        }

        @media print {
            thead {
                display: table-header-group;
            }

            tfoot {
                display: table-footer-group;
            }

            button {
                display: none;
            }

            body {
                margin: 0;
            }
        }

    </style>
</head>

<body onafterprint="window.close()">


    <div class="page-header" style="text-align: center">
        <h1 style="font-family:verdana">Tadika Mesra</h1>
        <h6 style="font-family:verdana; margin-top : -10px">hotel anak</h6>
        <br />
   
    </div>

    <div class="page-footer">
        Terima kasih sudah berkunjung :_
    </div>

    <table>

        <thead>
            <tr>
                <td>
                    <!--place holder for the fixed-position header-->
                    <div class="page-header-space"></div>
                </td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>
                    <!--*** CONTENT GOES HERE ***-->
                    <div class="page" style="line-height: 3;">
                        <h2 style="font-weight : 200">

                                <div class="container">'
                                    @foreach ($reservasi as $r)
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-4">

                                            </div>
                                            <div class="col-5">
                                            
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                Nama Pemesan
                                            </div>
                                            <div class="col-4">
                                                : {{ $r->nama_pemesan }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                Nama Tamu
                                            </div>
                                            <div class="col-4">
                                                : {{ $r->nama_tamu }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3" style="width: 1000px">
                                                Email
                                            </div>
                                            <div class="col-4">
                                                : {{ $r->email }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                No Handphone
                                            </div>
                                            <div class="col-4">
                                                : {{ $r->no_telp }}
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                Tipe Kamar
                                            </div>
                                            <div class="col-4">
                                                : {{ $r->tipe_kamar }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                Jumlah Kamar
                                            </div>
                                            <div class="col-4">
                                                : {{ $r->jumlah_kamar }}
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3">
                                                Tanggal
                                            </div>
                                            <div class="col-4">
                                                : checkin <h4> {{ $r->tgl_checkin }} </h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-3">

                                            </div>
                                            <div class="col-4">
                                                : checkout <h4>{{ $r->tgl_checkout }}</h4>
                                            </div>
                                        </div>

                                    </div>



                                </div>


                                @endforeach



                                <script type="text/javascript">
                                    window.print();

                                </script>
                            </body>

                        </h2>
                    </div>
                </td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <td>
                    <!--place holder for the fixed-position footer-->
                    <div class="page-footer-space"></div>
                </td>
            </tr>
        </tfoot>

    </table>

</body>

</html>
