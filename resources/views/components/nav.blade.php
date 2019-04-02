<nav class="navigation">
    <img src="{{ asset('img/Logo-white.png') }}" class="logo">
    <div class="menu">
        <a href="{{ route('home') }}" class="menu-item @if(Route::is('home')) active @endif">
                <span>Home</span>
            </a>
        <a href="{{ route('what-we-do') }}" class="menu-item @if(Route::is('what-we-do')) active @endif">
                <span>Wat we doen</span>
            </a>
        <a href="{{ route('klanten') }}" class="menu-item @if(Route::is('klanten')) active @endif">
                <span>Voor wie</span>
            </a>
        <a href="{{ route('about-us') }}" class="menu-item @if(Route::is('about-us')) active @endif">
                <span>Over ons</span>
            </a>
        <a href="{{ route('working-at') }}" class="menu-item @if(Route::is('working-at')) active @endif">
                <span>Werken bij</span>
            </a>
        <a href="{{ route('contact') }}" class="menu-item last @if(Route::is('contact')) active @endif">
                <span>Contact</span>
            </a>
    </div>
    <div style="clear:both"></div>
</nav>
