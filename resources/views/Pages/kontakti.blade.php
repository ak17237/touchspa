@extends('pages')
@section('content')

<main role="main">
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section> <!-- Informācijas dalīšana uz atsevišķiem loģiskiem apgabaliem -->
                            <h2>Sazinaties ar mums</h2><br>
                            <div class="SPAgps" style="height: 250px; width: 780px;">{!! Mapper::render() !!}</div>
                            <div class="send">
                                <h3>Piesakaties jaunumiem</h3><br>
                                <a href="send">Pieteikties</a>
                            </div>
                            <div class="kontakti">
			<div class="center">
				<div class="GPS">
					<p>Imantā - Kleistu iela 11/1<br>
					Kurzemes rajons, Rīga, LV-1067<br>
					+371 67114709<br>
                                        tt2examacc@gmail.com</p>
				</div>
				<div class="watches">
					<p>P, O, T, C, P: 09:00 - 20:00<br>
					S: 09:00 - 20:00<br>
					Sv: 10:00 - 18:00</p>
				</div>
			</div>
		</div>
                            
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection
