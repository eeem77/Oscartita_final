<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Oscartita C.A.</title>
        <link rel="Shortcut Icon" type="image/x-icon" href="{{asset('images/mecanica.ico')}}"/>
		<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
        <noscript><link rel="stylesheet" type="text/css" href="{{asset('assets/css/noscript.css')}}"></noscript>
    </head>
    <body>

        @yield('content')

        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/skel.min.js')}}"></script>
        <script src="{{asset('assets/js/util.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
