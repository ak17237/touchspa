<!DOCTYPE html>
<html lang="lv">
    <head>
		<title>SPA Salons</title> <!-- Tab loga nosaukums -->
		<meta charset="utf-8"> <!-- Kodējums UTF-8 --> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="images/logo-big.png"> <!--Tab loga logo pie nosaukuma-->
		<link rel="stylesheet" href="css/style.css" media="all"> <!-- pieslēdz css failu -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <style>
        div.paragraph{background: #ffffff;}
        div.paragraph p {margin-right: 50px;}
        div.paragraph a {color: #707070;}
        img.spaakcija {margin-left: 50px;}
        div.SPAgps {margin-left: 50px;}
        div.GPS {float:left;padding-right: 230px;}
        div.paragraph input {margin-left: 140px;}
        div.send a {font-size: 20px; color: #fff; font-weight: bold;
	background: #b23600; border: 1px solid #862900; padding: 5px 15px;
	border-radius: 3px; box-shadow: 2px 2px 7px -1px #777; text-shadow:0px 0px 3px #752300;margin-left: 385px;}
        div.paragraph h1 {font-size: 35px;margin-left: 30px;}
        div.paragraph a.send-to-homepage {margin-left: 385px;}
        div.watches p{margin-right:200px;}
    </style>
    <body>
    
    @include('layouts.header')

    @yield('content')
    
    @include('layouts.footer')
    
    </body>
</html>
