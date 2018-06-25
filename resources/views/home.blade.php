@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('messages.dashboard')</div><br>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @lang('messages.login_message') {{Auth::user()->name}}
                    @if (Auth::user()->hasRole('Admin'))
                    <div class="paragraph adminpanel" style="border: 0;">                        
                        <a class="button" href="{{ route('admin.panel') }}" style="margin-left: 200px">@lang('messages.admin_panel')</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
