@extends('pages')
@section('content')
<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section> <!-- Informācijas dalīšana uz atsevišķiem loģiskiem apgabaliem -->
                            <a id="parmums"></a>
                            <img src="{{ asset('images/about.png') }}" alt="Par mums">
                            <h2>Par mums</h2>
                            @foreach($infosF as $infoF)
                            <h3>{{$infoF->Virsraksts}}</h3>
                            <p>{{$infoF->Teksts}}</p>
                            @endforeach
                            @foreach($infosE as $infoE)
                            <h3>{{$infoE->Virsraksts}}</h3>
                            <p>{{$infoE->Teksts}}</p>
                            @endforeach
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection