<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}">
                {{ ('Material Blog PRO with Laravel') }} </a>
            <button class="navbar-toggler navbar-toggler-main" type="button" data-toggle="collapse" aria-expanded="false"
                aria-label="Toggle navigation" data-target="#sectionsNav">
                <span class="sr-only">{{ ('Toggle navigation') }}</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="sectionsNav">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="dropdown nav-item">
                    <a href="/material/index.html" class="nav-link" target="_blank">
                        <i class="material-icons d-none d-lg-inline-block d-xl-inline-block">apps</i>{{ __(' Includes Material Kit PRO') }}
                    </a>
                </li> --}}
                @guest
                    <li class="button-container dropdown nav-item mr-lg-2">
                        <a href="" target="_blank" class="btn btn-info btn-round btn-block dropdown-toggle" data-toggle="dropdown">
                            {{ __('Laravel Login as') }}
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <form method="get" action="{{ route('login') }}" style="display: none;" id="loginForm">
                                <input type="text" value="" name="role" id="roleType">
                            </form>
                            <a href="#" class="dropdown-item mx-2" onclick="document.getElementById('roleType').value='1';
                                                                       document.getElementById('loginForm').submit();">
                                <strong>{{ __('Admin') }}</strong>&nbsp;{{ __('to manage the blog') }}
                            </a>
                            <a href="#" class="dropdown-item mx-2" onclick="document.getElementById('roleType').value='2';
                                                                       document.getElementById('loginForm').submit();">
                                <strong>{{ __('Author') }}</strong>&nbsp;{{ __('to manage articles') }}
                            </a>
                            <a href="#" class="dropdown-item mx-2" onclick="document.getElementById('roleType').value='3';
                                                                       document.getElementById('loginForm').submit();">
                                <strong>{{ __('Member') }}</strong>&nbsp;{{ __('to comment') }}
                            </a>
                        </div>
                    </li>
                @endguest

                @auth()
                    <form method="POST" action="{{ route('logout') }}" style="display: none" id="logoutForm">
                        @csrf
                    </form>
                    <li class="dropdown nav-item">
                        <a class="nav-link" href = "{{route('dashboard')}}">
                             {{ __('Go to') }} <strong>{{ __('Admin') }}</strong> {{ __(' panel') }} 
                        </a>
                        
                    </li>
                    <li class="button-container dropdown nav-item mr-lg-2">
                        <a href="" target="_blank" class="btn btn-info btn-round btn-block" onclick="document.getElementById('logoutForm').submit();">
                            {{ __('Logout') }}
                        </a>
                    </li>
                @endauth
                
                <li class="button-container nav-item iframe-extern">
                    <a href="https://www.creative-tim.com/product/material-blog-pro-laravel" target="_blank"
                        class="btn  btn-rose   btn-round btn-block">
                        <i class="material-icons">{{ ('shopping_cart') }}</i>{{ (' Buy Now') }}
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>