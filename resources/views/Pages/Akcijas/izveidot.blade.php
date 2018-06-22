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
                        <h2>Izveidot piedāvājumu</h2><br>
                        @include('Pages.Akcijas.error')
                        <div class="row">
                            <div class="col-md-12">
                            {!! Form::open(['route' => ['akcija.ierakstīt']]) !!}
                                <div class="form-group">
                                    <input type="text" class="form-control" name="Nosaukums" placeholder="Nosaukums" value="{{old('Nosaukums')}}"><br>
                                    <textarea name="Apraksts" id="" cols="30" rows="10" class="form-control" placeholder="Apraksts">{{old('Apraksts')}}</textarea><br>
                                    <button class="btn btn-success">Iesniegt</button>
                                </div>
                            {!! Form::close() !!}
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