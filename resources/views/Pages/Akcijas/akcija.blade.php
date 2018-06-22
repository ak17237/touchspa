@extends('pages')
@section('content')

<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph tabula_akcijas">
			<section> <!-- Informācijas dalīšana uz atsevišķiem loģiskiem apgabaliem -->
                        <img src="{{ asset('images/akcija.png') }}" alt="Klasiskā masāža">
                        <h2>Īpašie piedāvājumi</h2>
                        <a href="akcija/izveidot" class="btn btn-success izveidot">Izveidot</a>
                        <br>   
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nr</th>
                                        <th>Nosaukums</th>
                                        <th>Darbība</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($akcijas as $akcija)
                                    <tr>
                                        <td>{{ $akcija->id }}</td>
                                        <td>{{ $akcija->Nosaukums }}</td>
                                        <td>
                                            <a href="{{ route('akcija.skats',$akcija->id) }}">
                                                <i class="glyphicon glyphicon-eye-open"></i>
                                            </a>
                                            <a href="{{ route('akcija.izmainīt',$akcija->id) }}">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a>
                                                {!! Form::open(['method' => 'DELETE','route' => ['akcija.dzēst',$akcija->id]]) !!}
                                                <button onclick="return confirm('Vai esi pārliecināts?')"><i class="glyphicon glyphicon-remove"></i></button>
                                                {!! Form::close() !!}
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>    
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection