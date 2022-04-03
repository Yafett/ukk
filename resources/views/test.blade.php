<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        body {
            align-items: center;
            background: #f1eef1;
            display: flex;
            font-family: sans-serif;
            justify-content: center;
            /* height: 100vh; */
            margin: 0;
        }

        .me {
            background-size: cover;
        }


        .email {
            background: #dedbdf;
            border-radius: 16px;
            height: 32px;
            overflow: hidden;
            position: relative;
            width: 162px;
            -webkit-tap-highlight-color: transparent;
            transition: width 300ms cubic-bezier(0.4, 0, 0.2, 1),
                height 300ms cubic-bezier(0.4, 0, 0.2, 1),
                box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1),
                border-radius 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .email:not(.expand) {
            cursor: pointer;
        }

        .email:not(.expand):hover {
            background: #c2c0c2;
        }

        .from {
            position: absolute;
            transition: opacity 200ms 100ms cubic-bezier(0, 0, 0.2, 1);
        }

        .from-contents {
            display: flex;
            flex-direction: row;
            transform-origin: 0 0;
            transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .to {
            opacity: 0;
            position: absolute;
            transition: opacity 100ms cubic-bezier(0.4, 0, 1, 1);
        }

        .to-contents {
            transform: scale(0.55);
            transform-origin: 0 0;
            transition: transform 300ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .avatar {
            border-radius: 12px;
            height: 24px;
            left: 6px;
            position: relative;
            top: 4px;
            width: 24px;
        }

        .name {
            font-size: 14px;
            line-height: 32px;
            margin-left: 2 0px;
        }

        .top {
            background: #6422eb;
            display: flex;
            flex-direction: row;
            height: 70px;
            transition: height 300ms cubic-bezier(0.4, 0, 0.2, 1);
            width: 300px;
        }

        .avatar-large {
            border-radius: 21px;
            height: 42px;
            margin-left: 12px;
            position: relative;
            top: 14px;
            width: 42px;
        }

        .name-large {
            color: #efd8ef;
            font-size: 16px;
            line-height: 70px;
            margin-left: 20px;
        }

        .x-touch {
            align-items: center;
            align-self: center;
            cursor: pointer;
            display: flex;
            height: 50px;
            justify-content: center;
            margin-left: auto;
            width: 50px;
        }

        .x {
            background: #ba87f9;
            border-radius: 10px;
            height: 20px;
            position: relative;
            width: 20px;
        }

        .x-touch:hover .x {
            background: #cb9afb;
        }

        .line1 {
            background: #6422eb;
            height: 12px;
            position: absolute;
            transform: translateX(9px) translateY(4px) rotate(45deg);
            width: 2px;
        }

        .line2 {
            background: #6422eb;
            height: 12px;
            position: absolute;
            transform: translateX(9px) translateY(4px) rotate(-45deg);
            width: 2px;
        }

        .twitter {
            margin-left: 16px;
            height: 30px;
            position: relative;
            top: 0px;
            width: 30px;
        }

        .medium {
            height: 30px;
            margin-left: 16px;
            position: relative;
            width: 30px;
        }

        .link {
            margin-left: 16px;
        }

        .link a {
            color: #444247;
            text-decoration: none;
        }

        .link a:hover {
            color: #777579;
        }

        .email.expand {
            border-radius: 6px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1), 0 6px 6px rgba(0, 0, 0, 0.16);
            height: 200px;
            width: 300px;
        }

        .expand .from {
            opacity: 0;
            transition: opacity 100ms cubic-bezier(0.4, 0, 1, 1);
        }

        .expand .from-contents {
            transform: scale(1.91);
        }

        .expand .to {
            opacity: 1;
            transition: opacity 200ms 100ms cubic-bezier(0, 0, 0.2, 1);
        }

        .expand .to-contents {
            transform: scale(1);
        }

    </style>
</head>

    <div class="email" onclick="this.classList.add('expand')">
        <div class="from">
            <div class="from-contents">
                <div class="avatar me"></div>
                <div class="name">Lihat Fasilitas</div>
            </div>
        </div>
        <div class="to" style="overflow : auto">
            <div class="to-contents">
                <div class="top">
                    <div class="avatar-large me"></div>
                    <div class="name-large">Fasilitas : </div>
                    <div class="x-touch"
                        onclick="document.querySelector('.email').classList.remove('expand');event.stopPropagation();">
                        <div class="x">
                            <div class="line1"></div>
                            <div class="line2"></div>
                        </div>
                    </div>
                </div>
                <div class="overflow-auto">
                    <ul>
                        <li>ssa</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                        <li>a</li>
                    </ul>

                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
    </div>
    {{-- </div> --}}


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    -->
</body>

</html>

{{-- <div class="container"> --}}
