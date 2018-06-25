@extends('pages')

@section('content')                    
<div class="content">
    <div class="center">
        <div class="background">
            <div class="block">
                <div class="paragraph adminpanel">                   
                    <table class="adminpanel">
                        <thead>
                            <tr>
                                <th>@lang('messages.name')</th>
                                <th>@lang('messages.email')</th>
                                <th>@lang('messages.user')</th>
                                <th>@lang('messages.admin')</th>
                                <th style="padding-left: 50px;">Action</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                        {!! Form::open(['route' => ['admin.assign']]) !!}
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}<input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><label class="checkboxes"><input type="checkbox" name="role_user" {{ $user->hasRole('User') ? 'checked' : '' }} ><span class="checkmark"></span></label></td>
                    <td><label class="checkboxes"><input type="checkbox" name="role_admin" {{ $user->hasRole('Admin') ? 'checked' : '' }} ><span class="checkmark"></span></label></td>
                    {{ csrf_field() }}
                    <td><button class="button">Assign Roles</button></td>
                        {!! Form::close() !!}
                            </tr>    
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection