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
                    <div class="paragraph adminpanel">                        
                    <table class="adminpanel">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>User</th>
                                <th>Admin</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}<input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><label class="checkboxes"><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"><span class="checkmark"></span></label></td>
                    <td><label class="checkboxes"><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"><span class="checkmark"></span></label></td>
                    {{ csrf_field() }}
                            </tr>    
                        </tbody>
                        @endforeach
                    </table>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
