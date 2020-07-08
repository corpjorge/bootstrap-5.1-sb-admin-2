<!DOCTYPE html>
<html lang="en">
  <!--

  =========================================================
  * Material Blog PRO Laravel - v1.0.0
  =========================================================
 
  * Product Page: https://www.creative-tim.com/product/material-dashboard-pro-laravel
  * Copyright 2019 Creative Tim (http://www.creative-tim.com) & UPDIVISION (http://www.updivision.com)
 
  * Designed by www.invisionapp.com Coded by www.creative-tim.com & www.updivision.com
 
  =========================================================
 
  * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 
  -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        {{ ('Material Blog PRO Laravel by Creative Tim') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
        <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-blog-pro-laravel" />

    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, material blog pro, Material Blog PRO Laravel, blog laravel, updivision, html dashboard, laravel, html css dashboard laravel, bootstrap 4 uit kit, bootstrap 4 kit, material, material kit,  html kit, web dashboard, bootstrap 4 dashboard laravel, bootstrap 4, css3 dashboard, bootstrap 4 admin laravel, material ui dashboard bootstrap 4 laravel, frontend, responsive bootstrap 4 dashboard, material design, material laravel bootstrap 4 dashboard">
    <meta name="description" content="Material Blog PRO with Laravel has all the core features you need in a blog, right out of the box and with a fresh, new design inspired by Google's Material Design.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Blog PRO Laravel by Creative Tim">
    <meta itemprop="description" content="Material Blog PRO with Laravel has all the core features you need in a blog, right out of the box and with a fresh, new design inspired by Google's Material Design.">
 
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/222/original/opt_mb_laravel_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Blog PRO Laravel by Creative Tim">

    <meta name="twitter:description" content="Material Blog PRO with Laravel has all the core features you need in a blog, right out of the box and with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/122/opt_mb_laravel_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Blog PRO Laravel by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://material-blog-pro-laravel.creative-tim.com/" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/122/opt_mb_laravel_thumbnail.jpg"/>
    <meta property="og:description" content="Material Blog PRO with Laravel has all the core features you need in a blog, right out of the box and with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-kit.css" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />
    <link href="{{ asset('material') }}/demo/vertical-nav.css" rel="stylesheet" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NKDMSK6');
    </script>
    <!-- End Google Tag Manager -->
    <script>
        // Facebook Pixel Code Don't Delete
          ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
              n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
          }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');
          try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");
          } catch (err) {
            console.log('Facebook Track Error:', err);
          }
      </script>
</head>

<body class="sidebar-collapse {{ $class }}">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
        height="0" width="0" style="display:none;visibility:hidden">
    </iframe></noscript>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1" />
    </noscript>
    @include('blog.layouts.navs.nav')
    @include('blog.layouts.header')

    <div class="main main-raised">
        @include('blog.layouts.navs.nav_categories')
        @yield('content')
    </div>

    @include('blog.layouts.footer')

    <!--   Core JS Files   -->
    <script src="{{ asset('material') }}/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js" type="text/javascript"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('material') }}/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js" type="text/javascript"></script>
    <!--	Plugin for Small Gallery in Product Page -->
    <script src="{{ asset('material') }}/js/plugins/jquery.flexisel.js" type="text/javascript"></script>
    <!-- Plugins for presentation and navigation  -->
    <script src="{{ asset('material') }}/demo/modernizr.js" type="text/javascript"></script>
    <script src="{{ asset('material') }}/demo/vertical-nav.js" type="text/javascript"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Js With initialisations For Demo Purpose, Don't Include it in Your Project -->
    <script src="{{ asset('material') }}/demo/demo.js" type="text/javascript"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('material') }}/js/material-kit.js" type="text/javascript"></script>
    @stack('js')

</body>

</html>