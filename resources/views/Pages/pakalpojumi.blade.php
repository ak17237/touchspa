@extends('pages')
@section('content')

<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section>
				<img src="{{ asset('images/pakalpojumi.png') }}" alt="Pakalpojumi">
                                    <h2>Pakalpojumi</h2>
                                        {{$infos->links()}}
                                        @foreach($infos as $info)
                                        <h3>{{$info->Virsraksts}}</h3>
                                        <p>{{$info->Teksts}}</p>
                                        @endforeach
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection