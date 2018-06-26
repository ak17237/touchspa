@extends('welcome')
@section('home')

<main>    
    <div class="header"> <!-- containeri mājaslapas centrēšanai un darbu ar atsevišķiem apgabaliem -->
        <div class="center">
            <div class="akcija">
                <img src="{{ asset('images/akcija.jpg') }}" alt="Akcijas bilde" title="Akcijas bilde">
                <h3>@lang('messages.akcija')</h3>
                <p><a href="akcija">@lang('messages.see_here')</a></p>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="navigation">
	<div class="center">
            <aside> <!-- Informacija kura ir papildus visai citai informacijai -->
		<ul>
                    <li><a href="pakalpojumi?page=1">@lang('messages.classic_massage')</a></li>
                    <li><a href="pakalpojumi?page=2">@lang('messages.feet_massage')</a></li>
                    <li><a href="pakalpojumi?page=3">@lang('messages.face_massage')</a></li>
		</ul>
            </aside>
	</div>
    </div>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section> <!-- Informācijas dalīšana uz atsevišķiem loģiskiem apgabaliem -->
                            <a id="parmums"></a>
                            <img src="images/about.png" alt="Par mums">
                            <h2>@lang('messages.about_us')</h2>
                            @foreach($infos as $info)
                            <p>{{$info->Teksts}}<a href="par-mums">@lang('messages.read_more')</a></p>
                            @endforeach
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div> 
</main>
@endsection