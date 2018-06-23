@extends('pages')
@section('content')
 
<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
                        <h1>@lang('messages.thanks_subsctiption')</h1>
                        <a class="send-to-homepage" href="/">@lang('messages.return_home')</a>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection