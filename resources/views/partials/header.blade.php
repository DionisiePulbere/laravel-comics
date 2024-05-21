<header>
        <div class="container d-flex justify-content-between align-items-center">
            <div class="logo my-3">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </div>
            <nav>
                <ul class="d-flex">
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">characters</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">
                        <a href="{{ route('comics') }}">comics</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">movies</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">tv</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">games</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">collectibles</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">videos</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">fans</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">news</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" >
                        <a href="{{ route('home') }}">shop</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="jumbo">

        </div>
    </header>