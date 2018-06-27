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
                                <th>@lang('messages.avatar')</th>
                                <th>Status</th>
                                <th>@lang('messages.last') Online</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                                <td>{{ $user->name }}</td>
                                @if(Storage::disk('local')->has($user->name . '-' . $user->id . '.png'))
                                <td><img height="75" width="75" src="{{ route('upload.file',['filename' => $user->name . '-' . $user->id . '.png']) }}" alt="" class="img-responsive"></td>
                                @else
                                <td><img height="75" width="75" src="{{ route('upload.file',['filename' => 'empty' . '-' . 'avatar' . '.png']) }}" alt="" class="img-responsive"></td> 
                                @endif
                                <td>
                                    @if($user->isOnline())
                                        <li class="text-success">
                                            Online
                                        </li>
                                    @else 
                                        <li class="text-muted">
                                            Offline
                                        </li>
                                    @endif    
                                </td>
                                <td>
                                    @if(!$user->isOnline())
                                    {{ $user->lastActive }}
                                    @else
                                    @lang('messages.now')
                                    @endif
                                </td>
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