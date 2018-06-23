@extends('pages')
@section('content')

<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph cenas">
			<section>
                            <a id="cenas"></a>
				<img src="{{ asset('images/cenas.png') }}" alt="Cenas">
				<h2>@lang('messages.prices')</h2>
				<h3>@lang('messages.haircut')</h3>
                                    <table>
                                        <tr>
                                            <th>@lang('messages.type')</th>
                                            <th>@lang('messages.master_haircut')</th>
                                            <th>@lang('messages.top_master')</th>
					</tr>
					@foreach($cenasF as $cenaF)
                                        <tr>
                                            <td class="name">{{ $cenaF->Tips }}</td>
                                            <td>{{ $cenaF->MasterCena }}</td>
                                            <td>{{ $cenaF->TopMasterCena }}</td>
					</tr>
                                        @endforeach
				</table>
                                <h3>@lang('messages.manicure')</h3>
                                <table>
                                    @foreach($cenasM as $cenaM)
                                    <tr>
					<td class="name2">{{ $cenaM->Tips }}</td>
					<td>{{ $cenaM->TopMasterCena }}</td>
                                    </tr>
                                    @endforeach
                                </table>
				<h3>@lang('messages.pedicure')</h3>
				<table>
                                    @foreach($cenasP as $cenaP)
                                    <tr>
					<td class="name2">{{ $cenaP->Tips }}</td>
					<td>{{ $cenaP->TopMasterCena }}</td>
                                    </tr>
                                    @endforeach
                                </table>
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection