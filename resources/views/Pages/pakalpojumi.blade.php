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
                                    <h2>@lang('messages.services')</h2>
                                    <div class="btn-group">
                                    <a class="btn btn-primary" href="/pakalpojumi/1">@lang('messages.classic_massage')</a>
                                    <a class="btn btn-primary" href="/pakalpojumi/2">@lang('messages.feet_massage')</a>
                                    <a class="btn btn-primary" href="/pakalpojumi/3">@lang('messages.face_massage')</a>
                                    </div>
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