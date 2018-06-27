@extends('pages')
@section('content')
<main>
    <div class="content">
	<div class="center">
            <div class="background">
		<div class="block">
                    <div class="paragraph">
			<section> <!-- Informācijas dalīšana uz atsevišķiem loģiskiem apgabaliem -->
                                <h2>@lang('messages.upload')</h2><br>
                                <div style="text-align: center">
                                    @include('Pages.Akcijas.error')
                                <form action="{{ route('upload.store') }}" enctype="multipart/form-data" method="POST">
                                    {{csrf_field()}}
                                    <input type="file" name="file" style="display: unset">
                                    <br>
                                    <button class="button" style="margin-top: 25px;">@lang('messages.upload')<button>
                                </form><br>
                                </div>
                                <div style="display: block;
                                            margin-left: auto;
                                            margin-right: auto;
                                            width: 29%;">
                                @if(Storage::disk('local')->has($user->name . '-' . $user->id . '.png'))
                                    <img src="{{ route('upload.file',['filename' => $user->name . '-' . $user->id . '.png']) }}" alt="" class="img-responsive">
                                @else
                                    <img src="{{ route('upload.file',['filename' => 'empty' . '-' . 'avatar' . '.png']) }}" alt="" class="img-responsive">
                                @endif
                                </div>
                                <div style="text-align: center">
                                <form action="{{ route('upload.delete') }}" enctype="multipart/form-data" method="POST">
                                    {{csrf_field()}}
                                    <button class="button" style="margin-top: 25px;background-color: #f32d2d">@lang('messages.delete')<button>
                                </form><br>
                                </div>
			</section>
                    </div>
		</div>
            </div>
	</div>
    </div>
</main>

@endsection

