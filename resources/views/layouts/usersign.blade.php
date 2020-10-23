<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Videostream">
    <meta name="author" content="Nadzim">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" href="{{url('assets/img/logo-icon.png')}}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{url('assets/vendor/fontawesome-free/css/user.all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/osahan.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        @yield('content')
    </div>
</body>
</html>