<!DOCTYPE html>
<html lang="lv">
    <head>
		<title>SPA Salons</title> <!-- Tab loga nosaukums -->
		<meta charset="utf-8"> <!-- Kodējums UTF-8 --> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-big.png') }}"> <!--Tab loga logo pie nosaukuma-->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all"> <!-- pieslēdz css failu -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link rel="stylesheet" href="{{ asset('css/welcomestyle.css') }}">
                <style>
                    div.nav a.dashboard {margin-left: 150px}
                    div.nav a.avatar {margin-left: 338px;}
                    div.nav a.register {margin-left: 150px;}
                </style>
    </head>
    <body>
    
    @include('layouts.homeheader')

    @yield('home')
    
    @include('layouts.footer')
    
    </body>
</html>