@extends('pages')

@section('content')                    
<div class="content">
    <div class="center">
        <div class="background">
            <div class="block">
                <div class="paragraph adminpanel">
                @include('Pages.Akcijas.error')                   
                    <table class="adminpanel">
                        <thead>
                            <tr>
                                <th>@lang('messages.name')</th>
                                <th>@lang('messages.avatar')</th>
                                <th>@lang('messages.email')</th>
                                <th>@lang('messages.user')</th>
                                <th>@lang('messages.admin')</th>
                                <th style="padding-left: 50px;">@lang('messages.action')</th>
                            </tr>
                        </thead>
                        @foreach($users as $user)
                        <tbody>
                            <tr>
                        {!! Form::open(['route' => ['admin.assign']]) !!}
                    <td>{{ $user->name }}</td>
                        @if(Storage::disk('local')->has($user->name . '-' . $user->id . '.png'))
                            <td><img height="75" width="75" src="{{ route('upload.file',['filename' => $user->name . '-' . $user->id . '.png']) }}" alt="" class="img-responsive"></td>
                        @else
                           <td><img height="75" width="75" src="{{ route('upload.file',['filename' => 'empty' . '-' . 'avatar' . '.png']) }}" alt="" class="img-responsive"></td> 
                        @endif
                    </td>
                    <td>{{ $user->email }}<input type="hidden" name="email" value="{{ $user->email }}"></td>
                    <td><label class="checkboxes"><input type="checkbox" name="role_user" {{ $user->hasRole('User') ? 'checked' : '' }} ><span class="checkmark"></span></label></td>
                    <td><label class="checkboxes"><input type="checkbox" name="role_admin" {{ $user->hasRole('Admin') ? 'checked' : '' }} ><span class="checkmark"></span></label></td>
                    {{ csrf_field() }}
                    <td><button class="button">@lang('messages.assign_roles')</button></td>
                        {!! Form::close() !!}
                            </tr>    
                        </tbody>
                        @endforeach
                    </table>
                    <div class="payment">
                        <p>I'm running <select id="type"><option id="paid" value="yesfees">paid</option><option id="free" value="nofees">free</option></select></p><br>
                        <div id="con">
                        <p>I'm based in <select class ="money" id="country"><option value="Australia" id="aus">Australia</option><option value="Britan" id="gb">Britan</option><option value="Germany"id="ger">Germany</option></select> 
                        and sell tickets in<select class ="money" id="currency"><option value="dollars" id="dol">dollars($)<option value="pound" id="pou">pound sterling(£)</option><option value="euro" id="eur">euro(€)</option></select></p><br>
                        <p>I'm selling <input type="quantity" id="quan"value="100" class="form-control" size="3"> tickets which cost
                        <span class="js-currency">?</span><input type="price" id="amount" value="100" class="form-control" size="6">each</p>
                        </div>
                    </div>
                    <div id="calculation">
                        <ul class="calculator">
                            <li><p>ESTIMATED TOTAL EARNED<span class="js-currency" id="calculator-number-style">?</span><span class="estimated-total"></span></p></li>
                            <li><p>GROSS REVENUE<span class="js-currency" id="calculator-number-style">?</span><span class="gross"></span></p></li>
                            <li><p>TITO FEES (3%, max <span class="js-currency">?</span><span class="max-fee-per-ticket">25</span> per ticket)
                            <span class="js-currency" id="calculator-number-style">?</span><span class="ticket-fee"></span></p></li>
                            <li><p>STRIPE FEES* (<span class="stripe-percentage">2.9</span>% +
                            <span class="js-currency">?</span><span class="stripe-per-transaction">0.25</span>)
                            <span class="js-currency" id="calculator-number-style">?</span><span class="stripe-total"></span></p></li>
                            <li><p>ESTIMATED TOTAL FEE<span class="js-currency" id="calculator-number-style">?</span><span class="estimated-fees"></span></p></li>
                        </ul>
                    </div>
                    <div id="fevent">
                    <h2>No fees for free events 🎉</h2>
                    <p>With Tito, free events are always absolutely free. 
                    You’ll still have full access to all of our features making it simple to track registrations, 
                    send updates and check in attendees for any free event, workshop, meetup, party or fundraiser.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection