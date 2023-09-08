<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.cdnfonts.com/css/bookman-old-style" rel="stylesheet">
        <title>{{ $data->title }}</title>
        <style>

            @font-face {
                font-family: 'Bookman Old Style';
                font-style: normal;
                font-weight: 400;
                src: url('{{storage_path('fonts/bookman-old-style.ttf') }}') format('truetype');
            }

            @font-face {
                font-family: 'Bookman Old Style';
                font-style: normal;
                font-weight: 700;
                src: url('{{storage_path('fonts/bookman-old-style-bold.ttf') }}') format('truetype');
            }

            * {
                margin: 0;
                font-family: 'Bookman Old Style', sans-serif;
            }

            .mail-header {
                margin-top: 40px;
                align-items: center;
                position: relative;
                padding-bottom: 2px;
                border-bottom: 1.5px solid black;
                text-align: center;
            }

            .mail-header::after {
                display: block;
                content:  '';
                height: 4px;
                width: 100%;
                background-color: black;
                margin-top: 10px;
            }

            .mail-header img {
                position: absolute;
                margin-top: 10px;
                /* left: 20px;
                bottom: 20px; */
            }

            .mail-header .goverment {
                font-size: 18px;
                font-weight: 700;
                line-height: 17px;
            }

            .mail-header .village {
                font-size: 20px;
                font-weight: 700;
                line-height: 18px;
            }

            .mail-header p {
                font-size: 13px;
            }

            .mail-body .mail-type {
                text-indent: 0;
                font-size: 17px;
                text-align: center;
                margin-top: 10px;
            }

            .mail-body .mail-num {
                text-align: center;
                font-size: 17px;
                margin-bottom: 20px;
            }

            .mail-body .long {
                text-align: justify; 
                text-indent: 40px;
            }

        </style>
        @stack('style')
    </head>
    <body>
        <div style="width: 80%; margin: 0 auto;" >
            <div class="mail-header">
                <img src="./assets/be/media/desa.png" width="100" alt="">
                <p class="goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</p>
                <p class="village" >DESA GETASAN</p>
                <p class="" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : desagetasan.id</p>
            </div>
            @yield('mail-body')
        </div>
    </body>
</html>