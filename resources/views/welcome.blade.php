<!DOCTYPE html>
<html lang="lv">
    <head>
		<title>SPA Salons</title> <!-- Tab loga nosaukums -->
		<meta charset="utf-8"> <!-- Kodējums UTF-8 --> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-big.png') }}"> <!--Tab loga logo pie nosaukuma-->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all"> <!-- pieslēdz css failu -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <style>
        body {font: 16px Arial,Tahoma, sans-serif;}
        div.paragraph{background: #ffffff;}
        div.paragraph p {margin-right: 50px;}
        div.paragraph a {color: #707070;}
        div.paragraph p {text-shadow: 0px 0px 0 #fff;line-height: 2;margin-left: 150px;}
        body {font: 16px Arial,Tahoma, sans-serif;}
        div.header img.leng {float:right;margin-left: 5px;}
        div.navigation a {font-size: 15px;}
        div.nav a.dashboard {margin-left: 280px;}
        div.nav a.register {margin-left: 280px;}
    </style>
    </head>
    <body>
    
    @include('layouts.homeheader')

    @yield('home')
    
    @include('layouts.footer')
    
    </body>
</html>