@extends('pages')
@section('content')

<main role="main">
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section> <!-- Informācijas dalīšana uz atsevišķiem loģiskiem apgabaliem -->
                            <img src="images/akcija.png" alt="Klasiskā masāža">
                            <h2>Īpašais piedāvājums</h2>
                            <h3>Klasiskā masāža ar 50% atlaidi</h3>
                            @foreach($infos as $info)
                            <p>{{$info->Teksts}}</p>
                            @endforeach
                            <img class="spaakcija" src="images/SPAakcija.jpg" alt="Akcija">
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection