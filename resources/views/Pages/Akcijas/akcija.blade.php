@extends('pages')
@section('content')

<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph tabula_akcijas">
                        <img src="{{ asset('images/akcija.png') }}" alt="Klasiskā masāža">
                        <h2>@lang('messages.special_offers')</h2>
                        @guest
                        <h3>@lang('messages.akcijas_message')</h3>
                        @else
                        @if (Auth::user()->hasRole('Admin'))
                        <a href="akcija/izveidot" class="btn btn-success izveidot">@lang('messages.create')</a>
                        @endif
                        <br>   
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>@lang('messages.num')</th>
                                        <th>@lang('messages.title')</th>
                                        <th>@lang('messages.action')</th>
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
                                            @if (Auth::user()->hasRole('Admin'))
                                            <a href="{{ route('akcija.izmainīt',$akcija->id) }}">
                                                <i class="glyphicon glyphicon-edit"></i>
                                            </a>
                                            <a>
                                                {!! Form::open(['method' => 'DELETE','route' => ['akcija.dzēst',$akcija->id]]) !!}
                                                <button onclick="return confirm('Vai esi pārliecināts?')"><i class="glyphicon glyphicon-remove"></i></button>
                                                {!! Form::close() !!}
                                            </a>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endguest
                        </div>    
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection