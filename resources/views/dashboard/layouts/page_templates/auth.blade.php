<div class="wrapper ">
    @include('dashboard.layouts.navbars.sidebar')
    <div class="main-panel">
        @include('dashboard.layouts.navbars.navs.auth')
        @yield('content')
        @include('dashboard.layouts.footers.auth')
    </div>
</div>