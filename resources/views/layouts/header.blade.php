<header>
    <div class="header"> <!-- containeri mājaslapas centrēšanai un darbu ar atsevišķiem apgabaliem -->
	<div class="center">
            <a href="/lang/lv"><img class="leng" src="{{ asset('images/Latvian.png') }}" alt="Lv" title="LV LENG"></a>
            <a href="/lang/en"><img class="leng" src="{{ asset('images/English.png') }}" alt="En" title="ENG LENG"></a>
            <div class="nav">
		<nav> <!--  Galvenā mājaslapas navigācija -->
                    <a href="/">@lang('messages.home')</a> 
                    <a href="/par-mums">@lang('messages.about_us')</a>
                    <a href="/pakalpojumi/1">@lang('messages.services')</a>
                    <a href="/cenas">@lang('messages.prices')</a>
                    <a href="/kontakti">@lang('messages.contacts')</a>
                    @guest
                    <a href="{{ route('login') }}">@lang('messages.login')</a>
                    <a class="register" href="{{ route('register') }}">@lang('messages.register')</a>
                    @else
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        @lang('messages.logout')
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    <a class="dashboard "href="/home">@lang('messages.dashboard')</a>
                    <a class="avatar" href="{{ route('upload.main') }}">@lang('messages.avatar')</a>
                    <a href="{{ route('user.main') }}">@lang('messages.users') online</a>
                    @endguest
		</nav>
            </div>
                <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="SPA logo" title="SPA logo"> <!-- mājaslapas logo -->
                </a>
        </div>                
    </div>
    <div class="navigation">
	<div class="center">
            <aside> <!-- Informacija kura ir papildus visai citai informacijai -->
		<ul>
                    <li><a href="/pakalpojumi/1">@lang('messages.classic_massage')</a></li>
                    <li><a href="/pakalpojumi/2">@lang('messages.feet_massage')</a></li>
                    <li><a href="/pakalpojumi/3">@lang('messages.face_massage')</a></li>
		</ul>
            </aside>
	</div>
    </div>
</header>    
