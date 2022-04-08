

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <div class="container justify-content-right">

        <br>

        <div class="container">









    </div>

    <script type="text/javascript">
        window.print();

    </script>
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
                       


                        <table class="table mt-4" style="width : 1000px">
                            <thead class="thead-dark" >
                                <tr style="font-size : 24px">
                                    <th scope="col">Nama Tamu</th>
                                    <th scope="col">Tanggal Check In</th>
                                    <th scope="col">Tanggal Check Out</th>
                
                                </tr>
                            </thead>
                            <tbody>
                
                                @foreach ($reservasi as $r)
                                    <tr style="font-size : 24px">
                                        <td>{{ $r->nama_tamu }}</td>
                                        <td>{{ $r->tgl_checkin }}</td>
                                        <td>{{ $r->tgl_checkout }}</td>
                
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                

                                <script type="text/javascript">
                                    window.print();

                                </script>
                            </body>

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
