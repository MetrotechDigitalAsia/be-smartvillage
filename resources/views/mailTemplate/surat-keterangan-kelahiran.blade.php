<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/bookman-old-style" rel="stylesheet">
    <title>Surat Akta Kematian</title>
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

        /* p, h1, h2, h3, h4, h5, h6 {
            font-family: 'Bookman Old Style', sans-serif;
        } */

        * {
            margin: 0;
            font-family: 'Bookman Old Style', sans-serif;
        }

        .message-container {
            font-family: 'Bookman Old Style', sans-serif, ;
            color: black;
            width: 730px;
        }

        .message-content {
            max-width: 2480px !important;
            max-height: 3508px !important;
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
            font-size: 12px;
        }

        .mail-body table p:last-child {
            text-align: center;
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
            font-size: 16px;
            text-indent: 40px;
            text-align: justify;
        }

        /* .mail-body table {
            margin: 10px 0;
            width: fit-content;
            text-align: left;
        }

        .mail-body table:first-child {
            width: fit-content;
            text-align: left;
        } */

        .mail-body .family-table {
            margin: 20px 0;
            border-collapse: separate;
            border-spacing: 1px 0px;
            line-height: 17px;
        }

        .mail-body .family-table tr td:nth-child(2) {
            width: 150px;
        }

        .mail-body .saksi-table {
            width: 100%;
        }

        .mail-body .saksi-table tr td p {
            margin-top: 30px;
            text-align: center
        }

        .mail-body .saksi .col {
            /* flex: 1; */
            width: 10px;
            background-color: green;
        }

        .mail-body u.saksi {
            -webkit-text-stroke: 0.5px black;
            width: fit-content;
            text-indent: 0;
        }
        
        .mail-body .sign-table {
            margin-top: 20px;
            width: 100%;
        }

        .mail-body .sign-table  tr td:last-child{
            text-align: center;
        }

    </style>
    {{-- <style>
     
        .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll; }

        .container {
        width: 100%;
        padding-right: 12.5px;
        padding-left: 12.5px;
        margin-right: auto;
        margin-left: auto; }
        @media (min-width: 576px) {
            .container {
            max-width: 540px; } }
        @media (min-width: 768px) {
            .container {
            max-width: 720px; } }
        @media (min-width: 992px) {
            .container {
            max-width: 960px; } }
        @media (min-width: 1200px) {
            .container {
            max-width: 1140px; } }
        @media (min-width: 1400px) {
            .container {
            max-width: 1340px; } }

        .container-fluid, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
        width: 100%;
        padding-right: 12.5px;
        padding-left: 12.5px;
        margin-right: auto;
        margin-left: auto; }

        @media (min-width: 576px) {
        .container, .container-sm {
            max-width: 540px; } }

        @media (min-width: 768px) {
        .container, .container-sm, .container-md {
            max-width: 720px; } }

        @media (min-width: 992px) {
        .container, .container-sm, .container-md, .container-lg {
            max-width: 960px; } }

        @media (min-width: 1200px) {
        .container, .container-sm, .container-md, .container-lg, .container-xl {
            max-width: 1140px; } }

        @media (min-width: 1400px) {
        .container, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
            max-width: 1340px; } }

        .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -12.5px;
        margin-left: -12.5px; }

        .no-gutters {
        margin-right: 0;
        margin-left: 0; }
        .no-gutters > .col,
        .no-gutters > [class*="col-"] {
            padding-right: 0;
            padding-left: 0; }

        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
        .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
        .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
        .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
        .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
        .col-xl-auto, .col-xxl-1, .col-xxl-2, .col-xxl-3, .col-xxl-4, .col-xxl-5, .col-xxl-6, .col-xxl-7, .col-xxl-8, .col-xxl-9, .col-xxl-10, .col-xxl-11, .col-xxl-12, .col-xxl,
        .col-xxl-auto {
        position: relative;
        width: 100%;
        padding-right: 12.5px;
        padding-left: 12.5px; }

        .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        min-width: 0;
        max-width: 100%; }

        .row-cols-1 > * {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%; }

        .row-cols-2 > * {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%; }

        .row-cols-3 > * {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }

        .row-cols-4 > * {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%; }

        .row-cols-5 > * {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%; }

        .row-cols-6 > * {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66667%;
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }

        .col-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%; }

        .col-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.33333%;
        flex: 0 0 8.33333%;
        max-width: 8.33333%; }

        .col-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66667%;
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }

        .col-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%; }

        .col-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }

        .col-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66667%;
        flex: 0 0 41.66667%;
        max-width: 41.66667%; }

        .col-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%; }

        .col-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.33333%;
        flex: 0 0 58.33333%;
        max-width: 58.33333%; }

        .col-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.66667%;
        flex: 0 0 66.66667%;
        max-width: 66.66667%; }

        .col-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%; }

        .col-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.33333%;
        flex: 0 0 83.33333%;
        max-width: 83.33333%; }

        .col-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.66667%;
        flex: 0 0 91.66667%;
        max-width: 91.66667%; }

        .col-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%; }

        .order-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1; }

        .order-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13; }

        .order-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0; }

        .order-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1; }

        .order-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2; }

        .order-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3; }

        .order-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4; }

        .order-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5; }

        .order-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6; }

        .order-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7; }

        .order-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8; }

        .order-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9; }

        .order-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10; }

        .order-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11; }

        .order-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12; }

        .offset-1 {
        margin-left: 8.33333%; }

        .offset-2 {
        margin-left: 16.66667%; }

        .offset-3 {
        margin-left: 25%; }

        .offset-4 {
        margin-left: 33.33333%; }

        .offset-5 {
        margin-left: 41.66667%; }

        .offset-6 {
        margin-left: 50%; }

        .offset-7 {
        margin-left: 58.33333%; }

        .offset-8 {
        margin-left: 66.66667%; }

        .offset-9 {
        margin-left: 75%; }

        .offset-10 {
        margin-left: 83.33333%; }

        .offset-11 {
        margin-left: 91.66667%; }

        @media (min-width: 576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            min-width: 0;
            max-width: 100%; }
        .row-cols-sm-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .row-cols-sm-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .row-cols-sm-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .row-cols-sm-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .row-cols-sm-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%; }
        .row-cols-sm-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-sm-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-sm-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-sm-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-sm-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-sm-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-sm-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-sm-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-sm-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-sm-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-sm-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-sm-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-sm-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-sm-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-sm-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-sm-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-sm-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-sm-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-sm-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-sm-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-sm-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-sm-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-sm-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-sm-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-sm-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-sm-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-sm-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-sm-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-sm-0 {
            margin-left: 0; }
        .offset-sm-1 {
            margin-left: 8.33333%; }
        .offset-sm-2 {
            margin-left: 16.66667%; }
        .offset-sm-3 {
            margin-left: 25%; }
        .offset-sm-4 {
            margin-left: 33.33333%; }
        .offset-sm-5 {
            margin-left: 41.66667%; }
        .offset-sm-6 {
            margin-left: 50%; }
        .offset-sm-7 {
            margin-left: 58.33333%; }
        .offset-sm-8 {
            margin-left: 66.66667%; }
        .offset-sm-9 {
            margin-left: 75%; }
        .offset-sm-10 {
            margin-left: 83.33333%; }
        .offset-sm-11 {
            margin-left: 91.66667%; } }

        @media (min-width: 768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            min-width: 0;
            max-width: 100%; }
        .row-cols-md-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .row-cols-md-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .row-cols-md-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .row-cols-md-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .row-cols-md-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%; }
        .row-cols-md-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-md-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-md-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-md-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-md-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-md-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-md-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-md-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-md-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-md-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-md-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-md-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-md-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-md-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-md-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-md-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-md-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-md-0 {
            margin-left: 0; }
        .offset-md-1 {
            margin-left: 8.33333%; }
        .offset-md-2 {
            margin-left: 16.66667%; }
        .offset-md-3 {
            margin-left: 25%; }
        .offset-md-4 {
            margin-left: 33.33333%; }
        .offset-md-5 {
            margin-left: 41.66667%; }
        .offset-md-6 {
            margin-left: 50%; }
        .offset-md-7 {
            margin-left: 58.33333%; }
        .offset-md-8 {
            margin-left: 66.66667%; }
        .offset-md-9 {
            margin-left: 75%; }
        .offset-md-10 {
            margin-left: 83.33333%; }
        .offset-md-11 {
            margin-left: 91.66667%; } }

        @media (min-width: 992px) {
        .col-lg {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            min-width: 0;
            max-width: 100%; }
        .row-cols-lg-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .row-cols-lg-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .row-cols-lg-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .row-cols-lg-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .row-cols-lg-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%; }
        .row-cols-lg-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-lg-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-lg-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-lg-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-lg-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-lg-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-lg-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-lg-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-lg-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-lg-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-lg-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-lg-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-lg-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-lg-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-lg-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-lg-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-lg-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-lg-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-lg-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-lg-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-lg-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-lg-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-lg-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-lg-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-lg-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-lg-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-lg-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-lg-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-lg-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-lg-0 {
            margin-left: 0; }
        .offset-lg-1 {
            margin-left: 8.33333%; }
        .offset-lg-2 {
            margin-left: 16.66667%; }
        .offset-lg-3 {
            margin-left: 25%; }
        .offset-lg-4 {
            margin-left: 33.33333%; }
        .offset-lg-5 {
            margin-left: 41.66667%; }
        .offset-lg-6 {
            margin-left: 50%; }
        .offset-lg-7 {
            margin-left: 58.33333%; }
        .offset-lg-8 {
            margin-left: 66.66667%; }
        .offset-lg-9 {
            margin-left: 75%; }
        .offset-lg-10 {
            margin-left: 83.33333%; }
        .offset-lg-11 {
            margin-left: 91.66667%; } }

        @media (min-width: 1200px) {
        .col-xl {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            min-width: 0;
            max-width: 100%; }
        .row-cols-xl-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .row-cols-xl-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .row-cols-xl-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .row-cols-xl-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .row-cols-xl-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%; }
        .row-cols-xl-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-xl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-xl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-xl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-xl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-xl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-xl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-xl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-xl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-xl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-xl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-xl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-xl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-xl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-xl-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-xl-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-xl-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-xl-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-xl-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-xl-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-xl-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-xl-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-xl-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-xl-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-xl-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-xl-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-xl-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-xl-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-xl-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-xl-0 {
            margin-left: 0; }
        .offset-xl-1 {
            margin-left: 8.33333%; }
        .offset-xl-2 {
            margin-left: 16.66667%; }
        .offset-xl-3 {
            margin-left: 25%; }
        .offset-xl-4 {
            margin-left: 33.33333%; }
        .offset-xl-5 {
            margin-left: 41.66667%; }
        .offset-xl-6 {
            margin-left: 50%; }
        .offset-xl-7 {
            margin-left: 58.33333%; }
        .offset-xl-8 {
            margin-left: 66.66667%; }
        .offset-xl-9 {
            margin-left: 75%; }
        .offset-xl-10 {
            margin-left: 83.33333%; }
        .offset-xl-11 {
            margin-left: 91.66667%; } }

        @media (min-width: 1400px) {
        .col-xxl {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            min-width: 0;
            max-width: 100%; }
        .row-cols-xxl-1 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .row-cols-xxl-2 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .row-cols-xxl-3 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .row-cols-xxl-4 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .row-cols-xxl-5 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%; }
        .row-cols-xxl-6 > * {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-xxl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-xxl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-xxl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-xxl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-xxl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-xxl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-xxl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-xxl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-xxl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-xxl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-xxl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-xxl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-xxl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-xxl-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-xxl-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-xxl-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-xxl-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-xxl-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-xxl-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-xxl-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-xxl-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-xxl-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-xxl-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-xxl-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-xxl-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-xxl-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-xxl-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-xxl-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-xxl-0 {
            margin-left: 0; }
        .offset-xxl-1 {
            margin-left: 8.33333%; }
        .offset-xxl-2 {
            margin-left: 16.66667%; }
        .offset-xxl-3 {
            margin-left: 25%; }
        .offset-xxl-4 {
            margin-left: 33.33333%; }
        .offset-xxl-5 {
            margin-left: 41.66667%; }
        .offset-xxl-6 {
            margin-left: 50%; }
        .offset-xxl-7 {
            margin-left: 58.33333%; }
        .offset-xxl-8 {
            margin-left: 66.66667%; }
        .offset-xxl-9 {
            margin-left: 75%; }
        .offset-xxl-10 {
            margin-left: 83.33333%; }
        .offset-xxl-11 {
            margin-left: 91.66667%; } }

        .bg-white {
        background-color: #ffffff !important; }

        .bg-transparent {
        background-color: transparent !important; }

        .clearfix::after {
        display: block;
        clear: both;
        content: ""; }

        .d-none {
        display: none !important; }

        .d-inline {
        display: inline !important; }

        .d-inline-block {
        display: inline-block !important; }

        .d-block {
        display: block !important; }

        .d-table {
        display: table !important; }

        .d-table-row {
        display: table-row !important; }

        .d-table-cell {
        display: table-cell !important; }

        .d-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important; }

        .d-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important; }

        @media (min-width: 576px) {
        .d-sm-none {
            display: none !important; }
        .d-sm-inline {
            display: inline !important; }
        .d-sm-inline-block {
            display: inline-block !important; }
        .d-sm-block {
            display: block !important; }
        .d-sm-table {
            display: table !important; }
        .d-sm-table-row {
            display: table-row !important; }
        .d-sm-table-cell {
            display: table-cell !important; }
        .d-sm-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-sm-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        @media (min-width: 768px) {
        .d-md-none {
            display: none !important; }
        .d-md-inline {
            display: inline !important; }
        .d-md-inline-block {
            display: inline-block !important; }
        .d-md-block {
            display: block !important; }
        .d-md-table {
            display: table !important; }
        .d-md-table-row {
            display: table-row !important; }
        .d-md-table-cell {
            display: table-cell !important; }
        .d-md-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-md-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        @media (min-width: 992px) {
        .d-lg-none {
            display: none !important; }
        .d-lg-inline {
            display: inline !important; }
        .d-lg-inline-block {
            display: inline-block !important; }
        .d-lg-block {
            display: block !important; }
        .d-lg-table {
            display: table !important; }
        .d-lg-table-row {
            display: table-row !important; }
        .d-lg-table-cell {
            display: table-cell !important; }
        .d-lg-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-lg-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important; }
        .d-xl-inline {
            display: inline !important; }
        .d-xl-inline-block {
            display: inline-block !important; }
        .d-xl-block {
            display: block !important; }
        .d-xl-table {
            display: table !important; }
        .d-xl-table-row {
            display: table-row !important; }
        .d-xl-table-cell {
            display: table-cell !important; }
        .d-xl-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-xl-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        @media (min-width: 1400px) {
        .d-xxl-none {
            display: none !important; }
        .d-xxl-inline {
            display: inline !important; }
        .d-xxl-inline-block {
            display: inline-block !important; }
        .d-xxl-block {
            display: block !important; }
        .d-xxl-table {
            display: table !important; }
        .d-xxl-table-row {
            display: table-row !important; }
        .d-xxl-table-cell {
            display: table-cell !important; }
        .d-xxl-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-xxl-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

        .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important; }

        .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important; }

        .flex-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important; }

        .flex-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important; }

        .flex-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important; }

        .flex-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important; }

        .flex-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important; }

        .flex-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important; }

        .flex-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important; }

        .flex-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important; }

        .flex-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important; }

        .flex-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important; }

        .justify-content-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important; }

        .justify-content-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important; }

        .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important; }

        .justify-content-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important; }

        .justify-content-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important; }

        .align-items-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important; }

        .align-items-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important; }

        .align-items-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important; }

        .align-items-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important; }

        .align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important; }

        .align-content-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important; }

        .align-content-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important; }

        .align-content-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important; }

        .align-content-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important; }

        .align-content-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important; }

        .align-content-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important; }

        .align-self-auto {
        -ms-flex-item-align: auto !important;
        align-self: auto !important; }

        .align-self-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important; }

        .align-self-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important; }

        .align-self-center {
        -ms-flex-item-align: center !important;
        align-self: center !important; }

        .align-self-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important; }

        .align-self-stretch {
        -ms-flex-item-align: stretch !important;
        align-self: stretch !important; }

        @media (min-width: 576px) {
        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-sm-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-sm-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-sm-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-sm-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-sm-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-sm-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-sm-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-sm-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-sm-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-sm-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-sm-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-sm-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-sm-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-sm-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-sm-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-sm-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-sm-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-sm-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-sm-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-sm-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-sm-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-sm-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-sm-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-sm-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-sm-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important; }
        .align-self-sm-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-sm-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-sm-center {
            -ms-flex-item-align: center !important;
            align-self: center !important; }
        .align-self-sm-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-sm-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

        @media (min-width: 768px) {
        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-md-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-md-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-md-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-md-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-md-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-md-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-md-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-md-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-md-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-md-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-md-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-md-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-md-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-md-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-md-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-md-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-md-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-md-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-md-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-md-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-md-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-md-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-md-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-md-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-md-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-md-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-md-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important; }
        .align-self-md-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-md-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-md-center {
            -ms-flex-item-align: center !important;
            align-self: center !important; }
        .align-self-md-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-md-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

        @media (min-width: 992px) {
        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-lg-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-lg-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-lg-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-lg-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-lg-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-lg-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-lg-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-lg-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-lg-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-lg-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-lg-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-lg-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-lg-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-lg-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-lg-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-lg-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-lg-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-lg-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-lg-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-lg-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-lg-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-lg-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-lg-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important; }
        .align-self-lg-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-lg-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-lg-center {
            -ms-flex-item-align: center !important;
            align-self: center !important; }
        .align-self-lg-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-lg-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

        @media (min-width: 1200px) {
        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-xl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-xl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-xl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-xl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-xl-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-xl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-xl-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-xl-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-xl-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-xl-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-xl-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-xl-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-xl-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-xl-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-xl-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-xl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-xl-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-xl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-xl-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-xl-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-xl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-xl-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-xl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-xl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-xl-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-xl-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-xl-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important; }
        .align-self-xl-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-xl-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-xl-center {
            -ms-flex-item-align: center !important;
            align-self: center !important; }
        .align-self-xl-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-xl-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

        @media (min-width: 1400px) {
        .flex-xxl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-xxl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-xxl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-xxl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-xxl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-xxl-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-xxl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-xxl-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-xxl-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-xxl-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-xxl-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-xxl-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-xxl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-xxl-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-xxl-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-xxl-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-xxl-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-xxl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-xxl-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-xxl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-xxl-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-xxl-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-xxl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-xxl-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-xxl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-xxl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-xxl-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-xxl-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-xxl-auto {
            -ms-flex-item-align: auto !important;
            align-self: auto !important; }
        .align-self-xxl-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-xxl-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-xxl-center {
            -ms-flex-item-align: center !important;
            align-self: center !important; }
        .align-self-xxl-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-xxl-stretch {
            -ms-flex-item-align: stretch !important;
            align-self: stretch !important; } }

        .flex-root {
        -webkit-box-flex: 1;
        flex: 1;
        -ms-flex: 1 0 0px; }

        .flex-column-auto {
        -webkit-box-flex: 0;
        -ms-flex: none;
        flex: none; }

        .flex-column-fluid {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto; }

        .flex-row-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto; }

        .flex-row-fluid {
        -webkit-box-flex: 1;
        flex: 1 auto;
        -ms-flex: 1 0 0px;
        min-width: 0; }
        @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
            .flex-row-fluid {
            min-width: none; } }

        .flex-center {
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }

        @media (min-width: 576px) {
        .flex-sm-root {
            -webkit-box-flex: 1;
            flex: 1;
            -ms-flex: 1 0 0px; }
        .flex-sm-column-auto {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none; }
        .flex-sm-column-fluid {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto; }
        .flex-sm-row-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto; }
        .flex-sm-row-fluid {
            -webkit-box-flex: 1;
            flex: 1 auto;
            -ms-flex: 1 0 0px;
            min-width: 0; } }
        @media screen and (min-width: 576px) and (-ms-high-contrast: active), (min-width: 576px) and (-ms-high-contrast: none) {
            .flex-sm-row-fluid {
            min-width: none; } }

        @media (min-width: 576px) {
        .flex-sm-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; } }

        @media (min-width: 768px) {
        .flex-md-root {
            -webkit-box-flex: 1;
            flex: 1;
            -ms-flex: 1 0 0px; }
        .flex-md-column-auto {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none; }
        .flex-md-column-fluid {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto; }
        .flex-md-row-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto; }
        .flex-md-row-fluid {
            -webkit-box-flex: 1;
            flex: 1 auto;
            -ms-flex: 1 0 0px;
            min-width: 0; } }
        @media screen and (min-width: 768px) and (-ms-high-contrast: active), (min-width: 768px) and (-ms-high-contrast: none) {
            .flex-md-row-fluid {
            min-width: none; } }

        @media (min-width: 768px) {
        .flex-md-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; } }

        @media (min-width: 992px) {
        .flex-lg-root {
            -webkit-box-flex: 1;
            flex: 1;
            -ms-flex: 1 0 0px; }
        .flex-lg-column-auto {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none; }
        .flex-lg-column-fluid {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto; }
        .flex-lg-row-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto; }
        .flex-lg-row-fluid {
            -webkit-box-flex: 1;
            flex: 1 auto;
            -ms-flex: 1 0 0px;
            min-width: 0; } }
        @media screen and (min-width: 992px) and (-ms-high-contrast: active), (min-width: 992px) and (-ms-high-contrast: none) {
            .flex-lg-row-fluid {
            min-width: none; } }

        @media (min-width: 992px) {
        .flex-lg-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; } }

        @media (min-width: 1200px) {
        .flex-xl-root {
            -webkit-box-flex: 1;
            flex: 1;
            -ms-flex: 1 0 0px; }
        .flex-xl-column-auto {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none; }
        .flex-xl-column-fluid {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto; }
        .flex-xl-row-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto; }
        .flex-xl-row-fluid {
            -webkit-box-flex: 1;
            flex: 1 auto;
            -ms-flex: 1 0 0px;
            min-width: 0; } }
        @media screen and (min-width: 1200px) and (-ms-high-contrast: active), (min-width: 1200px) and (-ms-high-contrast: none) {
            .flex-xl-row-fluid {
            min-width: none; } }

        @media (min-width: 1200px) {
        .flex-xl-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; } }

        @media (min-width: 1400px) {
        .flex-xxl-root {
            -webkit-box-flex: 1;
            flex: 1;
            -ms-flex: 1 0 0px; }
        .flex-xxl-column-auto {
            -webkit-box-flex: 0;
            -ms-flex: none;
            flex: none; }
        .flex-xxl-column-fluid {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto; }
        .flex-xxl-row-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto; }
        .flex-xxl-row-fluid {
            -webkit-box-flex: 1;
            flex: 1 auto;
            -ms-flex: 1 0 0px;
            min-width: 0; } }
        @media screen and (min-width: 1400px) and (-ms-high-contrast: active), (min-width: 1400px) and (-ms-high-contrast: none) {
            .flex-xxl-row-fluid {
            min-width: none; } }

        @media (min-width: 1400px) {
        .flex-xxl-center {
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center; } }


        .h-auto {
        height: auto !important; }

        .w-auto {
        width: auto !important; }

        .w-auto {
        width: auto !important; }

        .h-auto {
        height: auto !important; }

        .min-w-auto {
        min-width: auto !important; }

        .min-h-auto {
        min-height: auto !important; }

        .max-h-auto {
        max-height: auto !important; }

        .max-w-auto {
        max-width: auto !important; }

        .w-1px {
        width: 1px !important; }

        .h-1px {
        height: 1px !important; }

        .min-w-1px {
        min-width: 1px !important; }

        .min-h-1px {
        min-height: 1px !important; }

        .max-h-1px {
        max-height: 1px !important; }

        .max-w-1px {
        max-width: 1px !important; }

        .w-2px {
        width: 2px !important; }

        .h-2px {
        height: 2px !important; }

        .min-w-2px {
        min-width: 2px !important; }

        .min-h-2px {
        min-height: 2px !important; }

        .max-h-2px {
        max-height: 2px !important; }

        .max-w-2px {
        max-width: 2px !important; }

        .w-3px {
        width: 3px !important; }

        .h-3px {
        height: 3px !important; }

        .min-w-3px {
        min-width: 3px !important; }

        .min-h-3px {
        min-height: 3px !important; }

        .max-h-3px {
        max-height: 3px !important; }

        .max-w-3px {
        max-width: 3px !important; }

        .w-4px {
        width: 4px !important; }

        .h-4px {
        height: 4px !important; }

        .min-w-4px {
        min-width: 4px !important; }

        .min-h-4px {
        min-height: 4px !important; }

        .max-h-4px {
        max-height: 4px !important; }

        .max-w-4px {
        max-width: 4px !important; }

        .w-5px {
        width: 5px !important; }

        .h-5px {
        height: 5px !important; }

        .min-w-5px {
        min-width: 5px !important; }

        .min-h-5px {
        min-height: 5px !important; }

        .max-h-5px {
        max-height: 5px !important; }

        .max-w-5px {
        max-width: 5px !important; }

        .w-10px {
        width: 10px !important; }

        .h-10px {
        height: 10px !important; }

        .min-w-10px {
        min-width: 10px !important; }

        .min-h-10px {
        min-height: 10px !important; }

        .max-h-10px {
        max-height: 10px !important; }

        .max-w-10px {
        max-width: 10px !important; }

        .w-15px {
        width: 15px !important; }

        .h-15px {
        height: 15px !important; }

        .min-w-15px {
        min-width: 15px !important; }

        .min-h-15px {
        min-height: 15px !important; }

        .max-h-15px {
        max-height: 15px !important; }

        .max-w-15px {
        max-width: 15px !important; }

        .w-20px {
        width: 20px !important; }

        .h-20px {
        height: 20px !important; }

        .min-w-20px {
        min-width: 20px !important; }

        .min-h-20px {
        min-height: 20px !important; }

        .max-h-20px {
        max-height: 20px !important; }

        .max-w-20px {
        max-width: 20px !important; }

        .w-25px {
        width: 25px !important; }

        .h-25px {
        height: 25px !important; }

        .min-w-25px {
        min-width: 25px !important; }

        .min-h-25px {
        min-height: 25px !important; }

        .max-h-25px {
        max-height: 25px !important; }

        .max-w-25px {
        max-width: 25px !important; }

        .w-30px {
        width: 30px !important; }

        .h-30px {
        height: 30px !important; }

        .min-w-30px {
        min-width: 30px !important; }

        .min-h-30px {
        min-height: 30px !important; }

        .max-h-30px {
        max-height: 30px !important; }

        .max-w-30px {
        max-width: 30px !important; }

        .w-35px {
        width: 35px !important; }

        .h-35px {
        height: 35px !important; }

        .min-w-35px {
        min-width: 35px !important; }

        .min-h-35px {
        min-height: 35px !important; }

        .max-h-35px {
        max-height: 35px !important; }

        .max-w-35px {
        max-width: 35px !important; }

        .w-40px {
        width: 40px !important; }

        .h-40px {
        height: 40px !important; }

        .min-w-40px {
        min-width: 40px !important; }

        .min-h-40px {
        min-height: 40px !important; }

        .max-h-40px {
        max-height: 40px !important; }

        .max-w-40px {
        max-width: 40px !important; }

        .w-45px {
        width: 45px !important; }

        .h-45px {
        height: 45px !important; }

        .min-w-45px {
        min-width: 45px !important; }

        .min-h-45px {
        min-height: 45px !important; }

        .max-h-45px {
        max-height: 45px !important; }

        .max-w-45px {
        max-width: 45px !important; }

        .w-50px {
        width: 50px !important; }

        .h-50px {
        height: 50px !important; }

        .min-w-50px {
        min-width: 50px !important; }

        .min-h-50px {
        min-height: 50px !important; }

        .max-h-50px {
        max-height: 50px !important; }

        .max-w-50px {
        max-width: 50px !important; }

        .w-55px {
        width: 55px !important; }

        .h-55px {
        height: 55px !important; }

        .min-w-55px {
        min-width: 55px !important; }

        .min-h-55px {
        min-height: 55px !important; }

        .max-h-55px {
        max-height: 55px !important; }

        .max-w-55px {
        max-width: 55px !important; }

        .w-60px {
        width: 60px !important; }

        .h-60px {
        height: 60px !important; }

        .min-w-60px {
        min-width: 60px !important; }

        .min-h-60px {
        min-height: 60px !important; }

        .max-h-60px {
        max-height: 60px !important; }

        .max-w-60px {
        max-width: 60px !important; }

        .w-65px {
        width: 65px !important; }

        .h-65px {
        height: 65px !important; }

        .min-w-65px {
        min-width: 65px !important; }

        .min-h-65px {
        min-height: 65px !important; }

        .max-h-65px {
        max-height: 65px !important; }

        .max-w-65px {
        max-width: 65px !important; }

        .w-70px {
        width: 70px !important; }

        .h-70px {
        height: 70px !important; }

        .min-w-70px {
        min-width: 70px !important; }

        .min-h-70px {
        min-height: 70px !important; }

        .max-h-70px {
        max-height: 70px !important; }

        .max-w-70px {
        max-width: 70px !important; }

        .w-75px {
        width: 75px !important; }

        .h-75px {
        height: 75px !important; }

        .min-w-75px {
        min-width: 75px !important; }

        .min-h-75px {
        min-height: 75px !important; }

        .max-h-75px {
        max-height: 75px !important; }

        .max-w-75px {
        max-width: 75px !important; }

        .w-80px {
        width: 80px !important; }

        .h-80px {
        height: 80px !important; }

        .min-w-80px {
        min-width: 80px !important; }

        .min-h-80px {
        min-height: 80px !important; }

        .max-h-80px {
        max-height: 80px !important; }

        .max-w-80px {
        max-width: 80px !important; }

        .w-85px {
        width: 85px !important; }

        .h-85px {
        height: 85px !important; }

        .min-w-85px {
        min-width: 85px !important; }

        .min-h-85px {
        min-height: 85px !important; }

        .max-h-85px {
        max-height: 85px !important; }

        .max-w-85px {
        max-width: 85px !important; }

        .w-90px {
        width: 90px !important; }

        .h-90px {
        height: 90px !important; }

        .min-w-90px {
        min-width: 90px !important; }

        .min-h-90px {
        min-height: 90px !important; }

        .max-h-90px {
        max-height: 90px !important; }

        .max-w-90px {
        max-width: 90px !important; }

        .w-95px {
        width: 95px !important; }

        .h-95px {
        height: 95px !important; }

        .min-w-95px {
        min-width: 95px !important; }

        .min-h-95px {
        min-height: 95px !important; }

        .max-h-95px {
        max-height: 95px !important; }

        .max-w-95px {
        max-width: 95px !important; }

        .w-100px {
        width: 100px !important; }

        .h-100px {
        height: 100px !important; }

        .min-w-100px {
        min-width: 100px !important; }

        .min-h-100px {
        min-height: 100px !important; }

        .max-h-100px {
        max-height: 100px !important; }

        .max-w-100px {
        max-width: 100px !important; }

        .w-105px {
        width: 105px !important; }

        .h-105px {
        height: 105px !important; }

        .min-w-105px {
        min-width: 105px !important; }

        .min-h-105px {
        min-height: 105px !important; }

        .max-h-105px {
        max-height: 105px !important; }

        .max-w-105px {
        max-width: 105px !important; }

        .w-110px {
        width: 110px !important; }

        .h-110px {
        height: 110px !important; }

        .min-w-110px {
        min-width: 110px !important; }

        .min-h-110px {
        min-height: 110px !important; }

        .max-h-110px {
        max-height: 110px !important; }

        .max-w-110px {
        max-width: 110px !important; }

        .w-115px {
        width: 115px !important; }

        .h-115px {
        height: 115px !important; }

        .min-w-115px {
        min-width: 115px !important; }

        .min-h-115px {
        min-height: 115px !important; }

        .max-h-115px {
        max-height: 115px !important; }

        .max-w-115px {
        max-width: 115px !important; }

        .w-120px {
        width: 120px !important; }

        .h-120px {
        height: 120px !important; }

        .min-w-120px {
        min-width: 120px !important; }

        .min-h-120px {
        min-height: 120px !important; }

        .max-h-120px {
        max-height: 120px !important; }

        .max-w-120px {
        max-width: 120px !important; }

        .w-125px {
        width: 125px !important; }

        .h-125px {
        height: 125px !important; }

        .min-w-125px {
        min-width: 125px !important; }

        .min-h-125px {
        min-height: 125px !important; }

        .max-h-125px {
        max-height: 125px !important; }

        .max-w-125px {
        max-width: 125px !important; }

        .w-130px {
        width: 130px !important; }

        .h-130px {
        height: 130px !important; }

        .min-w-130px {
        min-width: 130px !important; }

        .min-h-130px {
        min-height: 130px !important; }

        .max-h-130px {
        max-height: 130px !important; }

        .max-w-130px {
        max-width: 130px !important; }

        .w-135px {
        width: 135px !important; }

        .h-135px {
        height: 135px !important; }

        .min-w-135px {
        min-width: 135px !important; }

        .min-h-135px {
        min-height: 135px !important; }

        .max-h-135px {
        max-height: 135px !important; }

        .max-w-135px {
        max-width: 135px !important; }

        .w-140px {
        width: 140px !important; }

        .h-140px {
        height: 140px !important; }

        .min-w-140px {
        min-width: 140px !important; }

        .min-h-140px {
        min-height: 140px !important; }

        .max-h-140px {
        max-height: 140px !important; }

        .max-w-140px {
        max-width: 140px !important; }

        .w-145px {
        width: 145px !important; }

        .h-145px {
        height: 145px !important; }

        .min-w-145px {
        min-width: 145px !important; }

        .min-h-145px {
        min-height: 145px !important; }

        .max-h-145px {
        max-height: 145px !important; }

        .max-w-145px {
        max-width: 145px !important; }

        .w-150px {
        width: 150px !important; }

        .h-150px {
        height: 150px !important; }

        .min-w-150px {
        min-width: 150px !important; }

        .min-h-150px {
        min-height: 150px !important; }

        .max-h-150px {
        max-height: 150px !important; }

        .max-w-150px {
        max-width: 150px !important; }

        .w-175px {
        width: 175px !important; }

        .h-175px {
        height: 175px !important; }

        .min-w-175px {
        min-width: 175px !important; }

        .min-h-175px {
        min-height: 175px !important; }

        .max-h-175px {
        max-height: 175px !important; }

        .max-w-175px {
        max-width: 175px !important; }

        .w-180px {
        width: 180px !important; }

        .h-180px {
        height: 180px !important; }

        .min-w-180px {
        min-width: 180px !important; }

        .min-h-180px {
        min-height: 180px !important; }

        .max-h-180px {
        max-height: 180px !important; }

        .max-w-180px {
        max-width: 180px !important; }

        .w-200px {
        width: 200px !important; }

        .h-200px {
        height: 200px !important; }

        .min-w-200px {
        min-width: 200px !important; }

        .min-h-200px {
        min-height: 200px !important; }

        .max-h-200px {
        max-height: 200px !important; }

        .max-w-200px {
        max-width: 200px !important; }

        .w-225px {
        width: 225px !important; }

        .h-225px {
        height: 225px !important; }

        .min-w-225px {
        min-width: 225px !important; }

        .min-h-225px {
        min-height: 225px !important; }

        .max-h-225px {
        max-height: 225px !important; }

        .max-w-225px {
        max-width: 225px !important; }

        .w-250px {
        width: 250px !important; }

        .h-250px {
        height: 250px !important; }

        .min-w-250px {
        min-width: 250px !important; }

        .min-h-250px {
        min-height: 250px !important; }

        .max-h-250px {
        max-height: 250px !important; }

        .max-w-250px {
        max-width: 250px !important; }

        .w-255px {
        width: 255px !important; }

        .h-255px {
        height: 255px !important; }

        .min-w-255px {
        min-width: 255px !important; }

        .min-h-255px {
        min-height: 255px !important; }

        .max-h-255px {
        max-height: 255px !important; }

        .max-w-255px {
        max-width: 255px !important; }

        .w-260px {
        width: 260px !important; }

        .h-260px {
        height: 260px !important; }

        .min-w-260px {
        min-width: 260px !important; }

        .min-h-260px {
        min-height: 260px !important; }

        .max-h-260px {
        max-height: 260px !important; }

        .max-w-260px {
        max-width: 260px !important; }

        .w-265px {
        width: 265px !important; }

        .h-265px {
        height: 265px !important; }

        .min-w-265px {
        min-width: 265px !important; }

        .min-h-265px {
        min-height: 265px !important; }

        .max-h-265px {
        max-height: 265px !important; }

        .max-w-265px {
        max-width: 265px !important; }

        .w-275px {
        width: 275px !important; }

        .h-275px {
        height: 275px !important; }

        .min-w-275px {
        min-width: 275px !important; }

        .min-h-275px {
        min-height: 275px !important; }

        .max-h-275px {
        max-height: 275px !important; }

        .max-w-275px {
        max-width: 275px !important; }

        .w-295px {
        width: 295px !important; }

        .h-295px {
        height: 295px !important; }

        .min-w-295px {
        min-width: 295px !important; }

        .min-h-295px {
        min-height: 295px !important; }

        .max-h-295px {
        max-height: 295px !important; }

        .max-w-295px {
        max-width: 295px !important; }

        .w-300px {
        width: 300px !important; }

        .h-300px {
        height: 300px !important; }

        .min-w-300px {
        min-width: 300px !important; }

        .min-h-300px {
        min-height: 300px !important; }

        .max-h-300px {
        max-height: 300px !important; }

        .max-w-300px {
        max-width: 300px !important; }

        .w-325px {
        width: 325px !important; }

        .h-325px {
        height: 325px !important; }

        .min-w-325px {
        min-width: 325px !important; }

        .min-h-325px {
        min-height: 325px !important; }

        .max-h-325px {
        max-height: 325px !important; }

        .max-w-325px {
        max-width: 325px !important; }

        .w-350px {
        width: 350px !important; }

        .h-350px {
        height: 350px !important; }

        .min-w-350px {
        min-width: 350px !important; }

        .min-h-350px {
        min-height: 350px !important; }

        .max-h-350px {
        max-height: 350px !important; }

        .max-w-350px {
        max-width: 350px !important; }

        .w-375px {
        width: 375px !important; }

        .h-375px {
        height: 375px !important; }

        .min-w-375px {
        min-width: 375px !important; }

        .min-h-375px {
        min-height: 375px !important; }

        .max-h-375px {
        max-height: 375px !important; }

        .max-w-375px {
        max-width: 375px !important; }

        .w-400px {
        width: 400px !important; }

        .h-400px {
        height: 400px !important; }

        .min-w-400px {
        min-width: 400px !important; }

        .min-h-400px {
        min-height: 400px !important; }

        .max-h-400px {
        max-height: 400px !important; }

        .max-w-400px {
        max-width: 400px !important; }

        .w-425px {
        width: 425px !important; }

        .h-425px {
        height: 425px !important; }

        .min-w-425px {
        min-width: 425px !important; }

        .min-h-425px {
        min-height: 425px !important; }

        .max-h-425px {
        max-height: 425px !important; }

        .max-w-425px {
        max-width: 425px !important; }

        .w-450px {
        width: 450px !important; }

        .h-450px {
        height: 450px !important; }

        .min-w-450px {
        min-width: 450px !important; }

        .min-h-450px {
        min-height: 450px !important; }

        .max-h-450px {
        max-height: 450px !important; }

        .max-w-450px {
        max-width: 450px !important; }

        .w-475px {
        width: 475px !important; }

        .h-475px {
        height: 475px !important; }

        .min-w-475px {
        min-width: 475px !important; }

        .min-h-475px {
        min-height: 475px !important; }

        .max-h-475px {
        max-height: 475px !important; }

        .max-w-475px {
        max-width: 475px !important; }

        .w-500px {
        width: 500px !important; }

        .h-500px {
        height: 500px !important; }

        .min-w-500px {
        min-width: 500px !important; }

        .min-h-500px {
        min-height: 500px !important; }

        .max-h-500px {
        max-height: 500px !important; }

        .max-w-500px {
        max-width: 500px !important; }

        .w-550px {
        width: 550px !important; }

        .h-550px {
        height: 550px !important; }

        .min-w-550px {
        min-width: 550px !important; }

        .min-h-550px {
        min-height: 550px !important; }

        .max-h-550px {
        max-height: 550px !important; }

        .max-w-550px {
        max-width: 550px !important; }

        .w-600px {
        width: 600px !important; }

        .h-600px {
        height: 600px !important; }

        .min-w-600px {
        min-width: 600px !important; }

        .min-h-600px {
        min-height: 600px !important; }

        .max-h-600px {
        max-height: 600px !important; }

        .max-w-600px {
        max-width: 600px !important; }

        .w-650px {
        width: 650px !important; }

        .h-650px {
        height: 650px !important; }

        .min-w-650px {
        min-width: 650px !important; }

        .min-h-650px {
        min-height: 650px !important; }

        .max-h-650px {
        max-height: 650px !important; }

        .max-w-650px {
        max-width: 650px !important; }

        .w-700px {
        width: 700px !important; }

        .h-700px {
        height: 700px !important; }

        .min-w-700px {
        min-width: 700px !important; }

        .min-h-700px {
        min-height: 700px !important; }

        .max-h-700px {
        max-height: 700px !important; }

        .max-w-700px {
        max-width: 700px !important; }

        .w-750px {
        width: 750px !important; }

        .h-750px {
        height: 750px !important; }

        .min-w-750px {
        min-width: 750px !important; }

        .min-h-750px {
        min-height: 750px !important; }

        .max-h-750px {
        max-height: 750px !important; }

        .max-w-750px {
        max-width: 750px !important; }

        .w-800px {
        width: 800px !important; }

        .h-800px {
        height: 800px !important; }

        .min-w-800px {
        min-width: 800px !important; }

        .min-h-800px {
        min-height: 800px !important; }

        .max-h-800px {
        max-height: 800px !important; }

        .max-w-800px {
        max-width: 800px !important; }

        .w-850px {
        width: 850px !important; }

        .h-850px {
        height: 850px !important; }

        .min-w-850px {
        min-width: 850px !important; }

        .min-h-850px {
        min-height: 850px !important; }

        .max-h-850px {
        max-height: 850px !important; }

        .max-w-850px {
        max-width: 850px !important; }

        .w-900px {
        width: 900px !important; }

        .h-900px {
        height: 900px !important; }

        .min-w-900px {
        min-width: 900px !important; }

        .min-h-900px {
        min-height: 900px !important; }

        .max-h-900px {
        max-height: 900px !important; }

        .max-w-900px {
        max-width: 900px !important; }

        .w-950px {
        width: 950px !important; }

        .h-950px {
        height: 950px !important; }

        .min-w-950px {
        min-width: 950px !important; }

        .min-h-950px {
        min-height: 950px !important; }

        .max-h-950px {
        max-height: 950px !important; }

        .max-w-950px {
        max-width: 950px !important; }

        .w-1000px {
        width: 1000px !important; }

        .h-1000px {
        height: 1000px !important; }

        .min-w-1000px {
        min-width: 1000px !important; }

        .min-h-1000px {
        min-height: 1000px !important; }

        .max-h-1000px {
        max-height: 1000px !important; }

        .max-w-1000px {
        max-width: 1000px !important; }

        @media (min-width: 576px) {
        .w-sm-auto {
            width: auto !important; }
        .h-sm-auto {
            height: auto !important; }
        .min-w-sm-auto {
            min-width: auto !important; }
        .min-h-sm-auto {
            min-height: auto !important; }
        .max-h-sm-auto {
            max-height: auto !important; }
        .max-w-sm-auto {
            max-width: auto !important; }
        .w-sm-1px {
            width: 1px !important; }
        .h-sm-1px {
            height: 1px !important; }
        .min-w-sm-1px {
            min-width: 1px !important; }
        .min-h-sm-1px {
            min-height: 1px !important; }
        .max-h-sm-1px {
            max-height: 1px !important; }
        .max-w-sm-1px {
            max-width: 1px !important; }
        .w-sm-2px {
            width: 2px !important; }
        .h-sm-2px {
            height: 2px !important; }
        .min-w-sm-2px {
            min-width: 2px !important; }
        .min-h-sm-2px {
            min-height: 2px !important; }
        .max-h-sm-2px {
            max-height: 2px !important; }
        .max-w-sm-2px {
            max-width: 2px !important; }
        .w-sm-3px {
            width: 3px !important; }
        .h-sm-3px {
            height: 3px !important; }
        .min-w-sm-3px {
            min-width: 3px !important; }
        .min-h-sm-3px {
            min-height: 3px !important; }
        .max-h-sm-3px {
            max-height: 3px !important; }
        .max-w-sm-3px {
            max-width: 3px !important; }
        .w-sm-4px {
            width: 4px !important; }
        .h-sm-4px {
            height: 4px !important; }
        .min-w-sm-4px {
            min-width: 4px !important; }
        .min-h-sm-4px {
            min-height: 4px !important; }
        .max-h-sm-4px {
            max-height: 4px !important; }
        .max-w-sm-4px {
            max-width: 4px !important; }
        .w-sm-5px {
            width: 5px !important; }
        .h-sm-5px {
            height: 5px !important; }
        .min-w-sm-5px {
            min-width: 5px !important; }
        .min-h-sm-5px {
            min-height: 5px !important; }
        .max-h-sm-5px {
            max-height: 5px !important; }
        .max-w-sm-5px {
            max-width: 5px !important; }
        .w-sm-10px {
            width: 10px !important; }
        .h-sm-10px {
            height: 10px !important; }
        .min-w-sm-10px {
            min-width: 10px !important; }
        .min-h-sm-10px {
            min-height: 10px !important; }
        .max-h-sm-10px {
            max-height: 10px !important; }
        .max-w-sm-10px {
            max-width: 10px !important; }
        .w-sm-15px {
            width: 15px !important; }
        .h-sm-15px {
            height: 15px !important; }
        .min-w-sm-15px {
            min-width: 15px !important; }
        .min-h-sm-15px {
            min-height: 15px !important; }
        .max-h-sm-15px {
            max-height: 15px !important; }
        .max-w-sm-15px {
            max-width: 15px !important; }
        .w-sm-20px {
            width: 20px !important; }
        .h-sm-20px {
            height: 20px !important; }
        .min-w-sm-20px {
            min-width: 20px !important; }
        .min-h-sm-20px {
            min-height: 20px !important; }
        .max-h-sm-20px {
            max-height: 20px !important; }
        .max-w-sm-20px {
            max-width: 20px !important; }
        .w-sm-25px {
            width: 25px !important; }
        .h-sm-25px {
            height: 25px !important; }
        .min-w-sm-25px {
            min-width: 25px !important; }
        .min-h-sm-25px {
            min-height: 25px !important; }
        .max-h-sm-25px {
            max-height: 25px !important; }
        .max-w-sm-25px {
            max-width: 25px !important; }
        .w-sm-30px {
            width: 30px !important; }
        .h-sm-30px {
            height: 30px !important; }
        .min-w-sm-30px {
            min-width: 30px !important; }
        .min-h-sm-30px {
            min-height: 30px !important; }
        .max-h-sm-30px {
            max-height: 30px !important; }
        .max-w-sm-30px {
            max-width: 30px !important; }
        .w-sm-35px {
            width: 35px !important; }
        .h-sm-35px {
            height: 35px !important; }
        .min-w-sm-35px {
            min-width: 35px !important; }
        .min-h-sm-35px {
            min-height: 35px !important; }
        .max-h-sm-35px {
            max-height: 35px !important; }
        .max-w-sm-35px {
            max-width: 35px !important; }
        .w-sm-40px {
            width: 40px !important; }
        .h-sm-40px {
            height: 40px !important; }
        .min-w-sm-40px {
            min-width: 40px !important; }
        .min-h-sm-40px {
            min-height: 40px !important; }
        .max-h-sm-40px {
            max-height: 40px !important; }
        .max-w-sm-40px {
            max-width: 40px !important; }
        .w-sm-45px {
            width: 45px !important; }
        .h-sm-45px {
            height: 45px !important; }
        .min-w-sm-45px {
            min-width: 45px !important; }
        .min-h-sm-45px {
            min-height: 45px !important; }
        .max-h-sm-45px {
            max-height: 45px !important; }
        .max-w-sm-45px {
            max-width: 45px !important; }
        .w-sm-50px {
            width: 50px !important; }
        .h-sm-50px {
            height: 50px !important; }
        .min-w-sm-50px {
            min-width: 50px !important; }
        .min-h-sm-50px {
            min-height: 50px !important; }
        .max-h-sm-50px {
            max-height: 50px !important; }
        .max-w-sm-50px {
            max-width: 50px !important; }
        .w-sm-55px {
            width: 55px !important; }
        .h-sm-55px {
            height: 55px !important; }
        .min-w-sm-55px {
            min-width: 55px !important; }
        .min-h-sm-55px {
            min-height: 55px !important; }
        .max-h-sm-55px {
            max-height: 55px !important; }
        .max-w-sm-55px {
            max-width: 55px !important; }
        .w-sm-60px {
            width: 60px !important; }
        .h-sm-60px {
            height: 60px !important; }
        .min-w-sm-60px {
            min-width: 60px !important; }
        .min-h-sm-60px {
            min-height: 60px !important; }
        .max-h-sm-60px {
            max-height: 60px !important; }
        .max-w-sm-60px {
            max-width: 60px !important; }
        .w-sm-65px {
            width: 65px !important; }
        .h-sm-65px {
            height: 65px !important; }
        .min-w-sm-65px {
            min-width: 65px !important; }
        .min-h-sm-65px {
            min-height: 65px !important; }
        .max-h-sm-65px {
            max-height: 65px !important; }
        .max-w-sm-65px {
            max-width: 65px !important; }
        .w-sm-70px {
            width: 70px !important; }
        .h-sm-70px {
            height: 70px !important; }
        .min-w-sm-70px {
            min-width: 70px !important; }
        .min-h-sm-70px {
            min-height: 70px !important; }
        .max-h-sm-70px {
            max-height: 70px !important; }
        .max-w-sm-70px {
            max-width: 70px !important; }
        .w-sm-75px {
            width: 75px !important; }
        .h-sm-75px {
            height: 75px !important; }
        .min-w-sm-75px {
            min-width: 75px !important; }
        .min-h-sm-75px {
            min-height: 75px !important; }
        .max-h-sm-75px {
            max-height: 75px !important; }
        .max-w-sm-75px {
            max-width: 75px !important; }
        .w-sm-80px {
            width: 80px !important; }
        .h-sm-80px {
            height: 80px !important; }
        .min-w-sm-80px {
            min-width: 80px !important; }
        .min-h-sm-80px {
            min-height: 80px !important; }
        .max-h-sm-80px {
            max-height: 80px !important; }
        .max-w-sm-80px {
            max-width: 80px !important; }
        .w-sm-85px {
            width: 85px !important; }
        .h-sm-85px {
            height: 85px !important; }
        .min-w-sm-85px {
            min-width: 85px !important; }
        .min-h-sm-85px {
            min-height: 85px !important; }
        .max-h-sm-85px {
            max-height: 85px !important; }
        .max-w-sm-85px {
            max-width: 85px !important; }
        .w-sm-90px {
            width: 90px !important; }
        .h-sm-90px {
            height: 90px !important; }
        .min-w-sm-90px {
            min-width: 90px !important; }
        .min-h-sm-90px {
            min-height: 90px !important; }
        .max-h-sm-90px {
            max-height: 90px !important; }
        .max-w-sm-90px {
            max-width: 90px !important; }
        .w-sm-95px {
            width: 95px !important; }
        .h-sm-95px {
            height: 95px !important; }
        .min-w-sm-95px {
            min-width: 95px !important; }
        .min-h-sm-95px {
            min-height: 95px !important; }
        .max-h-sm-95px {
            max-height: 95px !important; }
        .max-w-sm-95px {
            max-width: 95px !important; }
        .w-sm-100px {
            width: 100px !important; }
        .h-sm-100px {
            height: 100px !important; }
        .min-w-sm-100px {
            min-width: 100px !important; }
        .min-h-sm-100px {
            min-height: 100px !important; }
        .max-h-sm-100px {
            max-height: 100px !important; }
        .max-w-sm-100px {
            max-width: 100px !important; }
        .w-sm-105px {
            width: 105px !important; }
        .h-sm-105px {
            height: 105px !important; }
        .min-w-sm-105px {
            min-width: 105px !important; }
        .min-h-sm-105px {
            min-height: 105px !important; }
        .max-h-sm-105px {
            max-height: 105px !important; }
        .max-w-sm-105px {
            max-width: 105px !important; }
        .w-sm-110px {
            width: 110px !important; }
        .h-sm-110px {
            height: 110px !important; }
        .min-w-sm-110px {
            min-width: 110px !important; }
        .min-h-sm-110px {
            min-height: 110px !important; }
        .max-h-sm-110px {
            max-height: 110px !important; }
        .max-w-sm-110px {
            max-width: 110px !important; }
        .w-sm-115px {
            width: 115px !important; }
        .h-sm-115px {
            height: 115px !important; }
        .min-w-sm-115px {
            min-width: 115px !important; }
        .min-h-sm-115px {
            min-height: 115px !important; }
        .max-h-sm-115px {
            max-height: 115px !important; }
        .max-w-sm-115px {
            max-width: 115px !important; }
        .w-sm-120px {
            width: 120px !important; }
        .h-sm-120px {
            height: 120px !important; }
        .min-w-sm-120px {
            min-width: 120px !important; }
        .min-h-sm-120px {
            min-height: 120px !important; }
        .max-h-sm-120px {
            max-height: 120px !important; }
        .max-w-sm-120px {
            max-width: 120px !important; }
        .w-sm-125px {
            width: 125px !important; }
        .h-sm-125px {
            height: 125px !important; }
        .min-w-sm-125px {
            min-width: 125px !important; }
        .min-h-sm-125px {
            min-height: 125px !important; }
        .max-h-sm-125px {
            max-height: 125px !important; }
        .max-w-sm-125px {
            max-width: 125px !important; }
        .w-sm-130px {
            width: 130px !important; }
        .h-sm-130px {
            height: 130px !important; }
        .min-w-sm-130px {
            min-width: 130px !important; }
        .min-h-sm-130px {
            min-height: 130px !important; }
        .max-h-sm-130px {
            max-height: 130px !important; }
        .max-w-sm-130px {
            max-width: 130px !important; }
        .w-sm-135px {
            width: 135px !important; }
        .h-sm-135px {
            height: 135px !important; }
        .min-w-sm-135px {
            min-width: 135px !important; }
        .min-h-sm-135px {
            min-height: 135px !important; }
        .max-h-sm-135px {
            max-height: 135px !important; }
        .max-w-sm-135px {
            max-width: 135px !important; }
        .w-sm-140px {
            width: 140px !important; }
        .h-sm-140px {
            height: 140px !important; }
        .min-w-sm-140px {
            min-width: 140px !important; }
        .min-h-sm-140px {
            min-height: 140px !important; }
        .max-h-sm-140px {
            max-height: 140px !important; }
        .max-w-sm-140px {
            max-width: 140px !important; }
        .w-sm-145px {
            width: 145px !important; }
        .h-sm-145px {
            height: 145px !important; }
        .min-w-sm-145px {
            min-width: 145px !important; }
        .min-h-sm-145px {
            min-height: 145px !important; }
        .max-h-sm-145px {
            max-height: 145px !important; }
        .max-w-sm-145px {
            max-width: 145px !important; }
        .w-sm-150px {
            width: 150px !important; }
        .h-sm-150px {
            height: 150px !important; }
        .min-w-sm-150px {
            min-width: 150px !important; }
        .min-h-sm-150px {
            min-height: 150px !important; }
        .max-h-sm-150px {
            max-height: 150px !important; }
        .max-w-sm-150px {
            max-width: 150px !important; }
        .w-sm-175px {
            width: 175px !important; }
        .h-sm-175px {
            height: 175px !important; }
        .min-w-sm-175px {
            min-width: 175px !important; }
        .min-h-sm-175px {
            min-height: 175px !important; }
        .max-h-sm-175px {
            max-height: 175px !important; }
        .max-w-sm-175px {
            max-width: 175px !important; }
        .w-sm-180px {
            width: 180px !important; }
        .h-sm-180px {
            height: 180px !important; }
        .min-w-sm-180px {
            min-width: 180px !important; }
        .min-h-sm-180px {
            min-height: 180px !important; }
        .max-h-sm-180px {
            max-height: 180px !important; }
        .max-w-sm-180px {
            max-width: 180px !important; }
        .w-sm-200px {
            width: 200px !important; }
        .h-sm-200px {
            height: 200px !important; }
        .min-w-sm-200px {
            min-width: 200px !important; }
        .min-h-sm-200px {
            min-height: 200px !important; }
        .max-h-sm-200px {
            max-height: 200px !important; }
        .max-w-sm-200px {
            max-width: 200px !important; }
        .w-sm-225px {
            width: 225px !important; }
        .h-sm-225px {
            height: 225px !important; }
        .min-w-sm-225px {
            min-width: 225px !important; }
        .min-h-sm-225px {
            min-height: 225px !important; }
        .max-h-sm-225px {
            max-height: 225px !important; }
        .max-w-sm-225px {
            max-width: 225px !important; }
        .w-sm-250px {
            width: 250px !important; }
        .h-sm-250px {
            height: 250px !important; }
        .min-w-sm-250px {
            min-width: 250px !important; }
        .min-h-sm-250px {
            min-height: 250px !important; }
        .max-h-sm-250px {
            max-height: 250px !important; }
        .max-w-sm-250px {
            max-width: 250px !important; }
        .w-sm-255px {
            width: 255px !important; }
        .h-sm-255px {
            height: 255px !important; }
        .min-w-sm-255px {
            min-width: 255px !important; }
        .min-h-sm-255px {
            min-height: 255px !important; }
        .max-h-sm-255px {
            max-height: 255px !important; }
        .max-w-sm-255px {
            max-width: 255px !important; }
        .w-sm-260px {
            width: 260px !important; }
        .h-sm-260px {
            height: 260px !important; }
        .min-w-sm-260px {
            min-width: 260px !important; }
        .min-h-sm-260px {
            min-height: 260px !important; }
        .max-h-sm-260px {
            max-height: 260px !important; }
        .max-w-sm-260px {
            max-width: 260px !important; }
        .w-sm-265px {
            width: 265px !important; }
        .h-sm-265px {
            height: 265px !important; }
        .min-w-sm-265px {
            min-width: 265px !important; }
        .min-h-sm-265px {
            min-height: 265px !important; }
        .max-h-sm-265px {
            max-height: 265px !important; }
        .max-w-sm-265px {
            max-width: 265px !important; }
        .w-sm-275px {
            width: 275px !important; }
        .h-sm-275px {
            height: 275px !important; }
        .min-w-sm-275px {
            min-width: 275px !important; }
        .min-h-sm-275px {
            min-height: 275px !important; }
        .max-h-sm-275px {
            max-height: 275px !important; }
        .max-w-sm-275px {
            max-width: 275px !important; }
        .w-sm-295px {
            width: 295px !important; }
        .h-sm-295px {
            height: 295px !important; }
        .min-w-sm-295px {
            min-width: 295px !important; }
        .min-h-sm-295px {
            min-height: 295px !important; }
        .max-h-sm-295px {
            max-height: 295px !important; }
        .max-w-sm-295px {
            max-width: 295px !important; }
        .w-sm-300px {
            width: 300px !important; }
        .h-sm-300px {
            height: 300px !important; }
        .min-w-sm-300px {
            min-width: 300px !important; }
        .min-h-sm-300px {
            min-height: 300px !important; }
        .max-h-sm-300px {
            max-height: 300px !important; }
        .max-w-sm-300px {
            max-width: 300px !important; }
        .w-sm-325px {
            width: 325px !important; }
        .h-sm-325px {
            height: 325px !important; }
        .min-w-sm-325px {
            min-width: 325px !important; }
        .min-h-sm-325px {
            min-height: 325px !important; }
        .max-h-sm-325px {
            max-height: 325px !important; }
        .max-w-sm-325px {
            max-width: 325px !important; }
        .w-sm-350px {
            width: 350px !important; }
        .h-sm-350px {
            height: 350px !important; }
        .min-w-sm-350px {
            min-width: 350px !important; }
        .min-h-sm-350px {
            min-height: 350px !important; }
        .max-h-sm-350px {
            max-height: 350px !important; }
        .max-w-sm-350px {
            max-width: 350px !important; }
        .w-sm-375px {
            width: 375px !important; }
        .h-sm-375px {
            height: 375px !important; }
        .min-w-sm-375px {
            min-width: 375px !important; }
        .min-h-sm-375px {
            min-height: 375px !important; }
        .max-h-sm-375px {
            max-height: 375px !important; }
        .max-w-sm-375px {
            max-width: 375px !important; }
        .w-sm-400px {
            width: 400px !important; }
        .h-sm-400px {
            height: 400px !important; }
        .min-w-sm-400px {
            min-width: 400px !important; }
        .min-h-sm-400px {
            min-height: 400px !important; }
        .max-h-sm-400px {
            max-height: 400px !important; }
        .max-w-sm-400px {
            max-width: 400px !important; }
        .w-sm-425px {
            width: 425px !important; }
        .h-sm-425px {
            height: 425px !important; }
        .min-w-sm-425px {
            min-width: 425px !important; }
        .min-h-sm-425px {
            min-height: 425px !important; }
        .max-h-sm-425px {
            max-height: 425px !important; }
        .max-w-sm-425px {
            max-width: 425px !important; }
        .w-sm-450px {
            width: 450px !important; }
        .h-sm-450px {
            height: 450px !important; }
        .min-w-sm-450px {
            min-width: 450px !important; }
        .min-h-sm-450px {
            min-height: 450px !important; }
        .max-h-sm-450px {
            max-height: 450px !important; }
        .max-w-sm-450px {
            max-width: 450px !important; }
        .w-sm-475px {
            width: 475px !important; }
        .h-sm-475px {
            height: 475px !important; }
        .min-w-sm-475px {
            min-width: 475px !important; }
        .min-h-sm-475px {
            min-height: 475px !important; }
        .max-h-sm-475px {
            max-height: 475px !important; }
        .max-w-sm-475px {
            max-width: 475px !important; }
        .w-sm-500px {
            width: 500px !important; }
        .h-sm-500px {
            height: 500px !important; }
        .min-w-sm-500px {
            min-width: 500px !important; }
        .min-h-sm-500px {
            min-height: 500px !important; }
        .max-h-sm-500px {
            max-height: 500px !important; }
        .max-w-sm-500px {
            max-width: 500px !important; }
        .w-sm-550px {
            width: 550px !important; }
        .h-sm-550px {
            height: 550px !important; }
        .min-w-sm-550px {
            min-width: 550px !important; }
        .min-h-sm-550px {
            min-height: 550px !important; }
        .max-h-sm-550px {
            max-height: 550px !important; }
        .max-w-sm-550px {
            max-width: 550px !important; }
        .w-sm-600px {
            width: 600px !important; }
        .h-sm-600px {
            height: 600px !important; }
        .min-w-sm-600px {
            min-width: 600px !important; }
        .min-h-sm-600px {
            min-height: 600px !important; }
        .max-h-sm-600px {
            max-height: 600px !important; }
        .max-w-sm-600px {
            max-width: 600px !important; }
        .w-sm-650px {
            width: 650px !important; }
        .h-sm-650px {
            height: 650px !important; }
        .min-w-sm-650px {
            min-width: 650px !important; }
        .min-h-sm-650px {
            min-height: 650px !important; }
        .max-h-sm-650px {
            max-height: 650px !important; }
        .max-w-sm-650px {
            max-width: 650px !important; }
        .w-sm-700px {
            width: 700px !important; }
        .h-sm-700px {
            height: 700px !important; }
        .min-w-sm-700px {
            min-width: 700px !important; }
        .min-h-sm-700px {
            min-height: 700px !important; }
        .max-h-sm-700px {
            max-height: 700px !important; }
        .max-w-sm-700px {
            max-width: 700px !important; }
        .w-sm-750px {
            width: 750px !important; }
        .h-sm-750px {
            height: 750px !important; }
        .min-w-sm-750px {
            min-width: 750px !important; }
        .min-h-sm-750px {
            min-height: 750px !important; }
        .max-h-sm-750px {
            max-height: 750px !important; }
        .max-w-sm-750px {
            max-width: 750px !important; }
        .w-sm-800px {
            width: 800px !important; }
        .h-sm-800px {
            height: 800px !important; }
        .min-w-sm-800px {
            min-width: 800px !important; }
        .min-h-sm-800px {
            min-height: 800px !important; }
        .max-h-sm-800px {
            max-height: 800px !important; }
        .max-w-sm-800px {
            max-width: 800px !important; }
        .w-sm-850px {
            width: 850px !important; }
        .h-sm-850px {
            height: 850px !important; }
        .min-w-sm-850px {
            min-width: 850px !important; }
        .min-h-sm-850px {
            min-height: 850px !important; }
        .max-h-sm-850px {
            max-height: 850px !important; }
        .max-w-sm-850px {
            max-width: 850px !important; }
        .w-sm-900px {
            width: 900px !important; }
        .h-sm-900px {
            height: 900px !important; }
        .min-w-sm-900px {
            min-width: 900px !important; }
        .min-h-sm-900px {
            min-height: 900px !important; }
        .max-h-sm-900px {
            max-height: 900px !important; }
        .max-w-sm-900px {
            max-width: 900px !important; }
        .w-sm-950px {
            width: 950px !important; }
        .h-sm-950px {
            height: 950px !important; }
        .min-w-sm-950px {
            min-width: 950px !important; }
        .min-h-sm-950px {
            min-height: 950px !important; }
        .max-h-sm-950px {
            max-height: 950px !important; }
        .max-w-sm-950px {
            max-width: 950px !important; }
        .w-sm-1000px {
            width: 1000px !important; }
        .h-sm-1000px {
            height: 1000px !important; }
        .min-w-sm-1000px {
            min-width: 1000px !important; }
        .min-h-sm-1000px {
            min-height: 1000px !important; }
        .max-h-sm-1000px {
            max-height: 1000px !important; }
        .max-w-sm-1000px {
            max-width: 1000px !important; } }

        @media (min-width: 768px) {
        .w-md-auto {
            width: auto !important; }
        .h-md-auto {
            height: auto !important; }
        .min-w-md-auto {
            min-width: auto !important; }
        .min-h-md-auto {
            min-height: auto !important; }
        .max-h-md-auto {
            max-height: auto !important; }
        .max-w-md-auto {
            max-width: auto !important; }
        .w-md-1px {
            width: 1px !important; }
        .h-md-1px {
            height: 1px !important; }
        .min-w-md-1px {
            min-width: 1px !important; }
        .min-h-md-1px {
            min-height: 1px !important; }
        .max-h-md-1px {
            max-height: 1px !important; }
        .max-w-md-1px {
            max-width: 1px !important; }
        .w-md-2px {
            width: 2px !important; }
        .h-md-2px {
            height: 2px !important; }
        .min-w-md-2px {
            min-width: 2px !important; }
        .min-h-md-2px {
            min-height: 2px !important; }
        .max-h-md-2px {
            max-height: 2px !important; }
        .max-w-md-2px {
            max-width: 2px !important; }
        .w-md-3px {
            width: 3px !important; }
        .h-md-3px {
            height: 3px !important; }
        .min-w-md-3px {
            min-width: 3px !important; }
        .min-h-md-3px {
            min-height: 3px !important; }
        .max-h-md-3px {
            max-height: 3px !important; }
        .max-w-md-3px {
            max-width: 3px !important; }
        .w-md-4px {
            width: 4px !important; }
        .h-md-4px {
            height: 4px !important; }
        .min-w-md-4px {
            min-width: 4px !important; }
        .min-h-md-4px {
            min-height: 4px !important; }
        .max-h-md-4px {
            max-height: 4px !important; }
        .max-w-md-4px {
            max-width: 4px !important; }
        .w-md-5px {
            width: 5px !important; }
        .h-md-5px {
            height: 5px !important; }
        .min-w-md-5px {
            min-width: 5px !important; }
        .min-h-md-5px {
            min-height: 5px !important; }
        .max-h-md-5px {
            max-height: 5px !important; }
        .max-w-md-5px {
            max-width: 5px !important; }
        .w-md-10px {
            width: 10px !important; }
        .h-md-10px {
            height: 10px !important; }
        .min-w-md-10px {
            min-width: 10px !important; }
        .min-h-md-10px {
            min-height: 10px !important; }
        .max-h-md-10px {
            max-height: 10px !important; }
        .max-w-md-10px {
            max-width: 10px !important; }
        .w-md-15px {
            width: 15px !important; }
        .h-md-15px {
            height: 15px !important; }
        .min-w-md-15px {
            min-width: 15px !important; }
        .min-h-md-15px {
            min-height: 15px !important; }
        .max-h-md-15px {
            max-height: 15px !important; }
        .max-w-md-15px {
            max-width: 15px !important; }
        .w-md-20px {
            width: 20px !important; }
        .h-md-20px {
            height: 20px !important; }
        .min-w-md-20px {
            min-width: 20px !important; }
        .min-h-md-20px {
            min-height: 20px !important; }
        .max-h-md-20px {
            max-height: 20px !important; }
        .max-w-md-20px {
            max-width: 20px !important; }
        .w-md-25px {
            width: 25px !important; }
        .h-md-25px {
            height: 25px !important; }
        .min-w-md-25px {
            min-width: 25px !important; }
        .min-h-md-25px {
            min-height: 25px !important; }
        .max-h-md-25px {
            max-height: 25px !important; }
        .max-w-md-25px {
            max-width: 25px !important; }
        .w-md-30px {
            width: 30px !important; }
        .h-md-30px {
            height: 30px !important; }
        .min-w-md-30px {
            min-width: 30px !important; }
        .min-h-md-30px {
            min-height: 30px !important; }
        .max-h-md-30px {
            max-height: 30px !important; }
        .max-w-md-30px {
            max-width: 30px !important; }
        .w-md-35px {
            width: 35px !important; }
        .h-md-35px {
            height: 35px !important; }
        .min-w-md-35px {
            min-width: 35px !important; }
        .min-h-md-35px {
            min-height: 35px !important; }
        .max-h-md-35px {
            max-height: 35px !important; }
        .max-w-md-35px {
            max-width: 35px !important; }
        .w-md-40px {
            width: 40px !important; }
        .h-md-40px {
            height: 40px !important; }
        .min-w-md-40px {
            min-width: 40px !important; }
        .min-h-md-40px {
            min-height: 40px !important; }
        .max-h-md-40px {
            max-height: 40px !important; }
        .max-w-md-40px {
            max-width: 40px !important; }
        .w-md-45px {
            width: 45px !important; }
        .h-md-45px {
            height: 45px !important; }
        .min-w-md-45px {
            min-width: 45px !important; }
        .min-h-md-45px {
            min-height: 45px !important; }
        .max-h-md-45px {
            max-height: 45px !important; }
        .max-w-md-45px {
            max-width: 45px !important; }
        .w-md-50px {
            width: 50px !important; }
        .h-md-50px {
            height: 50px !important; }
        .min-w-md-50px {
            min-width: 50px !important; }
        .min-h-md-50px {
            min-height: 50px !important; }
        .max-h-md-50px {
            max-height: 50px !important; }
        .max-w-md-50px {
            max-width: 50px !important; }
        .w-md-55px {
            width: 55px !important; }
        .h-md-55px {
            height: 55px !important; }
        .min-w-md-55px {
            min-width: 55px !important; }
        .min-h-md-55px {
            min-height: 55px !important; }
        .max-h-md-55px {
            max-height: 55px !important; }
        .max-w-md-55px {
            max-width: 55px !important; }
        .w-md-60px {
            width: 60px !important; }
        .h-md-60px {
            height: 60px !important; }
        .min-w-md-60px {
            min-width: 60px !important; }
        .min-h-md-60px {
            min-height: 60px !important; }
        .max-h-md-60px {
            max-height: 60px !important; }
        .max-w-md-60px {
            max-width: 60px !important; }
        .w-md-65px {
            width: 65px !important; }
        .h-md-65px {
            height: 65px !important; }
        .min-w-md-65px {
            min-width: 65px !important; }
        .min-h-md-65px {
            min-height: 65px !important; }
        .max-h-md-65px {
            max-height: 65px !important; }
        .max-w-md-65px {
            max-width: 65px !important; }
        .w-md-70px {
            width: 70px !important; }
        .h-md-70px {
            height: 70px !important; }
        .min-w-md-70px {
            min-width: 70px !important; }
        .min-h-md-70px {
            min-height: 70px !important; }
        .max-h-md-70px {
            max-height: 70px !important; }
        .max-w-md-70px {
            max-width: 70px !important; }
        .w-md-75px {
            width: 75px !important; }
        .h-md-75px {
            height: 75px !important; }
        .min-w-md-75px {
            min-width: 75px !important; }
        .min-h-md-75px {
            min-height: 75px !important; }
        .max-h-md-75px {
            max-height: 75px !important; }
        .max-w-md-75px {
            max-width: 75px !important; }
        .w-md-80px {
            width: 80px !important; }
        .h-md-80px {
            height: 80px !important; }
        .min-w-md-80px {
            min-width: 80px !important; }
        .min-h-md-80px {
            min-height: 80px !important; }
        .max-h-md-80px {
            max-height: 80px !important; }
        .max-w-md-80px {
            max-width: 80px !important; }
        .w-md-85px {
            width: 85px !important; }
        .h-md-85px {
            height: 85px !important; }
        .min-w-md-85px {
            min-width: 85px !important; }
        .min-h-md-85px {
            min-height: 85px !important; }
        .max-h-md-85px {
            max-height: 85px !important; }
        .max-w-md-85px {
            max-width: 85px !important; }
        .w-md-90px {
            width: 90px !important; }
        .h-md-90px {
            height: 90px !important; }
        .min-w-md-90px {
            min-width: 90px !important; }
        .min-h-md-90px {
            min-height: 90px !important; }
        .max-h-md-90px {
            max-height: 90px !important; }
        .max-w-md-90px {
            max-width: 90px !important; }
        .w-md-95px {
            width: 95px !important; }
        .h-md-95px {
            height: 95px !important; }
        .min-w-md-95px {
            min-width: 95px !important; }
        .min-h-md-95px {
            min-height: 95px !important; }
        .max-h-md-95px {
            max-height: 95px !important; }
        .max-w-md-95px {
            max-width: 95px !important; }
        .w-md-100px {
            width: 100px !important; }
        .h-md-100px {
            height: 100px !important; }
        .min-w-md-100px {
            min-width: 100px !important; }
        .min-h-md-100px {
            min-height: 100px !important; }
        .max-h-md-100px {
            max-height: 100px !important; }
        .max-w-md-100px {
            max-width: 100px !important; }
        .w-md-105px {
            width: 105px !important; }
        .h-md-105px {
            height: 105px !important; }
        .min-w-md-105px {
            min-width: 105px !important; }
        .min-h-md-105px {
            min-height: 105px !important; }
        .max-h-md-105px {
            max-height: 105px !important; }
        .max-w-md-105px {
            max-width: 105px !important; }
        .w-md-110px {
            width: 110px !important; }
        .h-md-110px {
            height: 110px !important; }
        .min-w-md-110px {
            min-width: 110px !important; }
        .min-h-md-110px {
            min-height: 110px !important; }
        .max-h-md-110px {
            max-height: 110px !important; }
        .max-w-md-110px {
            max-width: 110px !important; }
        .w-md-115px {
            width: 115px !important; }
        .h-md-115px {
            height: 115px !important; }
        .min-w-md-115px {
            min-width: 115px !important; }
        .min-h-md-115px {
            min-height: 115px !important; }
        .max-h-md-115px {
            max-height: 115px !important; }
        .max-w-md-115px {
            max-width: 115px !important; }
        .w-md-120px {
            width: 120px !important; }
        .h-md-120px {
            height: 120px !important; }
        .min-w-md-120px {
            min-width: 120px !important; }
        .min-h-md-120px {
            min-height: 120px !important; }
        .max-h-md-120px {
            max-height: 120px !important; }
        .max-w-md-120px {
            max-width: 120px !important; }
        .w-md-125px {
            width: 125px !important; }
        .h-md-125px {
            height: 125px !important; }
        .min-w-md-125px {
            min-width: 125px !important; }
        .min-h-md-125px {
            min-height: 125px !important; }
        .max-h-md-125px {
            max-height: 125px !important; }
        .max-w-md-125px {
            max-width: 125px !important; }
        .w-md-130px {
            width: 130px !important; }
        .h-md-130px {
            height: 130px !important; }
        .min-w-md-130px {
            min-width: 130px !important; }
        .min-h-md-130px {
            min-height: 130px !important; }
        .max-h-md-130px {
            max-height: 130px !important; }
        .max-w-md-130px {
            max-width: 130px !important; }
        .w-md-135px {
            width: 135px !important; }
        .h-md-135px {
            height: 135px !important; }
        .min-w-md-135px {
            min-width: 135px !important; }
        .min-h-md-135px {
            min-height: 135px !important; }
        .max-h-md-135px {
            max-height: 135px !important; }
        .max-w-md-135px {
            max-width: 135px !important; }
        .w-md-140px {
            width: 140px !important; }
        .h-md-140px {
            height: 140px !important; }
        .min-w-md-140px {
            min-width: 140px !important; }
        .min-h-md-140px {
            min-height: 140px !important; }
        .max-h-md-140px {
            max-height: 140px !important; }
        .max-w-md-140px {
            max-width: 140px !important; }
        .w-md-145px {
            width: 145px !important; }
        .h-md-145px {
            height: 145px !important; }
        .min-w-md-145px {
            min-width: 145px !important; }
        .min-h-md-145px {
            min-height: 145px !important; }
        .max-h-md-145px {
            max-height: 145px !important; }
        .max-w-md-145px {
            max-width: 145px !important; }
        .w-md-150px {
            width: 150px !important; }
        .h-md-150px {
            height: 150px !important; }
        .min-w-md-150px {
            min-width: 150px !important; }
        .min-h-md-150px {
            min-height: 150px !important; }
        .max-h-md-150px {
            max-height: 150px !important; }
        .max-w-md-150px {
            max-width: 150px !important; }
        .w-md-175px {
            width: 175px !important; }
        .h-md-175px {
            height: 175px !important; }
        .min-w-md-175px {
            min-width: 175px !important; }
        .min-h-md-175px {
            min-height: 175px !important; }
        .max-h-md-175px {
            max-height: 175px !important; }
        .max-w-md-175px {
            max-width: 175px !important; }
        .w-md-180px {
            width: 180px !important; }
        .h-md-180px {
            height: 180px !important; }
        .min-w-md-180px {
            min-width: 180px !important; }
        .min-h-md-180px {
            min-height: 180px !important; }
        .max-h-md-180px {
            max-height: 180px !important; }
        .max-w-md-180px {
            max-width: 180px !important; }
        .w-md-200px {
            width: 200px !important; }
        .h-md-200px {
            height: 200px !important; }
        .min-w-md-200px {
            min-width: 200px !important; }
        .min-h-md-200px {
            min-height: 200px !important; }
        .max-h-md-200px {
            max-height: 200px !important; }
        .max-w-md-200px {
            max-width: 200px !important; }
        .w-md-225px {
            width: 225px !important; }
        .h-md-225px {
            height: 225px !important; }
        .min-w-md-225px {
            min-width: 225px !important; }
        .min-h-md-225px {
            min-height: 225px !important; }
        .max-h-md-225px {
            max-height: 225px !important; }
        .max-w-md-225px {
            max-width: 225px !important; }
        .w-md-250px {
            width: 250px !important; }
        .h-md-250px {
            height: 250px !important; }
        .min-w-md-250px {
            min-width: 250px !important; }
        .min-h-md-250px {
            min-height: 250px !important; }
        .max-h-md-250px {
            max-height: 250px !important; }
        .max-w-md-250px {
            max-width: 250px !important; }
        .w-md-255px {
            width: 255px !important; }
        .h-md-255px {
            height: 255px !important; }
        .min-w-md-255px {
            min-width: 255px !important; }
        .min-h-md-255px {
            min-height: 255px !important; }
        .max-h-md-255px {
            max-height: 255px !important; }
        .max-w-md-255px {
            max-width: 255px !important; }
        .w-md-260px {
            width: 260px !important; }
        .h-md-260px {
            height: 260px !important; }
        .min-w-md-260px {
            min-width: 260px !important; }
        .min-h-md-260px {
            min-height: 260px !important; }
        .max-h-md-260px {
            max-height: 260px !important; }
        .max-w-md-260px {
            max-width: 260px !important; }
        .w-md-265px {
            width: 265px !important; }
        .h-md-265px {
            height: 265px !important; }
        .min-w-md-265px {
            min-width: 265px !important; }
        .min-h-md-265px {
            min-height: 265px !important; }
        .max-h-md-265px {
            max-height: 265px !important; }
        .max-w-md-265px {
            max-width: 265px !important; }
        .w-md-275px {
            width: 275px !important; }
        .h-md-275px {
            height: 275px !important; }
        .min-w-md-275px {
            min-width: 275px !important; }
        .min-h-md-275px {
            min-height: 275px !important; }
        .max-h-md-275px {
            max-height: 275px !important; }
        .max-w-md-275px {
            max-width: 275px !important; }
        .w-md-295px {
            width: 295px !important; }
        .h-md-295px {
            height: 295px !important; }
        .min-w-md-295px {
            min-width: 295px !important; }
        .min-h-md-295px {
            min-height: 295px !important; }
        .max-h-md-295px {
            max-height: 295px !important; }
        .max-w-md-295px {
            max-width: 295px !important; }
        .w-md-300px {
            width: 300px !important; }
        .h-md-300px {
            height: 300px !important; }
        .min-w-md-300px {
            min-width: 300px !important; }
        .min-h-md-300px {
            min-height: 300px !important; }
        .max-h-md-300px {
            max-height: 300px !important; }
        .max-w-md-300px {
            max-width: 300px !important; }
        .w-md-325px {
            width: 325px !important; }
        .h-md-325px {
            height: 325px !important; }
        .min-w-md-325px {
            min-width: 325px !important; }
        .min-h-md-325px {
            min-height: 325px !important; }
        .max-h-md-325px {
            max-height: 325px !important; }
        .max-w-md-325px {
            max-width: 325px !important; }
        .w-md-350px {
            width: 350px !important; }
        .h-md-350px {
            height: 350px !important; }
        .min-w-md-350px {
            min-width: 350px !important; }
        .min-h-md-350px {
            min-height: 350px !important; }
        .max-h-md-350px {
            max-height: 350px !important; }
        .max-w-md-350px {
            max-width: 350px !important; }
        .w-md-375px {
            width: 375px !important; }
        .h-md-375px {
            height: 375px !important; }
        .min-w-md-375px {
            min-width: 375px !important; }
        .min-h-md-375px {
            min-height: 375px !important; }
        .max-h-md-375px {
            max-height: 375px !important; }
        .max-w-md-375px {
            max-width: 375px !important; }
        .w-md-400px {
            width: 400px !important; }
        .h-md-400px {
            height: 400px !important; }
        .min-w-md-400px {
            min-width: 400px !important; }
        .min-h-md-400px {
            min-height: 400px !important; }
        .max-h-md-400px {
            max-height: 400px !important; }
        .max-w-md-400px {
            max-width: 400px !important; }
        .w-md-425px {
            width: 425px !important; }
        .h-md-425px {
            height: 425px !important; }
        .min-w-md-425px {
            min-width: 425px !important; }
        .min-h-md-425px {
            min-height: 425px !important; }
        .max-h-md-425px {
            max-height: 425px !important; }
        .max-w-md-425px {
            max-width: 425px !important; }
        .w-md-450px {
            width: 450px !important; }
        .h-md-450px {
            height: 450px !important; }
        .min-w-md-450px {
            min-width: 450px !important; }
        .min-h-md-450px {
            min-height: 450px !important; }
        .max-h-md-450px {
            max-height: 450px !important; }
        .max-w-md-450px {
            max-width: 450px !important; }
        .w-md-475px {
            width: 475px !important; }
        .h-md-475px {
            height: 475px !important; }
        .min-w-md-475px {
            min-width: 475px !important; }
        .min-h-md-475px {
            min-height: 475px !important; }
        .max-h-md-475px {
            max-height: 475px !important; }
        .max-w-md-475px {
            max-width: 475px !important; }
        .w-md-500px {
            width: 500px !important; }
        .h-md-500px {
            height: 500px !important; }
        .min-w-md-500px {
            min-width: 500px !important; }
        .min-h-md-500px {
            min-height: 500px !important; }
        .max-h-md-500px {
            max-height: 500px !important; }
        .max-w-md-500px {
            max-width: 500px !important; }
        .w-md-550px {
            width: 550px !important; }
        .h-md-550px {
            height: 550px !important; }
        .min-w-md-550px {
            min-width: 550px !important; }
        .min-h-md-550px {
            min-height: 550px !important; }
        .max-h-md-550px {
            max-height: 550px !important; }
        .max-w-md-550px {
            max-width: 550px !important; }
        .w-md-600px {
            width: 600px !important; }
        .h-md-600px {
            height: 600px !important; }
        .min-w-md-600px {
            min-width: 600px !important; }
        .min-h-md-600px {
            min-height: 600px !important; }
        .max-h-md-600px {
            max-height: 600px !important; }
        .max-w-md-600px {
            max-width: 600px !important; }
        .w-md-650px {
            width: 650px !important; }
        .h-md-650px {
            height: 650px !important; }
        .min-w-md-650px {
            min-width: 650px !important; }
        .min-h-md-650px {
            min-height: 650px !important; }
        .max-h-md-650px {
            max-height: 650px !important; }
        .max-w-md-650px {
            max-width: 650px !important; }
        .w-md-700px {
            width: 700px !important; }
        .h-md-700px {
            height: 700px !important; }
        .min-w-md-700px {
            min-width: 700px !important; }
        .min-h-md-700px {
            min-height: 700px !important; }
        .max-h-md-700px {
            max-height: 700px !important; }
        .max-w-md-700px {
            max-width: 700px !important; }
        .w-md-750px {
            width: 750px !important; }
        .h-md-750px {
            height: 750px !important; }
        .min-w-md-750px {
            min-width: 750px !important; }
        .min-h-md-750px {
            min-height: 750px !important; }
        .max-h-md-750px {
            max-height: 750px !important; }
        .max-w-md-750px {
            max-width: 750px !important; }
        .w-md-800px {
            width: 800px !important; }
        .h-md-800px {
            height: 800px !important; }
        .min-w-md-800px {
            min-width: 800px !important; }
        .min-h-md-800px {
            min-height: 800px !important; }
        .max-h-md-800px {
            max-height: 800px !important; }
        .max-w-md-800px {
            max-width: 800px !important; }
        .w-md-850px {
            width: 850px !important; }
        .h-md-850px {
            height: 850px !important; }
        .min-w-md-850px {
            min-width: 850px !important; }
        .min-h-md-850px {
            min-height: 850px !important; }
        .max-h-md-850px {
            max-height: 850px !important; }
        .max-w-md-850px {
            max-width: 850px !important; }
        .w-md-900px {
            width: 900px !important; }
        .h-md-900px {
            height: 900px !important; }
        .min-w-md-900px {
            min-width: 900px !important; }
        .min-h-md-900px {
            min-height: 900px !important; }
        .max-h-md-900px {
            max-height: 900px !important; }
        .max-w-md-900px {
            max-width: 900px !important; }
        .w-md-950px {
            width: 950px !important; }
        .h-md-950px {
            height: 950px !important; }
        .min-w-md-950px {
            min-width: 950px !important; }
        .min-h-md-950px {
            min-height: 950px !important; }
        .max-h-md-950px {
            max-height: 950px !important; }
        .max-w-md-950px {
            max-width: 950px !important; }
        .w-md-1000px {
            width: 1000px !important; }
        .h-md-1000px {
            height: 1000px !important; }
        .min-w-md-1000px {
            min-width: 1000px !important; }
        .min-h-md-1000px {
            min-height: 1000px !important; }
        .max-h-md-1000px {
            max-height: 1000px !important; }
        .max-w-md-1000px {
            max-width: 1000px !important; } }

        @media (min-width: 992px) {
        .w-lg-auto {
            width: auto !important; }
        .h-lg-auto {
            height: auto !important; }
        .min-w-lg-auto {
            min-width: auto !important; }
        .min-h-lg-auto {
            min-height: auto !important; }
        .max-h-lg-auto {
            max-height: auto !important; }
        .max-w-lg-auto {
            max-width: auto !important; }
        .w-lg-1px {
            width: 1px !important; }
        .h-lg-1px {
            height: 1px !important; }
        .min-w-lg-1px {
            min-width: 1px !important; }
        .min-h-lg-1px {
            min-height: 1px !important; }
        .max-h-lg-1px {
            max-height: 1px !important; }
        .max-w-lg-1px {
            max-width: 1px !important; }
        .w-lg-2px {
            width: 2px !important; }
        .h-lg-2px {
            height: 2px !important; }
        .min-w-lg-2px {
            min-width: 2px !important; }
        .min-h-lg-2px {
            min-height: 2px !important; }
        .max-h-lg-2px {
            max-height: 2px !important; }
        .max-w-lg-2px {
            max-width: 2px !important; }
        .w-lg-3px {
            width: 3px !important; }
        .h-lg-3px {
            height: 3px !important; }
        .min-w-lg-3px {
            min-width: 3px !important; }
        .min-h-lg-3px {
            min-height: 3px !important; }
        .max-h-lg-3px {
            max-height: 3px !important; }
        .max-w-lg-3px {
            max-width: 3px !important; }
        .w-lg-4px {
            width: 4px !important; }
        .h-lg-4px {
            height: 4px !important; }
        .min-w-lg-4px {
            min-width: 4px !important; }
        .min-h-lg-4px {
            min-height: 4px !important; }
        .max-h-lg-4px {
            max-height: 4px !important; }
        .max-w-lg-4px {
            max-width: 4px !important; }
        .w-lg-5px {
            width: 5px !important; }
        .h-lg-5px {
            height: 5px !important; }
        .min-w-lg-5px {
            min-width: 5px !important; }
        .min-h-lg-5px {
            min-height: 5px !important; }
        .max-h-lg-5px {
            max-height: 5px !important; }
        .max-w-lg-5px {
            max-width: 5px !important; }
        .w-lg-10px {
            width: 10px !important; }
        .h-lg-10px {
            height: 10px !important; }
        .min-w-lg-10px {
            min-width: 10px !important; }
        .min-h-lg-10px {
            min-height: 10px !important; }
        .max-h-lg-10px {
            max-height: 10px !important; }
        .max-w-lg-10px {
            max-width: 10px !important; }
        .w-lg-15px {
            width: 15px !important; }
        .h-lg-15px {
            height: 15px !important; }
        .min-w-lg-15px {
            min-width: 15px !important; }
        .min-h-lg-15px {
            min-height: 15px !important; }
        .max-h-lg-15px {
            max-height: 15px !important; }
        .max-w-lg-15px {
            max-width: 15px !important; }
        .w-lg-20px {
            width: 20px !important; }
        .h-lg-20px {
            height: 20px !important; }
        .min-w-lg-20px {
            min-width: 20px !important; }
        .min-h-lg-20px {
            min-height: 20px !important; }
        .max-h-lg-20px {
            max-height: 20px !important; }
        .max-w-lg-20px {
            max-width: 20px !important; }
        .w-lg-25px {
            width: 25px !important; }
        .h-lg-25px {
            height: 25px !important; }
        .min-w-lg-25px {
            min-width: 25px !important; }
        .min-h-lg-25px {
            min-height: 25px !important; }
        .max-h-lg-25px {
            max-height: 25px !important; }
        .max-w-lg-25px {
            max-width: 25px !important; }
        .w-lg-30px {
            width: 30px !important; }
        .h-lg-30px {
            height: 30px !important; }
        .min-w-lg-30px {
            min-width: 30px !important; }
        .min-h-lg-30px {
            min-height: 30px !important; }
        .max-h-lg-30px {
            max-height: 30px !important; }
        .max-w-lg-30px {
            max-width: 30px !important; }
        .w-lg-35px {
            width: 35px !important; }
        .h-lg-35px {
            height: 35px !important; }
        .min-w-lg-35px {
            min-width: 35px !important; }
        .min-h-lg-35px {
            min-height: 35px !important; }
        .max-h-lg-35px {
            max-height: 35px !important; }
        .max-w-lg-35px {
            max-width: 35px !important; }
        .w-lg-40px {
            width: 40px !important; }
        .h-lg-40px {
            height: 40px !important; }
        .min-w-lg-40px {
            min-width: 40px !important; }
        .min-h-lg-40px {
            min-height: 40px !important; }
        .max-h-lg-40px {
            max-height: 40px !important; }
        .max-w-lg-40px {
            max-width: 40px !important; }
        .w-lg-45px {
            width: 45px !important; }
        .h-lg-45px {
            height: 45px !important; }
        .min-w-lg-45px {
            min-width: 45px !important; }
        .min-h-lg-45px {
            min-height: 45px !important; }
        .max-h-lg-45px {
            max-height: 45px !important; }
        .max-w-lg-45px {
            max-width: 45px !important; }
        .w-lg-50px {
            width: 50px !important; }
        .h-lg-50px {
            height: 50px !important; }
        .min-w-lg-50px {
            min-width: 50px !important; }
        .min-h-lg-50px {
            min-height: 50px !important; }
        .max-h-lg-50px {
            max-height: 50px !important; }
        .max-w-lg-50px {
            max-width: 50px !important; }
        .w-lg-55px {
            width: 55px !important; }
        .h-lg-55px {
            height: 55px !important; }
        .min-w-lg-55px {
            min-width: 55px !important; }
        .min-h-lg-55px {
            min-height: 55px !important; }
        .max-h-lg-55px {
            max-height: 55px !important; }
        .max-w-lg-55px {
            max-width: 55px !important; }
        .w-lg-60px {
            width: 60px !important; }
        .h-lg-60px {
            height: 60px !important; }
        .min-w-lg-60px {
            min-width: 60px !important; }
        .min-h-lg-60px {
            min-height: 60px !important; }
        .max-h-lg-60px {
            max-height: 60px !important; }
        .max-w-lg-60px {
            max-width: 60px !important; }
        .w-lg-65px {
            width: 65px !important; }
        .h-lg-65px {
            height: 65px !important; }
        .min-w-lg-65px {
            min-width: 65px !important; }
        .min-h-lg-65px {
            min-height: 65px !important; }
        .max-h-lg-65px {
            max-height: 65px !important; }
        .max-w-lg-65px {
            max-width: 65px !important; }
        .w-lg-70px {
            width: 70px !important; }
        .h-lg-70px {
            height: 70px !important; }
        .min-w-lg-70px {
            min-width: 70px !important; }
        .min-h-lg-70px {
            min-height: 70px !important; }
        .max-h-lg-70px {
            max-height: 70px !important; }
        .max-w-lg-70px {
            max-width: 70px !important; }
        .w-lg-75px {
            width: 75px !important; }
        .h-lg-75px {
            height: 75px !important; }
        .min-w-lg-75px {
            min-width: 75px !important; }
        .min-h-lg-75px {
            min-height: 75px !important; }
        .max-h-lg-75px {
            max-height: 75px !important; }
        .max-w-lg-75px {
            max-width: 75px !important; }
        .w-lg-80px {
            width: 80px !important; }
        .h-lg-80px {
            height: 80px !important; }
        .min-w-lg-80px {
            min-width: 80px !important; }
        .min-h-lg-80px {
            min-height: 80px !important; }
        .max-h-lg-80px {
            max-height: 80px !important; }
        .max-w-lg-80px {
            max-width: 80px !important; }
        .w-lg-85px {
            width: 85px !important; }
        .h-lg-85px {
            height: 85px !important; }
        .min-w-lg-85px {
            min-width: 85px !important; }
        .min-h-lg-85px {
            min-height: 85px !important; }
        .max-h-lg-85px {
            max-height: 85px !important; }
        .max-w-lg-85px {
            max-width: 85px !important; }
        .w-lg-90px {
            width: 90px !important; }
        .h-lg-90px {
            height: 90px !important; }
        .min-w-lg-90px {
            min-width: 90px !important; }
        .min-h-lg-90px {
            min-height: 90px !important; }
        .max-h-lg-90px {
            max-height: 90px !important; }
        .max-w-lg-90px {
            max-width: 90px !important; }
        .w-lg-95px {
            width: 95px !important; }
        .h-lg-95px {
            height: 95px !important; }
        .min-w-lg-95px {
            min-width: 95px !important; }
        .min-h-lg-95px {
            min-height: 95px !important; }
        .max-h-lg-95px {
            max-height: 95px !important; }
        .max-w-lg-95px {
            max-width: 95px !important; }
        .w-lg-100px {
            width: 100px !important; }
        .h-lg-100px {
            height: 100px !important; }
        .min-w-lg-100px {
            min-width: 100px !important; }
        .min-h-lg-100px {
            min-height: 100px !important; }
        .max-h-lg-100px {
            max-height: 100px !important; }
        .max-w-lg-100px {
            max-width: 100px !important; }
        .w-lg-105px {
            width: 105px !important; }
        .h-lg-105px {
            height: 105px !important; }
        .min-w-lg-105px {
            min-width: 105px !important; }
        .min-h-lg-105px {
            min-height: 105px !important; }
        .max-h-lg-105px {
            max-height: 105px !important; }
        .max-w-lg-105px {
            max-width: 105px !important; }
        .w-lg-110px {
            width: 110px !important; }
        .h-lg-110px {
            height: 110px !important; }
        .min-w-lg-110px {
            min-width: 110px !important; }
        .min-h-lg-110px {
            min-height: 110px !important; }
        .max-h-lg-110px {
            max-height: 110px !important; }
        .max-w-lg-110px {
            max-width: 110px !important; }
        .w-lg-115px {
            width: 115px !important; }
        .h-lg-115px {
            height: 115px !important; }
        .min-w-lg-115px {
            min-width: 115px !important; }
        .min-h-lg-115px {
            min-height: 115px !important; }
        .max-h-lg-115px {
            max-height: 115px !important; }
        .max-w-lg-115px {
            max-width: 115px !important; }
        .w-lg-120px {
            width: 120px !important; }
        .h-lg-120px {
            height: 120px !important; }
        .min-w-lg-120px {
            min-width: 120px !important; }
        .min-h-lg-120px {
            min-height: 120px !important; }
        .max-h-lg-120px {
            max-height: 120px !important; }
        .max-w-lg-120px {
            max-width: 120px !important; }
        .w-lg-125px {
            width: 125px !important; }
        .h-lg-125px {
            height: 125px !important; }
        .min-w-lg-125px {
            min-width: 125px !important; }
        .min-h-lg-125px {
            min-height: 125px !important; }
        .max-h-lg-125px {
            max-height: 125px !important; }
        .max-w-lg-125px {
            max-width: 125px !important; }
        .w-lg-130px {
            width: 130px !important; }
        .h-lg-130px {
            height: 130px !important; }
        .min-w-lg-130px {
            min-width: 130px !important; }
        .min-h-lg-130px {
            min-height: 130px !important; }
        .max-h-lg-130px {
            max-height: 130px !important; }
        .max-w-lg-130px {
            max-width: 130px !important; }
        .w-lg-135px {
            width: 135px !important; }
        .h-lg-135px {
            height: 135px !important; }
        .min-w-lg-135px {
            min-width: 135px !important; }
        .min-h-lg-135px {
            min-height: 135px !important; }
        .max-h-lg-135px {
            max-height: 135px !important; }
        .max-w-lg-135px {
            max-width: 135px !important; }
        .w-lg-140px {
            width: 140px !important; }
        .h-lg-140px {
            height: 140px !important; }
        .min-w-lg-140px {
            min-width: 140px !important; }
        .min-h-lg-140px {
            min-height: 140px !important; }
        .max-h-lg-140px {
            max-height: 140px !important; }
        .max-w-lg-140px {
            max-width: 140px !important; }
        .w-lg-145px {
            width: 145px !important; }
        .h-lg-145px {
            height: 145px !important; }
        .min-w-lg-145px {
            min-width: 145px !important; }
        .min-h-lg-145px {
            min-height: 145px !important; }
        .max-h-lg-145px {
            max-height: 145px !important; }
        .max-w-lg-145px {
            max-width: 145px !important; }
        .w-lg-150px {
            width: 150px !important; }
        .h-lg-150px {
            height: 150px !important; }
        .min-w-lg-150px {
            min-width: 150px !important; }
        .min-h-lg-150px {
            min-height: 150px !important; }
        .max-h-lg-150px {
            max-height: 150px !important; }
        .max-w-lg-150px {
            max-width: 150px !important; }
        .w-lg-175px {
            width: 175px !important; }
        .h-lg-175px {
            height: 175px !important; }
        .min-w-lg-175px {
            min-width: 175px !important; }
        .min-h-lg-175px {
            min-height: 175px !important; }
        .max-h-lg-175px {
            max-height: 175px !important; }
        .max-w-lg-175px {
            max-width: 175px !important; }
        .w-lg-180px {
            width: 180px !important; }
        .h-lg-180px {
            height: 180px !important; }
        .min-w-lg-180px {
            min-width: 180px !important; }
        .min-h-lg-180px {
            min-height: 180px !important; }
        .max-h-lg-180px {
            max-height: 180px !important; }
        .max-w-lg-180px {
            max-width: 180px !important; }
        .w-lg-200px {
            width: 200px !important; }
        .h-lg-200px {
            height: 200px !important; }
        .min-w-lg-200px {
            min-width: 200px !important; }
        .min-h-lg-200px {
            min-height: 200px !important; }
        .max-h-lg-200px {
            max-height: 200px !important; }
        .max-w-lg-200px {
            max-width: 200px !important; }
        .w-lg-225px {
            width: 225px !important; }
        .h-lg-225px {
            height: 225px !important; }
        .min-w-lg-225px {
            min-width: 225px !important; }
        .min-h-lg-225px {
            min-height: 225px !important; }
        .max-h-lg-225px {
            max-height: 225px !important; }
        .max-w-lg-225px {
            max-width: 225px !important; }
        .w-lg-250px {
            width: 250px !important; }
        .h-lg-250px {
            height: 250px !important; }
        .min-w-lg-250px {
            min-width: 250px !important; }
        .min-h-lg-250px {
            min-height: 250px !important; }
        .max-h-lg-250px {
            max-height: 250px !important; }
        .max-w-lg-250px {
            max-width: 250px !important; }
        .w-lg-255px {
            width: 255px !important; }
        .h-lg-255px {
            height: 255px !important; }
        .min-w-lg-255px {
            min-width: 255px !important; }
        .min-h-lg-255px {
            min-height: 255px !important; }
        .max-h-lg-255px {
            max-height: 255px !important; }
        .max-w-lg-255px {
            max-width: 255px !important; }
        .w-lg-260px {
            width: 260px !important; }
        .h-lg-260px {
            height: 260px !important; }
        .min-w-lg-260px {
            min-width: 260px !important; }
        .min-h-lg-260px {
            min-height: 260px !important; }
        .max-h-lg-260px {
            max-height: 260px !important; }
        .max-w-lg-260px {
            max-width: 260px !important; }
        .w-lg-265px {
            width: 265px !important; }
        .h-lg-265px {
            height: 265px !important; }
        .min-w-lg-265px {
            min-width: 265px !important; }
        .min-h-lg-265px {
            min-height: 265px !important; }
        .max-h-lg-265px {
            max-height: 265px !important; }
        .max-w-lg-265px {
            max-width: 265px !important; }
        .w-lg-275px {
            width: 275px !important; }
        .h-lg-275px {
            height: 275px !important; }
        .min-w-lg-275px {
            min-width: 275px !important; }
        .min-h-lg-275px {
            min-height: 275px !important; }
        .max-h-lg-275px {
            max-height: 275px !important; }
        .max-w-lg-275px {
            max-width: 275px !important; }
        .w-lg-295px {
            width: 295px !important; }
        .h-lg-295px {
            height: 295px !important; }
        .min-w-lg-295px {
            min-width: 295px !important; }
        .min-h-lg-295px {
            min-height: 295px !important; }
        .max-h-lg-295px {
            max-height: 295px !important; }
        .max-w-lg-295px {
            max-width: 295px !important; }
        .w-lg-300px {
            width: 300px !important; }
        .h-lg-300px {
            height: 300px !important; }
        .min-w-lg-300px {
            min-width: 300px !important; }
        .min-h-lg-300px {
            min-height: 300px !important; }
        .max-h-lg-300px {
            max-height: 300px !important; }
        .max-w-lg-300px {
            max-width: 300px !important; }
        .w-lg-325px {
            width: 325px !important; }
        .h-lg-325px {
            height: 325px !important; }
        .min-w-lg-325px {
            min-width: 325px !important; }
        .min-h-lg-325px {
            min-height: 325px !important; }
        .max-h-lg-325px {
            max-height: 325px !important; }
        .max-w-lg-325px {
            max-width: 325px !important; }
        .w-lg-350px {
            width: 350px !important; }
        .h-lg-350px {
            height: 350px !important; }
        .min-w-lg-350px {
            min-width: 350px !important; }
        .min-h-lg-350px {
            min-height: 350px !important; }
        .max-h-lg-350px {
            max-height: 350px !important; }
        .max-w-lg-350px {
            max-width: 350px !important; }
        .w-lg-375px {
            width: 375px !important; }
        .h-lg-375px {
            height: 375px !important; }
        .min-w-lg-375px {
            min-width: 375px !important; }
        .min-h-lg-375px {
            min-height: 375px !important; }
        .max-h-lg-375px {
            max-height: 375px !important; }
        .max-w-lg-375px {
            max-width: 375px !important; }
        .w-lg-400px {
            width: 400px !important; }
        .h-lg-400px {
            height: 400px !important; }
        .min-w-lg-400px {
            min-width: 400px !important; }
        .min-h-lg-400px {
            min-height: 400px !important; }
        .max-h-lg-400px {
            max-height: 400px !important; }
        .max-w-lg-400px {
            max-width: 400px !important; }
        .w-lg-425px {
            width: 425px !important; }
        .h-lg-425px {
            height: 425px !important; }
        .min-w-lg-425px {
            min-width: 425px !important; }
        .min-h-lg-425px {
            min-height: 425px !important; }
        .max-h-lg-425px {
            max-height: 425px !important; }
        .max-w-lg-425px {
            max-width: 425px !important; }
        .w-lg-450px {
            width: 450px !important; }
        .h-lg-450px {
            height: 450px !important; }
        .min-w-lg-450px {
            min-width: 450px !important; }
        .min-h-lg-450px {
            min-height: 450px !important; }
        .max-h-lg-450px {
            max-height: 450px !important; }
        .max-w-lg-450px {
            max-width: 450px !important; }
        .w-lg-475px {
            width: 475px !important; }
        .h-lg-475px {
            height: 475px !important; }
        .min-w-lg-475px {
            min-width: 475px !important; }
        .min-h-lg-475px {
            min-height: 475px !important; }
        .max-h-lg-475px {
            max-height: 475px !important; }
        .max-w-lg-475px {
            max-width: 475px !important; }
        .w-lg-500px {
            width: 500px !important; }
        .h-lg-500px {
            height: 500px !important; }
        .min-w-lg-500px {
            min-width: 500px !important; }
        .min-h-lg-500px {
            min-height: 500px !important; }
        .max-h-lg-500px {
            max-height: 500px !important; }
        .max-w-lg-500px {
            max-width: 500px !important; }
        .w-lg-550px {
            width: 550px !important; }
        .h-lg-550px {
            height: 550px !important; }
        .min-w-lg-550px {
            min-width: 550px !important; }
        .min-h-lg-550px {
            min-height: 550px !important; }
        .max-h-lg-550px {
            max-height: 550px !important; }
        .max-w-lg-550px {
            max-width: 550px !important; }
        .w-lg-600px {
            width: 600px !important; }
        .h-lg-600px {
            height: 600px !important; }
        .min-w-lg-600px {
            min-width: 600px !important; }
        .min-h-lg-600px {
            min-height: 600px !important; }
        .max-h-lg-600px {
            max-height: 600px !important; }
        .max-w-lg-600px {
            max-width: 600px !important; }
        .w-lg-650px {
            width: 650px !important; }
        .h-lg-650px {
            height: 650px !important; }
        .min-w-lg-650px {
            min-width: 650px !important; }
        .min-h-lg-650px {
            min-height: 650px !important; }
        .max-h-lg-650px {
            max-height: 650px !important; }
        .max-w-lg-650px {
            max-width: 650px !important; }
        .w-lg-700px {
            width: 700px !important; }
        .h-lg-700px {
            height: 700px !important; }
        .min-w-lg-700px {
            min-width: 700px !important; }
        .min-h-lg-700px {
            min-height: 700px !important; }
        .max-h-lg-700px {
            max-height: 700px !important; }
        .max-w-lg-700px {
            max-width: 700px !important; }
        .w-lg-750px {
            width: 750px !important; }
        .h-lg-750px {
            height: 750px !important; }
        .min-w-lg-750px {
            min-width: 750px !important; }
        .min-h-lg-750px {
            min-height: 750px !important; }
        .max-h-lg-750px {
            max-height: 750px !important; }
        .max-w-lg-750px {
            max-width: 750px !important; }
        .w-lg-800px {
            width: 800px !important; }
        .h-lg-800px {
            height: 800px !important; }
        .min-w-lg-800px {
            min-width: 800px !important; }
        .min-h-lg-800px {
            min-height: 800px !important; }
        .max-h-lg-800px {
            max-height: 800px !important; }
        .max-w-lg-800px {
            max-width: 800px !important; }
        .w-lg-850px {
            width: 850px !important; }
        .h-lg-850px {
            height: 850px !important; }
        .min-w-lg-850px {
            min-width: 850px !important; }
        .min-h-lg-850px {
            min-height: 850px !important; }
        .max-h-lg-850px {
            max-height: 850px !important; }
        .max-w-lg-850px {
            max-width: 850px !important; }
        .w-lg-900px {
            width: 900px !important; }
        .h-lg-900px {
            height: 900px !important; }
        .min-w-lg-900px {
            min-width: 900px !important; }
        .min-h-lg-900px {
            min-height: 900px !important; }
        .max-h-lg-900px {
            max-height: 900px !important; }
        .max-w-lg-900px {
            max-width: 900px !important; }
        .w-lg-950px {
            width: 950px !important; }
        .h-lg-950px {
            height: 950px !important; }
        .min-w-lg-950px {
            min-width: 950px !important; }
        .min-h-lg-950px {
            min-height: 950px !important; }
        .max-h-lg-950px {
            max-height: 950px !important; }
        .max-w-lg-950px {
            max-width: 950px !important; }
        .w-lg-1000px {
            width: 1000px !important; }
        .h-lg-1000px {
            height: 1000px !important; }
        .min-w-lg-1000px {
            min-width: 1000px !important; }
        .min-h-lg-1000px {
            min-height: 1000px !important; }
        .max-h-lg-1000px {
            max-height: 1000px !important; }
        .max-w-lg-1000px {
            max-width: 1000px !important; } }

        @media (min-width: 1200px) {
        .w-xl-auto {
            width: auto !important; }
        .h-xl-auto {
            height: auto !important; }
        .min-w-xl-auto {
            min-width: auto !important; }
        .min-h-xl-auto {
            min-height: auto !important; }
        .max-h-xl-auto {
            max-height: auto !important; }
        .max-w-xl-auto {
            max-width: auto !important; }
        .w-xl-1px {
            width: 1px !important; }
        .h-xl-1px {
            height: 1px !important; }
        .min-w-xl-1px {
            min-width: 1px !important; }
        .min-h-xl-1px {
            min-height: 1px !important; }
        .max-h-xl-1px {
            max-height: 1px !important; }
        .max-w-xl-1px {
            max-width: 1px !important; }
        .w-xl-2px {
            width: 2px !important; }
        .h-xl-2px {
            height: 2px !important; }
        .min-w-xl-2px {
            min-width: 2px !important; }
        .min-h-xl-2px {
            min-height: 2px !important; }
        .max-h-xl-2px {
            max-height: 2px !important; }
        .max-w-xl-2px {
            max-width: 2px !important; }
        .w-xl-3px {
            width: 3px !important; }
        .h-xl-3px {
            height: 3px !important; }
        .min-w-xl-3px {
            min-width: 3px !important; }
        .min-h-xl-3px {
            min-height: 3px !important; }
        .max-h-xl-3px {
            max-height: 3px !important; }
        .max-w-xl-3px {
            max-width: 3px !important; }
        .w-xl-4px {
            width: 4px !important; }
        .h-xl-4px {
            height: 4px !important; }
        .min-w-xl-4px {
            min-width: 4px !important; }
        .min-h-xl-4px {
            min-height: 4px !important; }
        .max-h-xl-4px {
            max-height: 4px !important; }
        .max-w-xl-4px {
            max-width: 4px !important; }
        .w-xl-5px {
            width: 5px !important; }
        .h-xl-5px {
            height: 5px !important; }
        .min-w-xl-5px {
            min-width: 5px !important; }
        .min-h-xl-5px {
            min-height: 5px !important; }
        .max-h-xl-5px {
            max-height: 5px !important; }
        .max-w-xl-5px {
            max-width: 5px !important; }
        .w-xl-10px {
            width: 10px !important; }
        .h-xl-10px {
            height: 10px !important; }
        .min-w-xl-10px {
            min-width: 10px !important; }
        .min-h-xl-10px {
            min-height: 10px !important; }
        .max-h-xl-10px {
            max-height: 10px !important; }
        .max-w-xl-10px {
            max-width: 10px !important; }
        .w-xl-15px {
            width: 15px !important; }
        .h-xl-15px {
            height: 15px !important; }
        .min-w-xl-15px {
            min-width: 15px !important; }
        .min-h-xl-15px {
            min-height: 15px !important; }
        .max-h-xl-15px {
            max-height: 15px !important; }
        .max-w-xl-15px {
            max-width: 15px !important; }
        .w-xl-20px {
            width: 20px !important; }
        .h-xl-20px {
            height: 20px !important; }
        .min-w-xl-20px {
            min-width: 20px !important; }
        .min-h-xl-20px {
            min-height: 20px !important; }
        .max-h-xl-20px {
            max-height: 20px !important; }
        .max-w-xl-20px {
            max-width: 20px !important; }
        .w-xl-25px {
            width: 25px !important; }
        .h-xl-25px {
            height: 25px !important; }
        .min-w-xl-25px {
            min-width: 25px !important; }
        .min-h-xl-25px {
            min-height: 25px !important; }
        .max-h-xl-25px {
            max-height: 25px !important; }
        .max-w-xl-25px {
            max-width: 25px !important; }
        .w-xl-30px {
            width: 30px !important; }
        .h-xl-30px {
            height: 30px !important; }
        .min-w-xl-30px {
            min-width: 30px !important; }
        .min-h-xl-30px {
            min-height: 30px !important; }
        .max-h-xl-30px {
            max-height: 30px !important; }
        .max-w-xl-30px {
            max-width: 30px !important; }
        .w-xl-35px {
            width: 35px !important; }
        .h-xl-35px {
            height: 35px !important; }
        .min-w-xl-35px {
            min-width: 35px !important; }
        .min-h-xl-35px {
            min-height: 35px !important; }
        .max-h-xl-35px {
            max-height: 35px !important; }
        .max-w-xl-35px {
            max-width: 35px !important; }
        .w-xl-40px {
            width: 40px !important; }
        .h-xl-40px {
            height: 40px !important; }
        .min-w-xl-40px {
            min-width: 40px !important; }
        .min-h-xl-40px {
            min-height: 40px !important; }
        .max-h-xl-40px {
            max-height: 40px !important; }
        .max-w-xl-40px {
            max-width: 40px !important; }
        .w-xl-45px {
            width: 45px !important; }
        .h-xl-45px {
            height: 45px !important; }
        .min-w-xl-45px {
            min-width: 45px !important; }
        .min-h-xl-45px {
            min-height: 45px !important; }
        .max-h-xl-45px {
            max-height: 45px !important; }
        .max-w-xl-45px {
            max-width: 45px !important; }
        .w-xl-50px {
            width: 50px !important; }
        .h-xl-50px {
            height: 50px !important; }
        .min-w-xl-50px {
            min-width: 50px !important; }
        .min-h-xl-50px {
            min-height: 50px !important; }
        .max-h-xl-50px {
            max-height: 50px !important; }
        .max-w-xl-50px {
            max-width: 50px !important; }
        .w-xl-55px {
            width: 55px !important; }
        .h-xl-55px {
            height: 55px !important; }
        .min-w-xl-55px {
            min-width: 55px !important; }
        .min-h-xl-55px {
            min-height: 55px !important; }
        .max-h-xl-55px {
            max-height: 55px !important; }
        .max-w-xl-55px {
            max-width: 55px !important; }
        .w-xl-60px {
            width: 60px !important; }
        .h-xl-60px {
            height: 60px !important; }
        .min-w-xl-60px {
            min-width: 60px !important; }
        .min-h-xl-60px {
            min-height: 60px !important; }
        .max-h-xl-60px {
            max-height: 60px !important; }
        .max-w-xl-60px {
            max-width: 60px !important; }
        .w-xl-65px {
            width: 65px !important; }
        .h-xl-65px {
            height: 65px !important; }
        .min-w-xl-65px {
            min-width: 65px !important; }
        .min-h-xl-65px {
            min-height: 65px !important; }
        .max-h-xl-65px {
            max-height: 65px !important; }
        .max-w-xl-65px {
            max-width: 65px !important; }
        .w-xl-70px {
            width: 70px !important; }
        .h-xl-70px {
            height: 70px !important; }
        .min-w-xl-70px {
            min-width: 70px !important; }
        .min-h-xl-70px {
            min-height: 70px !important; }
        .max-h-xl-70px {
            max-height: 70px !important; }
        .max-w-xl-70px {
            max-width: 70px !important; }
        .w-xl-75px {
            width: 75px !important; }
        .h-xl-75px {
            height: 75px !important; }
        .min-w-xl-75px {
            min-width: 75px !important; }
        .min-h-xl-75px {
            min-height: 75px !important; }
        .max-h-xl-75px {
            max-height: 75px !important; }
        .max-w-xl-75px {
            max-width: 75px !important; }
        .w-xl-80px {
            width: 80px !important; }
        .h-xl-80px {
            height: 80px !important; }
        .min-w-xl-80px {
            min-width: 80px !important; }
        .min-h-xl-80px {
            min-height: 80px !important; }
        .max-h-xl-80px {
            max-height: 80px !important; }
        .max-w-xl-80px {
            max-width: 80px !important; }
        .w-xl-85px {
            width: 85px !important; }
        .h-xl-85px {
            height: 85px !important; }
        .min-w-xl-85px {
            min-width: 85px !important; }
        .min-h-xl-85px {
            min-height: 85px !important; }
        .max-h-xl-85px {
            max-height: 85px !important; }
        .max-w-xl-85px {
            max-width: 85px !important; }
        .w-xl-90px {
            width: 90px !important; }
        .h-xl-90px {
            height: 90px !important; }
        .min-w-xl-90px {
            min-width: 90px !important; }
        .min-h-xl-90px {
            min-height: 90px !important; }
        .max-h-xl-90px {
            max-height: 90px !important; }
        .max-w-xl-90px {
            max-width: 90px !important; }
        .w-xl-95px {
            width: 95px !important; }
        .h-xl-95px {
            height: 95px !important; }
        .min-w-xl-95px {
            min-width: 95px !important; }
        .min-h-xl-95px {
            min-height: 95px !important; }
        .max-h-xl-95px {
            max-height: 95px !important; }
        .max-w-xl-95px {
            max-width: 95px !important; }
        .w-xl-100px {
            width: 100px !important; }
        .h-xl-100px {
            height: 100px !important; }
        .min-w-xl-100px {
            min-width: 100px !important; }
        .min-h-xl-100px {
            min-height: 100px !important; }
        .max-h-xl-100px {
            max-height: 100px !important; }
        .max-w-xl-100px {
            max-width: 100px !important; }
        .w-xl-105px {
            width: 105px !important; }
        .h-xl-105px {
            height: 105px !important; }
        .min-w-xl-105px {
            min-width: 105px !important; }
        .min-h-xl-105px {
            min-height: 105px !important; }
        .max-h-xl-105px {
            max-height: 105px !important; }
        .max-w-xl-105px {
            max-width: 105px !important; }
        .w-xl-110px {
            width: 110px !important; }
        .h-xl-110px {
            height: 110px !important; }
        .min-w-xl-110px {
            min-width: 110px !important; }
        .min-h-xl-110px {
            min-height: 110px !important; }
        .max-h-xl-110px {
            max-height: 110px !important; }
        .max-w-xl-110px {
            max-width: 110px !important; }
        .w-xl-115px {
            width: 115px !important; }
        .h-xl-115px {
            height: 115px !important; }
        .min-w-xl-115px {
            min-width: 115px !important; }
        .min-h-xl-115px {
            min-height: 115px !important; }
        .max-h-xl-115px {
            max-height: 115px !important; }
        .max-w-xl-115px {
            max-width: 115px !important; }
        .w-xl-120px {
            width: 120px !important; }
        .h-xl-120px {
            height: 120px !important; }
        .min-w-xl-120px {
            min-width: 120px !important; }
        .min-h-xl-120px {
            min-height: 120px !important; }
        .max-h-xl-120px {
            max-height: 120px !important; }
        .max-w-xl-120px {
            max-width: 120px !important; }
        .w-xl-125px {
            width: 125px !important; }
        .h-xl-125px {
            height: 125px !important; }
        .min-w-xl-125px {
            min-width: 125px !important; }
        .min-h-xl-125px {
            min-height: 125px !important; }
        .max-h-xl-125px {
            max-height: 125px !important; }
        .max-w-xl-125px {
            max-width: 125px !important; }
        .w-xl-130px {
            width: 130px !important; }
        .h-xl-130px {
            height: 130px !important; }
        .min-w-xl-130px {
            min-width: 130px !important; }
        .min-h-xl-130px {
            min-height: 130px !important; }
        .max-h-xl-130px {
            max-height: 130px !important; }
        .max-w-xl-130px {
            max-width: 130px !important; }
        .w-xl-135px {
            width: 135px !important; }
        .h-xl-135px {
            height: 135px !important; }
        .min-w-xl-135px {
            min-width: 135px !important; }
        .min-h-xl-135px {
            min-height: 135px !important; }
        .max-h-xl-135px {
            max-height: 135px !important; }
        .max-w-xl-135px {
            max-width: 135px !important; }
        .w-xl-140px {
            width: 140px !important; }
        .h-xl-140px {
            height: 140px !important; }
        .min-w-xl-140px {
            min-width: 140px !important; }
        .min-h-xl-140px {
            min-height: 140px !important; }
        .max-h-xl-140px {
            max-height: 140px !important; }
        .max-w-xl-140px {
            max-width: 140px !important; }
        .w-xl-145px {
            width: 145px !important; }
        .h-xl-145px {
            height: 145px !important; }
        .min-w-xl-145px {
            min-width: 145px !important; }
        .min-h-xl-145px {
            min-height: 145px !important; }
        .max-h-xl-145px {
            max-height: 145px !important; }
        .max-w-xl-145px {
            max-width: 145px !important; }
        .w-xl-150px {
            width: 150px !important; }
        .h-xl-150px {
            height: 150px !important; }
        .min-w-xl-150px {
            min-width: 150px !important; }
        .min-h-xl-150px {
            min-height: 150px !important; }
        .max-h-xl-150px {
            max-height: 150px !important; }
        .max-w-xl-150px {
            max-width: 150px !important; }
        .w-xl-175px {
            width: 175px !important; }
        .h-xl-175px {
            height: 175px !important; }
        .min-w-xl-175px {
            min-width: 175px !important; }
        .min-h-xl-175px {
            min-height: 175px !important; }
        .max-h-xl-175px {
            max-height: 175px !important; }
        .max-w-xl-175px {
            max-width: 175px !important; }
        .w-xl-180px {
            width: 180px !important; }
        .h-xl-180px {
            height: 180px !important; }
        .min-w-xl-180px {
            min-width: 180px !important; }
        .min-h-xl-180px {
            min-height: 180px !important; }
        .max-h-xl-180px {
            max-height: 180px !important; }
        .max-w-xl-180px {
            max-width: 180px !important; }
        .w-xl-200px {
            width: 200px !important; }
        .h-xl-200px {
            height: 200px !important; }
        .min-w-xl-200px {
            min-width: 200px !important; }
        .min-h-xl-200px {
            min-height: 200px !important; }
        .max-h-xl-200px {
            max-height: 200px !important; }
        .max-w-xl-200px {
            max-width: 200px !important; }
        .w-xl-225px {
            width: 225px !important; }
        .h-xl-225px {
            height: 225px !important; }
        .min-w-xl-225px {
            min-width: 225px !important; }
        .min-h-xl-225px {
            min-height: 225px !important; }
        .max-h-xl-225px {
            max-height: 225px !important; }
        .max-w-xl-225px {
            max-width: 225px !important; }
        .w-xl-250px {
            width: 250px !important; }
        .h-xl-250px {
            height: 250px !important; }
        .min-w-xl-250px {
            min-width: 250px !important; }
        .min-h-xl-250px {
            min-height: 250px !important; }
        .max-h-xl-250px {
            max-height: 250px !important; }
        .max-w-xl-250px {
            max-width: 250px !important; }
        .w-xl-255px {
            width: 255px !important; }
        .h-xl-255px {
            height: 255px !important; }
        .min-w-xl-255px {
            min-width: 255px !important; }
        .min-h-xl-255px {
            min-height: 255px !important; }
        .max-h-xl-255px {
            max-height: 255px !important; }
        .max-w-xl-255px {
            max-width: 255px !important; }
        .w-xl-260px {
            width: 260px !important; }
        .h-xl-260px {
            height: 260px !important; }
        .min-w-xl-260px {
            min-width: 260px !important; }
        .min-h-xl-260px {
            min-height: 260px !important; }
        .max-h-xl-260px {
            max-height: 260px !important; }
        .max-w-xl-260px {
            max-width: 260px !important; }
        .w-xl-265px {
            width: 265px !important; }
        .h-xl-265px {
            height: 265px !important; }
        .min-w-xl-265px {
            min-width: 265px !important; }
        .min-h-xl-265px {
            min-height: 265px !important; }
        .max-h-xl-265px {
            max-height: 265px !important; }
        .max-w-xl-265px {
            max-width: 265px !important; }
        .w-xl-275px {
            width: 275px !important; }
        .h-xl-275px {
            height: 275px !important; }
        .min-w-xl-275px {
            min-width: 275px !important; }
        .min-h-xl-275px {
            min-height: 275px !important; }
        .max-h-xl-275px {
            max-height: 275px !important; }
        .max-w-xl-275px {
            max-width: 275px !important; }
        .w-xl-295px {
            width: 295px !important; }
        .h-xl-295px {
            height: 295px !important; }
        .min-w-xl-295px {
            min-width: 295px !important; }
        .min-h-xl-295px {
            min-height: 295px !important; }
        .max-h-xl-295px {
            max-height: 295px !important; }
        .max-w-xl-295px {
            max-width: 295px !important; }
        .w-xl-300px {
            width: 300px !important; }
        .h-xl-300px {
            height: 300px !important; }
        .min-w-xl-300px {
            min-width: 300px !important; }
        .min-h-xl-300px {
            min-height: 300px !important; }
        .max-h-xl-300px {
            max-height: 300px !important; }
        .max-w-xl-300px {
            max-width: 300px !important; }
        .w-xl-325px {
            width: 325px !important; }
        .h-xl-325px {
            height: 325px !important; }
        .min-w-xl-325px {
            min-width: 325px !important; }
        .min-h-xl-325px {
            min-height: 325px !important; }
        .max-h-xl-325px {
            max-height: 325px !important; }
        .max-w-xl-325px {
            max-width: 325px !important; }
        .w-xl-350px {
            width: 350px !important; }
        .h-xl-350px {
            height: 350px !important; }
        .min-w-xl-350px {
            min-width: 350px !important; }
        .min-h-xl-350px {
            min-height: 350px !important; }
        .max-h-xl-350px {
            max-height: 350px !important; }
        .max-w-xl-350px {
            max-width: 350px !important; }
        .w-xl-375px {
            width: 375px !important; }
        .h-xl-375px {
            height: 375px !important; }
        .min-w-xl-375px {
            min-width: 375px !important; }
        .min-h-xl-375px {
            min-height: 375px !important; }
        .max-h-xl-375px {
            max-height: 375px !important; }
        .max-w-xl-375px {
            max-width: 375px !important; }
        .w-xl-400px {
            width: 400px !important; }
        .h-xl-400px {
            height: 400px !important; }
        .min-w-xl-400px {
            min-width: 400px !important; }
        .min-h-xl-400px {
            min-height: 400px !important; }
        .max-h-xl-400px {
            max-height: 400px !important; }
        .max-w-xl-400px {
            max-width: 400px !important; }
        .w-xl-425px {
            width: 425px !important; }
        .h-xl-425px {
            height: 425px !important; }
        .min-w-xl-425px {
            min-width: 425px !important; }
        .min-h-xl-425px {
            min-height: 425px !important; }
        .max-h-xl-425px {
            max-height: 425px !important; }
        .max-w-xl-425px {
            max-width: 425px !important; }
        .w-xl-450px {
            width: 450px !important; }
        .h-xl-450px {
            height: 450px !important; }
        .min-w-xl-450px {
            min-width: 450px !important; }
        .min-h-xl-450px {
            min-height: 450px !important; }
        .max-h-xl-450px {
            max-height: 450px !important; }
        .max-w-xl-450px {
            max-width: 450px !important; }
        .w-xl-475px {
            width: 475px !important; }
        .h-xl-475px {
            height: 475px !important; }
        .min-w-xl-475px {
            min-width: 475px !important; }
        .min-h-xl-475px {
            min-height: 475px !important; }
        .max-h-xl-475px {
            max-height: 475px !important; }
        .max-w-xl-475px {
            max-width: 475px !important; }
        .w-xl-500px {
            width: 500px !important; }
        .h-xl-500px {
            height: 500px !important; }
        .min-w-xl-500px {
            min-width: 500px !important; }
        .min-h-xl-500px {
            min-height: 500px !important; }
        .max-h-xl-500px {
            max-height: 500px !important; }
        .max-w-xl-500px {
            max-width: 500px !important; }
        .w-xl-550px {
            width: 550px !important; }
        .h-xl-550px {
            height: 550px !important; }
        .min-w-xl-550px {
            min-width: 550px !important; }
        .min-h-xl-550px {
            min-height: 550px !important; }
        .max-h-xl-550px {
            max-height: 550px !important; }
        .max-w-xl-550px {
            max-width: 550px !important; }
        .w-xl-600px {
            width: 600px !important; }
        .h-xl-600px {
            height: 600px !important; }
        .min-w-xl-600px {
            min-width: 600px !important; }
        .min-h-xl-600px {
            min-height: 600px !important; }
        .max-h-xl-600px {
            max-height: 600px !important; }
        .max-w-xl-600px {
            max-width: 600px !important; }
        .w-xl-650px {
            width: 650px !important; }
        .h-xl-650px {
            height: 650px !important; }
        .min-w-xl-650px {
            min-width: 650px !important; }
        .min-h-xl-650px {
            min-height: 650px !important; }
        .max-h-xl-650px {
            max-height: 650px !important; }
        .max-w-xl-650px {
            max-width: 650px !important; }
        .w-xl-700px {
            width: 700px !important; }
        .h-xl-700px {
            height: 700px !important; }
        .min-w-xl-700px {
            min-width: 700px !important; }
        .min-h-xl-700px {
            min-height: 700px !important; }
        .max-h-xl-700px {
            max-height: 700px !important; }
        .max-w-xl-700px {
            max-width: 700px !important; }
        .w-xl-750px {
            width: 750px !important; }
        .h-xl-750px {
            height: 750px !important; }
        .min-w-xl-750px {
            min-width: 750px !important; }
        .min-h-xl-750px {
            min-height: 750px !important; }
        .max-h-xl-750px {
            max-height: 750px !important; }
        .max-w-xl-750px {
            max-width: 750px !important; }
        .w-xl-800px {
            width: 800px !important; }
        .h-xl-800px {
            height: 800px !important; }
        .min-w-xl-800px {
            min-width: 800px !important; }
        .min-h-xl-800px {
            min-height: 800px !important; }
        .max-h-xl-800px {
            max-height: 800px !important; }
        .max-w-xl-800px {
            max-width: 800px !important; }
        .w-xl-850px {
            width: 850px !important; }
        .h-xl-850px {
            height: 850px !important; }
        .min-w-xl-850px {
            min-width: 850px !important; }
        .min-h-xl-850px {
            min-height: 850px !important; }
        .max-h-xl-850px {
            max-height: 850px !important; }
        .max-w-xl-850px {
            max-width: 850px !important; }
        .w-xl-900px {
            width: 900px !important; }
        .h-xl-900px {
            height: 900px !important; }
        .min-w-xl-900px {
            min-width: 900px !important; }
        .min-h-xl-900px {
            min-height: 900px !important; }
        .max-h-xl-900px {
            max-height: 900px !important; }
        .max-w-xl-900px {
            max-width: 900px !important; }
        .w-xl-950px {
            width: 950px !important; }
        .h-xl-950px {
            height: 950px !important; }
        .min-w-xl-950px {
            min-width: 950px !important; }
        .min-h-xl-950px {
            min-height: 950px !important; }
        .max-h-xl-950px {
            max-height: 950px !important; }
        .max-w-xl-950px {
            max-width: 950px !important; }
        .w-xl-1000px {
            width: 1000px !important; }
        .h-xl-1000px {
            height: 1000px !important; }
        .min-w-xl-1000px {
            min-width: 1000px !important; }
        .min-h-xl-1000px {
            min-height: 1000px !important; }
        .max-h-xl-1000px {
            max-height: 1000px !important; }
        .max-w-xl-1000px {
            max-width: 1000px !important; } }

        @media (min-width: 1400px) {
        .w-xxl-auto {
            width: auto !important; }
        .h-xxl-auto {
            height: auto !important; }
        .min-w-xxl-auto {
            min-width: auto !important; }
        .min-h-xxl-auto {
            min-height: auto !important; }
        .max-h-xxl-auto {
            max-height: auto !important; }
        .max-w-xxl-auto {
            max-width: auto !important; }
        .w-xxl-1px {
            width: 1px !important; }
        .h-xxl-1px {
            height: 1px !important; }
        .min-w-xxl-1px {
            min-width: 1px !important; }
        .min-h-xxl-1px {
            min-height: 1px !important; }
        .max-h-xxl-1px {
            max-height: 1px !important; }
        .max-w-xxl-1px {
            max-width: 1px !important; }
        .w-xxl-2px {
            width: 2px !important; }
        .h-xxl-2px {
            height: 2px !important; }
        .min-w-xxl-2px {
            min-width: 2px !important; }
        .min-h-xxl-2px {
            min-height: 2px !important; }
        .max-h-xxl-2px {
            max-height: 2px !important; }
        .max-w-xxl-2px {
            max-width: 2px !important; }
        .w-xxl-3px {
            width: 3px !important; }
        .h-xxl-3px {
            height: 3px !important; }
        .min-w-xxl-3px {
            min-width: 3px !important; }
        .min-h-xxl-3px {
            min-height: 3px !important; }
        .max-h-xxl-3px {
            max-height: 3px !important; }
        .max-w-xxl-3px {
            max-width: 3px !important; }
        .w-xxl-4px {
            width: 4px !important; }
        .h-xxl-4px {
            height: 4px !important; }
        .min-w-xxl-4px {
            min-width: 4px !important; }
        .min-h-xxl-4px {
            min-height: 4px !important; }
        .max-h-xxl-4px {
            max-height: 4px !important; }
        .max-w-xxl-4px {
            max-width: 4px !important; }
        .w-xxl-5px {
            width: 5px !important; }
        .h-xxl-5px {
            height: 5px !important; }
        .min-w-xxl-5px {
            min-width: 5px !important; }
        .min-h-xxl-5px {
            min-height: 5px !important; }
        .max-h-xxl-5px {
            max-height: 5px !important; }
        .max-w-xxl-5px {
            max-width: 5px !important; }
        .w-xxl-10px {
            width: 10px !important; }
        .h-xxl-10px {
            height: 10px !important; }
        .min-w-xxl-10px {
            min-width: 10px !important; }
        .min-h-xxl-10px {
            min-height: 10px !important; }
        .max-h-xxl-10px {
            max-height: 10px !important; }
        .max-w-xxl-10px {
            max-width: 10px !important; }
        .w-xxl-15px {
            width: 15px !important; }
        .h-xxl-15px {
            height: 15px !important; }
        .min-w-xxl-15px {
            min-width: 15px !important; }
        .min-h-xxl-15px {
            min-height: 15px !important; }
        .max-h-xxl-15px {
            max-height: 15px !important; }
        .max-w-xxl-15px {
            max-width: 15px !important; }
        .w-xxl-20px {
            width: 20px !important; }
        .h-xxl-20px {
            height: 20px !important; }
        .min-w-xxl-20px {
            min-width: 20px !important; }
        .min-h-xxl-20px {
            min-height: 20px !important; }
        .max-h-xxl-20px {
            max-height: 20px !important; }
        .max-w-xxl-20px {
            max-width: 20px !important; }
        .w-xxl-25px {
            width: 25px !important; }
        .h-xxl-25px {
            height: 25px !important; }
        .min-w-xxl-25px {
            min-width: 25px !important; }
        .min-h-xxl-25px {
            min-height: 25px !important; }
        .max-h-xxl-25px {
            max-height: 25px !important; }
        .max-w-xxl-25px {
            max-width: 25px !important; }
        .w-xxl-30px {
            width: 30px !important; }
        .h-xxl-30px {
            height: 30px !important; }
        .min-w-xxl-30px {
            min-width: 30px !important; }
        .min-h-xxl-30px {
            min-height: 30px !important; }
        .max-h-xxl-30px {
            max-height: 30px !important; }
        .max-w-xxl-30px {
            max-width: 30px !important; }
        .w-xxl-35px {
            width: 35px !important; }
        .h-xxl-35px {
            height: 35px !important; }
        .min-w-xxl-35px {
            min-width: 35px !important; }
        .min-h-xxl-35px {
            min-height: 35px !important; }
        .max-h-xxl-35px {
            max-height: 35px !important; }
        .max-w-xxl-35px {
            max-width: 35px !important; }
        .w-xxl-40px {
            width: 40px !important; }
        .h-xxl-40px {
            height: 40px !important; }
        .min-w-xxl-40px {
            min-width: 40px !important; }
        .min-h-xxl-40px {
            min-height: 40px !important; }
        .max-h-xxl-40px {
            max-height: 40px !important; }
        .max-w-xxl-40px {
            max-width: 40px !important; }
        .w-xxl-45px {
            width: 45px !important; }
        .h-xxl-45px {
            height: 45px !important; }
        .min-w-xxl-45px {
            min-width: 45px !important; }
        .min-h-xxl-45px {
            min-height: 45px !important; }
        .max-h-xxl-45px {
            max-height: 45px !important; }
        .max-w-xxl-45px {
            max-width: 45px !important; }
        .w-xxl-50px {
            width: 50px !important; }
        .h-xxl-50px {
            height: 50px !important; }
        .min-w-xxl-50px {
            min-width: 50px !important; }
        .min-h-xxl-50px {
            min-height: 50px !important; }
        .max-h-xxl-50px {
            max-height: 50px !important; }
        .max-w-xxl-50px {
            max-width: 50px !important; }
        .w-xxl-55px {
            width: 55px !important; }
        .h-xxl-55px {
            height: 55px !important; }
        .min-w-xxl-55px {
            min-width: 55px !important; }
        .min-h-xxl-55px {
            min-height: 55px !important; }
        .max-h-xxl-55px {
            max-height: 55px !important; }
        .max-w-xxl-55px {
            max-width: 55px !important; }
        .w-xxl-60px {
            width: 60px !important; }
        .h-xxl-60px {
            height: 60px !important; }
        .min-w-xxl-60px {
            min-width: 60px !important; }
        .min-h-xxl-60px {
            min-height: 60px !important; }
        .max-h-xxl-60px {
            max-height: 60px !important; }
        .max-w-xxl-60px {
            max-width: 60px !important; }
        .w-xxl-65px {
            width: 65px !important; }
        .h-xxl-65px {
            height: 65px !important; }
        .min-w-xxl-65px {
            min-width: 65px !important; }
        .min-h-xxl-65px {
            min-height: 65px !important; }
        .max-h-xxl-65px {
            max-height: 65px !important; }
        .max-w-xxl-65px {
            max-width: 65px !important; }
        .w-xxl-70px {
            width: 70px !important; }
        .h-xxl-70px {
            height: 70px !important; }
        .min-w-xxl-70px {
            min-width: 70px !important; }
        .min-h-xxl-70px {
            min-height: 70px !important; }
        .max-h-xxl-70px {
            max-height: 70px !important; }
        .max-w-xxl-70px {
            max-width: 70px !important; }
        .w-xxl-75px {
            width: 75px !important; }
        .h-xxl-75px {
            height: 75px !important; }
        .min-w-xxl-75px {
            min-width: 75px !important; }
        .min-h-xxl-75px {
            min-height: 75px !important; }
        .max-h-xxl-75px {
            max-height: 75px !important; }
        .max-w-xxl-75px {
            max-width: 75px !important; }
        .w-xxl-80px {
            width: 80px !important; }
        .h-xxl-80px {
            height: 80px !important; }
        .min-w-xxl-80px {
            min-width: 80px !important; }
        .min-h-xxl-80px {
            min-height: 80px !important; }
        .max-h-xxl-80px {
            max-height: 80px !important; }
        .max-w-xxl-80px {
            max-width: 80px !important; }
        .w-xxl-85px {
            width: 85px !important; }
        .h-xxl-85px {
            height: 85px !important; }
        .min-w-xxl-85px {
            min-width: 85px !important; }
        .min-h-xxl-85px {
            min-height: 85px !important; }
        .max-h-xxl-85px {
            max-height: 85px !important; }
        .max-w-xxl-85px {
            max-width: 85px !important; }
        .w-xxl-90px {
            width: 90px !important; }
        .h-xxl-90px {
            height: 90px !important; }
        .min-w-xxl-90px {
            min-width: 90px !important; }
        .min-h-xxl-90px {
            min-height: 90px !important; }
        .max-h-xxl-90px {
            max-height: 90px !important; }
        .max-w-xxl-90px {
            max-width: 90px !important; }
        .w-xxl-95px {
            width: 95px !important; }
        .h-xxl-95px {
            height: 95px !important; }
        .min-w-xxl-95px {
            min-width: 95px !important; }
        .min-h-xxl-95px {
            min-height: 95px !important; }
        .max-h-xxl-95px {
            max-height: 95px !important; }
        .max-w-xxl-95px {
            max-width: 95px !important; }
        .w-xxl-100px {
            width: 100px !important; }
        .h-xxl-100px {
            height: 100px !important; }
        .min-w-xxl-100px {
            min-width: 100px !important; }
        .min-h-xxl-100px {
            min-height: 100px !important; }
        .max-h-xxl-100px {
            max-height: 100px !important; }
        .max-w-xxl-100px {
            max-width: 100px !important; }
        .w-xxl-105px {
            width: 105px !important; }
        .h-xxl-105px {
            height: 105px !important; }
        .min-w-xxl-105px {
            min-width: 105px !important; }
        .min-h-xxl-105px {
            min-height: 105px !important; }
        .max-h-xxl-105px {
            max-height: 105px !important; }
        .max-w-xxl-105px {
            max-width: 105px !important; }
        .w-xxl-110px {
            width: 110px !important; }
        .h-xxl-110px {
            height: 110px !important; }
        .min-w-xxl-110px {
            min-width: 110px !important; }
        .min-h-xxl-110px {
            min-height: 110px !important; }
        .max-h-xxl-110px {
            max-height: 110px !important; }
        .max-w-xxl-110px {
            max-width: 110px !important; }
        .w-xxl-115px {
            width: 115px !important; }
        .h-xxl-115px {
            height: 115px !important; }
        .min-w-xxl-115px {
            min-width: 115px !important; }
        .min-h-xxl-115px {
            min-height: 115px !important; }
        .max-h-xxl-115px {
            max-height: 115px !important; }
        .max-w-xxl-115px {
            max-width: 115px !important; }
        .w-xxl-120px {
            width: 120px !important; }
        .h-xxl-120px {
            height: 120px !important; }
        .min-w-xxl-120px {
            min-width: 120px !important; }
        .min-h-xxl-120px {
            min-height: 120px !important; }
        .max-h-xxl-120px {
            max-height: 120px !important; }
        .max-w-xxl-120px {
            max-width: 120px !important; }
        .w-xxl-125px {
            width: 125px !important; }
        .h-xxl-125px {
            height: 125px !important; }
        .min-w-xxl-125px {
            min-width: 125px !important; }
        .min-h-xxl-125px {
            min-height: 125px !important; }
        .max-h-xxl-125px {
            max-height: 125px !important; }
        .max-w-xxl-125px {
            max-width: 125px !important; }
        .w-xxl-130px {
            width: 130px !important; }
        .h-xxl-130px {
            height: 130px !important; }
        .min-w-xxl-130px {
            min-width: 130px !important; }
        .min-h-xxl-130px {
            min-height: 130px !important; }
        .max-h-xxl-130px {
            max-height: 130px !important; }
        .max-w-xxl-130px {
            max-width: 130px !important; }
        .w-xxl-135px {
            width: 135px !important; }
        .h-xxl-135px {
            height: 135px !important; }
        .min-w-xxl-135px {
            min-width: 135px !important; }
        .min-h-xxl-135px {
            min-height: 135px !important; }
        .max-h-xxl-135px {
            max-height: 135px !important; }
        .max-w-xxl-135px {
            max-width: 135px !important; }
        .w-xxl-140px {
            width: 140px !important; }
        .h-xxl-140px {
            height: 140px !important; }
        .min-w-xxl-140px {
            min-width: 140px !important; }
        .min-h-xxl-140px {
            min-height: 140px !important; }
        .max-h-xxl-140px {
            max-height: 140px !important; }
        .max-w-xxl-140px {
            max-width: 140px !important; }
        .w-xxl-145px {
            width: 145px !important; }
        .h-xxl-145px {
            height: 145px !important; }
        .min-w-xxl-145px {
            min-width: 145px !important; }
        .min-h-xxl-145px {
            min-height: 145px !important; }
        .max-h-xxl-145px {
            max-height: 145px !important; }
        .max-w-xxl-145px {
            max-width: 145px !important; }
        .w-xxl-150px {
            width: 150px !important; }
        .h-xxl-150px {
            height: 150px !important; }
        .min-w-xxl-150px {
            min-width: 150px !important; }
        .min-h-xxl-150px {
            min-height: 150px !important; }
        .max-h-xxl-150px {
            max-height: 150px !important; }
        .max-w-xxl-150px {
            max-width: 150px !important; }
        .w-xxl-175px {
            width: 175px !important; }
        .h-xxl-175px {
            height: 175px !important; }
        .min-w-xxl-175px {
            min-width: 175px !important; }
        .min-h-xxl-175px {
            min-height: 175px !important; }
        .max-h-xxl-175px {
            max-height: 175px !important; }
        .max-w-xxl-175px {
            max-width: 175px !important; }
        .w-xxl-180px {
            width: 180px !important; }
        .h-xxl-180px {
            height: 180px !important; }
        .min-w-xxl-180px {
            min-width: 180px !important; }
        .min-h-xxl-180px {
            min-height: 180px !important; }
        .max-h-xxl-180px {
            max-height: 180px !important; }
        .max-w-xxl-180px {
            max-width: 180px !important; }
        .w-xxl-200px {
            width: 200px !important; }
        .h-xxl-200px {
            height: 200px !important; }
        .min-w-xxl-200px {
            min-width: 200px !important; }
        .min-h-xxl-200px {
            min-height: 200px !important; }
        .max-h-xxl-200px {
            max-height: 200px !important; }
        .max-w-xxl-200px {
            max-width: 200px !important; }
        .w-xxl-225px {
            width: 225px !important; }
        .h-xxl-225px {
            height: 225px !important; }
        .min-w-xxl-225px {
            min-width: 225px !important; }
        .min-h-xxl-225px {
            min-height: 225px !important; }
        .max-h-xxl-225px {
            max-height: 225px !important; }
        .max-w-xxl-225px {
            max-width: 225px !important; }
        .w-xxl-250px {
            width: 250px !important; }
        .h-xxl-250px {
            height: 250px !important; }
        .min-w-xxl-250px {
            min-width: 250px !important; }
        .min-h-xxl-250px {
            min-height: 250px !important; }
        .max-h-xxl-250px {
            max-height: 250px !important; }
        .max-w-xxl-250px {
            max-width: 250px !important; }
        .w-xxl-255px {
            width: 255px !important; }
        .h-xxl-255px {
            height: 255px !important; }
        .min-w-xxl-255px {
            min-width: 255px !important; }
        .min-h-xxl-255px {
            min-height: 255px !important; }
        .max-h-xxl-255px {
            max-height: 255px !important; }
        .max-w-xxl-255px {
            max-width: 255px !important; }
        .w-xxl-260px {
            width: 260px !important; }
        .h-xxl-260px {
            height: 260px !important; }
        .min-w-xxl-260px {
            min-width: 260px !important; }
        .min-h-xxl-260px {
            min-height: 260px !important; }
        .max-h-xxl-260px {
            max-height: 260px !important; }
        .max-w-xxl-260px {
            max-width: 260px !important; }
        .w-xxl-265px {
            width: 265px !important; }
        .h-xxl-265px {
            height: 265px !important; }
        .min-w-xxl-265px {
            min-width: 265px !important; }
        .min-h-xxl-265px {
            min-height: 265px !important; }
        .max-h-xxl-265px {
            max-height: 265px !important; }
        .max-w-xxl-265px {
            max-width: 265px !important; }
        .w-xxl-275px {
            width: 275px !important; }
        .h-xxl-275px {
            height: 275px !important; }
        .min-w-xxl-275px {
            min-width: 275px !important; }
        .min-h-xxl-275px {
            min-height: 275px !important; }
        .max-h-xxl-275px {
            max-height: 275px !important; }
        .max-w-xxl-275px {
            max-width: 275px !important; }
        .w-xxl-295px {
            width: 295px !important; }
        .h-xxl-295px {
            height: 295px !important; }
        .min-w-xxl-295px {
            min-width: 295px !important; }
        .min-h-xxl-295px {
            min-height: 295px !important; }
        .max-h-xxl-295px {
            max-height: 295px !important; }
        .max-w-xxl-295px {
            max-width: 295px !important; }
        .w-xxl-300px {
            width: 300px !important; }
        .h-xxl-300px {
            height: 300px !important; }
        .min-w-xxl-300px {
            min-width: 300px !important; }
        .min-h-xxl-300px {
            min-height: 300px !important; }
        .max-h-xxl-300px {
            max-height: 300px !important; }
        .max-w-xxl-300px {
            max-width: 300px !important; }
        .w-xxl-325px {
            width: 325px !important; }
        .h-xxl-325px {
            height: 325px !important; }
        .min-w-xxl-325px {
            min-width: 325px !important; }
        .min-h-xxl-325px {
            min-height: 325px !important; }
        .max-h-xxl-325px {
            max-height: 325px !important; }
        .max-w-xxl-325px {
            max-width: 325px !important; }
        .w-xxl-350px {
            width: 350px !important; }
        .h-xxl-350px {
            height: 350px !important; }
        .min-w-xxl-350px {
            min-width: 350px !important; }
        .min-h-xxl-350px {
            min-height: 350px !important; }
        .max-h-xxl-350px {
            max-height: 350px !important; }
        .max-w-xxl-350px {
            max-width: 350px !important; }
        .w-xxl-375px {
            width: 375px !important; }
        .h-xxl-375px {
            height: 375px !important; }
        .min-w-xxl-375px {
            min-width: 375px !important; }
        .min-h-xxl-375px {
            min-height: 375px !important; }
        .max-h-xxl-375px {
            max-height: 375px !important; }
        .max-w-xxl-375px {
            max-width: 375px !important; }
        .w-xxl-400px {
            width: 400px !important; }
        .h-xxl-400px {
            height: 400px !important; }
        .min-w-xxl-400px {
            min-width: 400px !important; }
        .min-h-xxl-400px {
            min-height: 400px !important; }
        .max-h-xxl-400px {
            max-height: 400px !important; }
        .max-w-xxl-400px {
            max-width: 400px !important; }
        .w-xxl-425px {
            width: 425px !important; }
        .h-xxl-425px {
            height: 425px !important; }
        .min-w-xxl-425px {
            min-width: 425px !important; }
        .min-h-xxl-425px {
            min-height: 425px !important; }
        .max-h-xxl-425px {
            max-height: 425px !important; }
        .max-w-xxl-425px {
            max-width: 425px !important; }
        .w-xxl-450px {
            width: 450px !important; }
        .h-xxl-450px {
            height: 450px !important; }
        .min-w-xxl-450px {
            min-width: 450px !important; }
        .min-h-xxl-450px {
            min-height: 450px !important; }
        .max-h-xxl-450px {
            max-height: 450px !important; }
        .max-w-xxl-450px {
            max-width: 450px !important; }
        .w-xxl-475px {
            width: 475px !important; }
        .h-xxl-475px {
            height: 475px !important; }
        .min-w-xxl-475px {
            min-width: 475px !important; }
        .min-h-xxl-475px {
            min-height: 475px !important; }
        .max-h-xxl-475px {
            max-height: 475px !important; }
        .max-w-xxl-475px {
            max-width: 475px !important; }
        .w-xxl-500px {
            width: 500px !important; }
        .h-xxl-500px {
            height: 500px !important; }
        .min-w-xxl-500px {
            min-width: 500px !important; }
        .min-h-xxl-500px {
            min-height: 500px !important; }
        .max-h-xxl-500px {
            max-height: 500px !important; }
        .max-w-xxl-500px {
            max-width: 500px !important; }
        .w-xxl-550px {
            width: 550px !important; }
        .h-xxl-550px {
            height: 550px !important; }
        .min-w-xxl-550px {
            min-width: 550px !important; }
        .min-h-xxl-550px {
            min-height: 550px !important; }
        .max-h-xxl-550px {
            max-height: 550px !important; }
        .max-w-xxl-550px {
            max-width: 550px !important; }
        .w-xxl-600px {
            width: 600px !important; }
        .h-xxl-600px {
            height: 600px !important; }
        .min-w-xxl-600px {
            min-width: 600px !important; }
        .min-h-xxl-600px {
            min-height: 600px !important; }
        .max-h-xxl-600px {
            max-height: 600px !important; }
        .max-w-xxl-600px {
            max-width: 600px !important; }
        .w-xxl-650px {
            width: 650px !important; }
        .h-xxl-650px {
            height: 650px !important; }
        .min-w-xxl-650px {
            min-width: 650px !important; }
        .min-h-xxl-650px {
            min-height: 650px !important; }
        .max-h-xxl-650px {
            max-height: 650px !important; }
        .max-w-xxl-650px {
            max-width: 650px !important; }
        .w-xxl-700px {
            width: 700px !important; }
        .h-xxl-700px {
            height: 700px !important; }
        .min-w-xxl-700px {
            min-width: 700px !important; }
        .min-h-xxl-700px {
            min-height: 700px !important; }
        .max-h-xxl-700px {
            max-height: 700px !important; }
        .max-w-xxl-700px {
            max-width: 700px !important; }
        .w-xxl-750px {
            width: 750px !important; }
        .h-xxl-750px {
            height: 750px !important; }
        .min-w-xxl-750px {
            min-width: 750px !important; }
        .min-h-xxl-750px {
            min-height: 750px !important; }
        .max-h-xxl-750px {
            max-height: 750px !important; }
        .max-w-xxl-750px {
            max-width: 750px !important; }
        .w-xxl-800px {
            width: 800px !important; }
        .h-xxl-800px {
            height: 800px !important; }
        .min-w-xxl-800px {
            min-width: 800px !important; }
        .min-h-xxl-800px {
            min-height: 800px !important; }
        .max-h-xxl-800px {
            max-height: 800px !important; }
        .max-w-xxl-800px {
            max-width: 800px !important; }
        .w-xxl-850px {
            width: 850px !important; }
        .h-xxl-850px {
            height: 850px !important; }
        .min-w-xxl-850px {
            min-width: 850px !important; }
        .min-h-xxl-850px {
            min-height: 850px !important; }
        .max-h-xxl-850px {
            max-height: 850px !important; }
        .max-w-xxl-850px {
            max-width: 850px !important; }
        .w-xxl-900px {
            width: 900px !important; }
        .h-xxl-900px {
            height: 900px !important; }
        .min-w-xxl-900px {
            min-width: 900px !important; }
        .min-h-xxl-900px {
            min-height: 900px !important; }
        .max-h-xxl-900px {
            max-height: 900px !important; }
        .max-w-xxl-900px {
            max-width: 900px !important; }
        .w-xxl-950px {
            width: 950px !important; }
        .h-xxl-950px {
            height: 950px !important; }
        .min-w-xxl-950px {
            min-width: 950px !important; }
        .min-h-xxl-950px {
            min-height: 950px !important; }
        .max-h-xxl-950px {
            max-height: 950px !important; }
        .max-w-xxl-950px {
            max-width: 950px !important; }
        .w-xxl-1000px {
            width: 1000px !important; }
        .h-xxl-1000px {
            height: 1000px !important; }
        .min-w-xxl-1000px {
            min-width: 1000px !important; }
        .min-h-xxl-1000px {
            min-height: 1000px !important; }
        .max-h-xxl-1000px {
            max-height: 1000px !important; }
        .max-w-xxl-1000px {
            max-width: 1000px !important; } }

        .left-0 {
        left: 0 !important; }

        .right-0 {
        right: 0 !important; }

        .top-0 {
        top: 0 !important; }

        .bottom-0 {
        bottom: 0 !important; }

        .zindex-0 {
        z-index: 0; }

        .zindex-n1 {
        z-index: -1; }

        .zindex-1 {
        z-index: 1; }

        .zindex-2 {
        z-index: 2; }

        .text-white {
        color: #ffffff !important; }

        .text-inverse-white {
        color: #3F4254 !important; }

        .text-light-white {
        color: #ffffff !important; }

        .font-size-sm {
        font-size: 0.925rem; }

        .font-size-xs {
        font-size: 0.8rem; }

        .font-size-lg {
        font-size: 1.08rem; }

        .font-size-h1 {
        font-size: 2rem !important; }

        .font-size-h2 {
        font-size: 1.75rem !important; }

        .font-size-h3 {
        font-size: 1.5rem !important; }

        .font-size-h4 {
        font-size: 1.35rem !important; }

        .font-size-h5 {
        font-size: 1.25rem !important; }

        .font-size-h6 {
        font-size: 1.175rem !important; }

        .display1 {
        font-size: 5.5rem !important; }

        .display2 {
        font-size: 4.5rem !important; }

        .display3 {
        font-size: 3.5rem !important; }

        .display4 {
        font-size: 2.5rem !important; }

        .display5 {
        font-size: 2.25rem !important; }

        @media (min-width: 576px) {
        .font-size-h1-sm {
            font-size: 2rem !important; }
        .font-size-h2-sm {
            font-size: 1.75rem !important; }
        .font-size-h3-sm {
            font-size: 1.5rem !important; }
        .font-size-h4-sm {
            font-size: 1.35rem !important; }
        .font-size-h5-sm {
            font-size: 1.25rem !important; }
        .font-size-h6-sm {
            font-size: 1.175rem !important; }
        .display1-sm {
            font-size: 5.5rem !important; }
        .display2-sm {
            font-size: 4.5rem !important; }
        .display3-sm {
            font-size: 3.5rem !important; }
        .display4-sm {
            font-size: 2.5rem !important; }
        .display5-sm {
            font-size: 2.25rem !important; } }

        @media (min-width: 768px) {
        .font-size-h1-md {
            font-size: 2rem !important; }
        .font-size-h2-md {
            font-size: 1.75rem !important; }
        .font-size-h3-md {
            font-size: 1.5rem !important; }
        .font-size-h4-md {
            font-size: 1.35rem !important; }
        .font-size-h5-md {
            font-size: 1.25rem !important; }
        .font-size-h6-md {
            font-size: 1.175rem !important; }
        .display1-md {
            font-size: 5.5rem !important; }
        .display2-md {
            font-size: 4.5rem !important; }
        .display3-md {
            font-size: 3.5rem !important; }
        .display4-md {
            font-size: 2.5rem !important; }
        .display5-md {
            font-size: 2.25rem !important; } }

        @media (min-width: 992px) {
        .font-size-h1-lg {
            font-size: 2rem !important; }
        .font-size-h2-lg {
            font-size: 1.75rem !important; }
        .font-size-h3-lg {
            font-size: 1.5rem !important; }
        .font-size-h4-lg {
            font-size: 1.35rem !important; }
        .font-size-h5-lg {
            font-size: 1.25rem !important; }
        .font-size-h6-lg {
            font-size: 1.175rem !important; }
        .display1-lg {
            font-size: 5.5rem !important; }
        .display2-lg {
            font-size: 4.5rem !important; }
        .display3-lg {
            font-size: 3.5rem !important; }
        .display4-lg {
            font-size: 2.5rem !important; }
        .display5-lg {
            font-size: 2.25rem !important; } }

        @media (min-width: 1200px) {
        .font-size-h1-xl {
            font-size: 2rem !important; }
        .font-size-h2-xl {
            font-size: 1.75rem !important; }
        .font-size-h3-xl {
            font-size: 1.5rem !important; }
        .font-size-h4-xl {
            font-size: 1.35rem !important; }
        .font-size-h5-xl {
            font-size: 1.25rem !important; }
        .font-size-h6-xl {
            font-size: 1.175rem !important; }
        .display1-xl {
            font-size: 5.5rem !important; }
        .display2-xl {
            font-size: 4.5rem !important; }
        .display3-xl {
            font-size: 3.5rem !important; }
        .display4-xl {
            font-size: 2.5rem !important; }
        .display5-xl {
            font-size: 2.25rem !important; } }

        @media (min-width: 1400px) {
        .font-size-h1-xxl {
            font-size: 2rem !important; }
        .font-size-h2-xxl {
            font-size: 1.75rem !important; }
        .font-size-h3-xxl {
            font-size: 1.5rem !important; }
        .font-size-h4-xxl {
            font-size: 1.35rem !important; }
        .font-size-h5-xxl {
            font-size: 1.25rem !important; }
        .font-size-h6-xxl {
            font-size: 1.175rem !important; }
        .display1-xxl {
            font-size: 5.5rem !important; }
        .display2-xxl {
            font-size: 4.5rem !important; }
        .display3-xxl {
            font-size: 3.5rem !important; }
        .display4-xxl {
            font-size: 2.5rem !important; }
        .display5-xxl {
            font-size: 2.25rem !important; } }

        .font-weight-boldest {
        font-weight: 700; }

        .line-height-0 {
        line-height: 0; }

        .line-height-xs {
        line-height: 0.75; }

        .line-height-sm {
        line-height: 1; }

        .line-height-md {
        line-height: 1.25; }

        .line-height-lg {
        line-height: 1.5; }

        .line-height-xl {
        line-height: 1.75; }

        .text-transparent {
        color: transparent; }

    </style> --}}
</head>
<body>
    
    @php
        $field = json_decode($data->field)    
    @endphp

    <div style="width: 80%; margin: 0 auto;" >
        <div class="container bg-white message-content">
            <div class="mail-header">
                <img src="./assets/be/media/desa.png" alt="">
                <p class="goverment" >PEMERINTAH KABUPATEN BADUNG <br>KECAMATAN PETANG</p>
                <p class="village" >DESA GETASAN</p>
                <p class="" >Jalan Tukad Penet No. 14 Getasan, Kec. Petang, Kab. Badung (80353)<br>Telp. 081 353 622 066 Website : menyssusul</p>
            </div>
            <div class="mail-body">
                <p class="mail-type" >
                    <b style="text-transform: uppercase;" ><u>{{ $data->title }}</u></b>
                </p>
                <p class="mail-num" >Nomor : {{ $data->mail_number }}</p>
                <p class="long" >Yang bertanda tangan di bawah ini Kelian Banjar Dinas Ubud, Desa Getasan, Kecamatan Petang, Kabupaten Badung, Provinsi Bali, menerangkan dengan sebenarnya bahwa :</p>
                <table class="family-table" >
                    <tr>
                        <td >1.</td>
                        <td>Nama</td>
                        <td>: {{ $field->child_name }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>jenis kelamin</td>
                        <td>: {{ $field->sex }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Tempat/Tgl.lahir</td>
                        <td>: {{ $field->birthplace }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>NIK</td>
                        <td>: -</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Nomor KK</td>
                        <td>: </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: {{ $field->address }}</td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td >2.</td>
                        <td >Nama Ayah</td>
                        <td>: {{ $field->husband->name }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: {{ $field->husband->age }} tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: {{ $field->husband->job }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: {{ $field->address }}</td>
                    </tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr><td></td></tr>
                    <tr>
                        <td  >3.</td>
                        <td >Nama ibu</td>
                        <td>: {{ $field->wife->name }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Umur</td>
                        <td>: {{ $field->wife->age }} tahun</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pekerjaan</td>
                        <td>: {{ $field->wife->job }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Alamat</td>
                        <td>: {{ $field->address }}</td>
                    </tr>
                </table>
                <p class="long" >Demikian Surat Keterangan Kelahiran ini dibuat dengan sebenarnya sebagai persyaratan untuk melengkapi permohonan Pembuatan Kutipan Akta Kelahiran.</p>
                <p style="text-align: center; margin: 20px 0;" >Saksi Saksi</p>
                <div class="saksi">
                    <table class="saksi-table" >
                        <tr>
                            <td>
                                <table >
                                    <tr>
                                        <td class="w-20px" >1.</td>
                                        <td class="w-115px" >Nama Saksi</td>
                                        <td>: I Putu Antara</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Umur</td>
                                        <td>: 27 tahun</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Pekerjaan</td>
                                        <td>: Karyawan Swasta</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Alamat</td>
                                        <td>: Ubud Getasan</td>
                                    </tr>
                                </table>
                                <p><u >I Wayan Sunarta</u></p>
                            </td>
                            <td>
                                <table >
                                    <tr>
                                        <td class="w-20px" >2.</td>
                                        <td class="w-115px" >Nama Saksi</td>
                                        <td>: I Wayan Sunarta</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Umur</td>
                                        <td>: 27 tahun</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Pekerjaan</td>
                                        <td>: Karyawan Swasta</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Alamat</td>
                                        <td>: Ubud Getasan</td>
                                    </tr>
                                </table>
                                <p><u >I Putu Subawa</u></p>
                            </td>
                        </tr>
                    </table>
                </div>
                <table class="sign-table" >
                    <tr>
                        <td>
                            <p class="m-0" style="text-indent: 0;" >Mengetahui :</p>
                            <table>
                                <tr>
                                    <td>Reg No.</td>
                                    <td>:...................</td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td>:...................</td>
                                </tr>
                            </table>
                            <p style="text-indent: 0; margin-bottom: 50px;" >Perbekel Getasan,</p>
                            @if ($data->status == 'Done')
                            <img style="position: absolute; bottom: 110px; left: 0;" width="290" src="{{ public_path().'/assets/be/media/perbekel.png' }}" alt="">
                            @endif
                            <p style="text-indent: 0; text-align: left;" ><u >I Wayan Suandi, S.Pt</u></p>
                        </td>
                        <td  >
                            <p style="margin-top: 40px; margin-left: 37px;" >Getasan, {{ Carbon\Carbon::now()->format('d F Y') }},</p>
                            <p style="margin-left: 60px; margin-bottom: 65px;" >Kelian Banjar Dinas Ubud</p>
                            <img style="position: absolute; bottom: 110px; right: 10%;" width="290" src="{{ public_path().'/storage/'. $data->image }}" alt="">
                            <p ><u >I Putu Antara</u></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>