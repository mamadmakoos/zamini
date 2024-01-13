<!doctype html >
<html lang="fa" dir="rtl">
<head>
    {{-- for seo --}}

    <meta name="robots" content="noindex,nofollow">

    <!-- Required meta tags -->
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <meta name="author" content="sabioweb.com" >
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" >

    <meta name="description" content="" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}" >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" >
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" >
{{--
    <link rel="stylesheet" href="{{ asset('assets/css/sl.css') }}" >
--}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" >
{{--
    <link rel="stylesheet"
          href="{{ asset
          ('assets/css/mainsl.css') }}" >
--}}


    @yield("meta")
</head>
<body>

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="visually-hidden">صبر کنید..</span>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->

<!-- top nav for mobile -->
<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<!-- top nav for desktop -->
<nav class="site-nav" >
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0 float-start"><img src="{{ asset('assets/img/logo/LOGO.png') }}"></a>


                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="active"><a href="index.html" style="cursor: url('images/cursor/paint-roller.png');">خانه</a></li>
                    <!--<li class="has-sub-menu"><a href="#">PRODUCTS</a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu">
                                <li class="sub-menu-heading"><a>Cosmetics</a></li>
                                <li><a href="#">Cosmetic 1</a></li>
                                <li><a href="#">Cosmetic 2</a></li>
                                <li><a href="#">Cosmetic 3</a></li>
                                <li><a href="#">Cosmetic 4</a></li>
                            </ul>
                            <ul class="sub-menu">
                                <li class="sub-menu-heading"><a>Food</a></li>
                                <li><a href="#">Food 1</a></li>
                                <li><a href="#">Food 2</a></li>
                                <li><a href="#">Food 3</a></li>
                                <li><a href="#">Food 4</a></li>
                            </ul>
                            <ul class="sub-menu">
                                <li class="sub-menu-heading"><a>Cars</a></li>
                                <li><a href="#">Car 1</a></li>
                                <li><a href="#">Car 2</a></li>
                                <li><a href="#">Car 3</a></li>
                                <li><a href="#">Car 4</a></li>
                            </ul>
                            <ul class="sub-menu">
                                <li class="sub-menu-heading"><a>Sports</a></li>
                                <li><a href="#">Sports 1</a></li>
                                <li><a href="#">Sports 2</a></li>
                                <li><a href="#">Sports 3</a></li>
                                <li><a href="#">Sports 4</a></li>
                            </ul>
                        </div>
                    </li>-->
                    <li><a href="#">سرویس</a></li>
                    <li><a href="#">درباره ما</a></li>
                    <li><a href="#">تماس باما</a></li>
                    <li><a href="#">ورود</a></li>
                </ul>

                <a href="#" class="burger dark me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

                <!--              <a href="index.html" class="text-white float-end" style="padding: 10px 15px;">ورود - ثبت نام</a>-->
            </div>
        </div>
    </div>
</nav>

<!-- End Navbar Area -->
