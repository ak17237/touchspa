<!DOCTYPE html>
<html lang="lv">
    <head>
		<title>SPA Salons</title> <!-- Tab loga nosaukums -->
		<meta charset="utf-8"> <!-- Kodējums UTF-8 --> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo-big.png') }}"> <!--Tab loga logo pie nosaukuma-->
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all"> <!-- pieslēdz css failu -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link rel="stylesheet" href="{{ asset('css/pagesstyle.css') }}">
                <link rel="stylesheet" href="{{ asset('css/table.css') }}">
                <script src="{{ asset('js/jquery.min.js') }}"></script>
                <script type="text/javascript" src="{{ asset('js/calculate.js') }}"></script>
                
    </head>
    <body>
    
    @include('layouts.header')

    @yield('content')
    
    @include('layouts.footer')
    
    </body>
</html>
