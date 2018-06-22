@extends('pages')
@section('content')
<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section> 
                        <img src="{{ asset('images/akcija.png') }}" alt="Klasiskā masāža">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>{{ $akcija->Nosaukums }}</h3>
                                <p>{{ $akcija->Apraksts }}</p>
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