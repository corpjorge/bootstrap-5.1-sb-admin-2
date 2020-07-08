<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="{{ route('home') }}">{{ $title }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="material-icons">dashboard</i> {{ __('Dashboard') }}
                    </a>
                </li>
                <li class="nav-item{{ $activePage == 'pricing' ? ' active' : '' }} ">
                    <a href="{{ route('page.pricing') }}" class="nav-link">
                        <i class="material-icons">shopping_basket</i> {{ __('Pricing') }}
                    </a>
                </li>
                <li class="nav-item{{ $activePage == 'register' ? ' active' : '' }}">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="material-icons">person_add</i> {{ __('Register') }}
                    </a>
                </li>
                @guest
                <li class="nav-item{{ $activePage == 'login' ? ' active' : '' }}">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="material-icons">fingerprint</i> {{ __('Login') }}
                    </a>
                </li>
                @endguest
                <li class="nav-item{{ $activePage == 'lock' ? ' active' : '' }} ">
                    <a href="{{ route('page.lock') }}" class="nav-link">
                        <i class="material-icons">lock_open</i> {{ __('Lock') }}
                    </a>
                </li>
                @auth()
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="material-icons">directions_run</i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>