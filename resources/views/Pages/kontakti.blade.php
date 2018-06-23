@extends('pages')
@section('content')

<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section> <!-- Informācijas dalīšana uz atsevišķiem loģiskiem apgabaliem -->
                            <h2>@lang('messages.contact_us')</h2><br>
                            <div class="SPAgps" style="height: 250px; width: 780px;">{!! Mapper::render() !!}</div>
                            <div class="send">
                                <h3>@lang('messages.apply_news')</h3><br>
                                <a href="send">@lang('messages.apply')</a>
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
					<p>@lang('messages.mon'), @lang('messages.tue'), @lang('messages.wed'), @lang('messages.thu'), @lang('messages.fri'): 09:00 - 20:00<br>
                                        @lang('messages.sat'): 09:00 - 20:00<br>
                                        @lang('messages.sun'): 10:00 - 18:00</p>
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
