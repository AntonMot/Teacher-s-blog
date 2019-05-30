<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon (13).ico') }}">


    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <style type="text/css">
        body{
            background-color: #f1e2c5; 
        } 
        h3{
            color: #007bff;
        }
        .bg-dark{
            background-color: #131231!important;
        }
        .footer {  
            border-top: 2px solid #007bff;    
            margin-top: 20px;
            padding: 10px;
            background: #131231;
        }
        .pointer {
            cursor: pointer;
        }
        .img-link img:hover {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -o-transform: scale(1.1);
        }
        .title_header {
            font-family: 'Open Sans Condensed', sans-serif;
            font-size: 5vw;
        }
       .carousel-caption {
            width:100%;
            vertical-align: middle;
            left: 0;
            right: 0;
            margin-bottom: 1%;
            padding: 0;
            background: rgba(19,18,49, 0.65);
            border-top: 1px solid white;
            border-bottom: 1px solid white;
        }
        .modal-title {
            color: #007bff;
        }
    </style>
</head>
<body>

    @include('layouts.partials.header')
    
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
         @include('layouts.partials.navigation')  
    </nav>

    <span style="margin: 10px"></span>

    <main class="container-fluid">
        @yield('content')
    </main>

    @include('layouts.partials.footer')
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script>CKEDITOR.replace('textEd');</script>
</body>
</html>
