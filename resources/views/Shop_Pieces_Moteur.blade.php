<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8" />
<title>Steil Automobile</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0 shrink-to-fit=no" />

<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png" />

<link href="https://fonts.googleapis.com/css?display=swap&amp;family=Inter:300,400,500,600,700,800" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-grid.min.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/splide.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/splide-core.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/nouislider.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/lineicons.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-style.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-style-home-two.css/')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/theme-style-home-one.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleV1.css')}}" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">


<style>
    .logo{
        height: 100px !important;
        width: 100px !important;
    }
    a{
        text-decoration: none !important
    }
</style>
</head>


<body class="boxed_wrapper ltr">


    <div class="preloader-area">
        <img src="assets/images/logo.png" alt="Logo">
    </div>


    <!-- header -->
    <div class="brator-header-area header-one">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-lg-12 col-xl-3">
                    <div class="brator-logo-area">
                        <div class="brator-infobox__btn" id="infobox__toggle-js">
                            <svg x="0px" y="0px" width="451.847px" height="451.847px" viewBox="0 0 451.847 451.847" style="enable-background:new 0 0 451.847 451.847;" xml:space="preserve">
                                <g>
                                    <path d="M225.923,354.706c-8.098,0-16.195-3.092-22.369-9.263L9.27,151.157c-12.359-12.359-12.359-32.397,0-44.751
                                                                            c12.354-12.354,32.388-12.354,44.748,0l171.905,171.915l171.906-171.909c12.359-12.354,32.391-12.354,44.744,0
                                                                            c12.365,12.354,12.365,32.392,0,44.751L248.292,345.449C242.115,351.621,234.018,354.706,225.923,354.706z"></path>
                                </g>
                                <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                            </svg>
                        </div>
                        <div class="brator-logo">
                            <a href="">
                                <img class="img-fluid logo" src="{{asset('assets/images/logo.png')}}" alt="logo" />
                            </a>
                            <button>
                                <svg class="bi bi-pause" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 xl-dextop-none mt-5">
                    <div class="brator-search-area">
                        <form class="search-form" role="search" method="get">
                            <input class="search-field" type="search" placeholder="Rechercher" name="s" required="required" />
                            <button type="submit">
                                <svg fill="#000000" width="52" height="52" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64">
                                    <path d="M62.1,57L44.6,42.8c3.2-4.2,5-9.3,5-14.7c0-6.5-2.5-12.5-7.1-17.1v0c-9.4-9.4-24.7-9.4-34.2,0C3.8,15.5,1.3,21.6,1.3,28                                c0,6.5,2.5,12.5,7.1,17.1c4.7,4.7,10.9,7.1,17.1,7.1c6.1,0,12.1-2.3,16.8-6.8l17.7,14.3c0.3,0.3,0.7,0.4,1.1,0.4                                c0.5,0,1-0.2,1.4-0.6C63,58.7,62.9,57.6,62.1,57z M10.8,42.7C6.9,38.8,4.8,33.6,4.8,28s2.1-10.7,6.1-14.6c4-4,9.3-6,14.6-6                                c5.3,0,10.6,2,14.6,6c3.9,3.9,6.1,9.1,6.1,14.6S43.9,38.8,40,42.7C32,50.7,18.9,50.7,10.8,42.7z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Navbar -->
    <div class="brator-plan-pixel-area">
        <div class="container-xxxl container-xxl container">
            <div class="col-12">
                <div class="plan-pixel-area"></div>
            </div>
        </div>
    </div>
    <div class="brator-header-menu-area">
        <div class="close-menu-bg"></div>
        <div class="brator-mega-menu-close">
            <svg class="bi bi-x" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
            </svg>
        </div>
        <div class="container-xxxl container-xxl container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brator-header-menu-with-info">
                        <div class="brator-header-menu">
                            <ul class="list-style-outside-none">
                                <li><a href="/">Accueil</a></li>
                                <li><a href="#get-started">A Propos</a></li>
                                <li class="mega-menu-li"><a href="#_"> Nos Services</a>
                                    <div class="mega-menu-area">
                                        <div class="mega-menu-cat-list">
                                            <div class="mega-menu-cat-list-left mega-menu-cat-list-single-area">
                                                <a href="/pieces"><img src="assets/images/mega-menu-01.jpg" alt="alt" /><span>Pieces Auto & Moteur</span></a>
                                                <a href="/engins"><img src="assets/images/mega-menu-09.jpg" alt="alt" /><span>Engin Automobile</span></a>
                                                <a href="/reparation"><img src="assets/images/mega-menu-02.jpg" alt="alt" /><span>Reparation</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="brator-slide-menu-area">
        <div class="brator-slide-menu-bg"></div>
        <div class="brator-slide-menu-content">
            <div class="brator-slide-menu-close">
                <svg class="bi bi-x" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
            </div>
            <div class="brator-slide-logo-items"></div>
            <div class="brator-slide-menu-items"></div>
        </div>
    </div>


    <div class="brator-header-menu-area scroll-menu">
        <div class="close-menu-bg"></div>
        <div class="brator-mega-menu-close">
            <svg class="bi bi-x" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
            </svg>
        </div>
        <!-- Mobile -->
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brator-header-menu-with-info">
                        <div class="brator-header-menu">
                            <ul class="list-style-outside-none">
                                <li><a href="/">Accueil</a></li>
                                <li><a href="#get-started">A Propos</a></li>
                                <li class="mega-menu-li"><a href="#_"> Nos Services</a>
                                    <div class="mega-menu-area">
                                        <div class="mega-menu-cat-list">
                                            <div class="mega-menu-cat-list-left mega-menu-cat-list-single-area">
                                                <a href="/pieces"><img src="assets/images/mega-menu-01.jpg" alt="alt" /><span>Pieces Auto & Moteur</span></a>
                                                <a href="/engin"><img src="assets/images/mega-menu-09.jpg" alt="alt" /><span>Engin Automobile</span></a>
                                                <a href="reparation"><img src="assets/images/mega-menu-02.jpg" alt="alt" /><span>Reparation</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="/contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="brator-plan-pixel-area">
        <div class="container-xxxl container-xxl container">
            <div class="col-12">
                <div class="plan-pixel-area"></div>
            </div>
        </div>
    </div>

    <div class="brator-banner-slider-area">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-banner-area design-four lazyload" data-bg="{{asset('assets/images/logo.png')}}">
                        <div class="brator-banner-content">
                            <h2><a href="#_">PIECES AUTO ET MOTEURS</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="brator-breadcrumb-area">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brator-breadcrumb">
                        <ul>
                            <li><a href="#_">Home</a></li>
                            <li><a href="#_">All Categories</a></li>
                            <li><a href="#_">wheels & Tires</a></li>
                            <li><a href="#_">Mercedes</a></li>
                            <li><a href="#_">GLC Class</a></li>
                            <li class="active-link">2018</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- New pieces -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="brator-best-product-slider">
                    <div class="brator-section-header">
                        <div class="brator-section-header-title">
                            <h2>Pièces et Moteur</h2>
                        </div>
                    </div>

                    <div class="brator-product-slider splide js-splide p-splide" data-splide="{&quot;pagination&quot;:false,&quot;type&quot;:&quot;loop&quot;,&quot;perPage&quot;:4,&quot;perMove&quot;:&quot;1&quot;,&quot;gap&quot;:30, &quot;breakpoints&quot;:{ &quot;576&quot; :{ &quot;perPage&quot;: &quot;1&quot; },&quot;746&quot; :{ &quot;perPage&quot;: &quot;2&quot; }, &quot;768&quot; :{ &quot;perPage&quot; : &quot;2&quot; }, &quot;991&quot;:{ &quot;perPage&quot; : &quot;3&quot; }, &quot;1399&quot;:{ &quot;perPage&quot; : &quot;4&quot; }, &quot;1500&quot;:{ &quot;perPage&quot; : &quot;4&quot; }, &quot;1920&quot;:{ &quot;perPage&quot; : &quot;4&quot; }}}">

                        <div class="splide__arrows style-one">
                            <button class="splide__arrow splide__arrow--prev">
                                <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                            </button>
                            <button class="splide__arrow splide__arrow--next">
                                <svg class="bi bi-chevron-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="splide__track">
                            <div class="splide__list">
                                @foreach ($newpieces as $newpiece)
                                <div class="brator-product-single-item-area splide__slide design-two">

                                    <div class="brator-product-single-item-info info-content-flex">
                                        <div class="brator-product-single-item-info-right"><a href="#_">
                                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                                            </svg></a>
                                        </div>
                                    </div>



                                        <div class="brator-product-single-item-img">
                                            <a href="#_"><img class="img-fluid" src="{{$newpiece->image}}" alt="image" /></a>
                                        </div>

                                        <div class="brator-product-single-item-mini">
                                            <div class="brator-product-single-item-cat">
                                                    <a href="#">{{$newpiece->nom}}</a>
                                                </div>
                                                <div class="brator-product-single-item-title">
                                                    <h5><a href="#_"> {{$newpiece->reference}}</a></h5>
                                                </div>
                                            <div class="brator-product-single-item-btn"><a href="#">Appeler</a></div>
                                        </div>


                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Produit-->
    <div class="brator-product-shop-page-area mt-3">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="brator-sidebar-area design-one">
                        <div class="close-fillter">
                            <svg class="bi bi-x" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                        </div>
                        <div class="brator-sidebar-single-item">
                            <div class="shop-sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <div class="shop-sidebar-content">
                                <div class="shop-cat-list">
                                    <ul>
                                        <li><a href="#_">Toutes le catégories</a></li>
                                        <li><a href="#_">Moteur</a></li>
                                        <li><a href="#_">Pieces Auto</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="brator-sidebar-single-item">

                            <div class="shop-sidebar-title fillter-list-title">
                                <h2>Filter</h2>
                                <button class="rest-all-checkbox">
                                    <svg class="bi bi-arrow-repeat" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
                                        <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
                                    </svg>Renistialiser
                                </button>
                            </div>
                            {{-- <div class="shop-sidebar-content">
                                <div class="brator-filter-item-area">
                                        <div class="brator-filter-item-title current">
                                            <h4>Origins</h4>
                                            <button class="ac-trigger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    <div class="brator-filter-item-content-area">
                                        <div class="brator-filter-item-content">
                                            <input type="checkbox" name="origin" />
                                            <div class="brator-filter-item-check-box-content">
                                                <span class="brator-name">All</span>
                                                <span class="brator-count">(1.532)</span>
                                            </div>
                                        </div>
                                        <div class="brator-filter-item-content">
                                            <input type="checkbox" name="origin" />
                                            <div class="brator-filter-item-check-box-content"><span class="brator-name">OEM</span><span class="brator-count">(1.132)</span></div>
                                        </div>
                                        <div class="brator-filter-item-content">
                                            <input type="checkbox" name="origin" />
                                            <div class="brator-filter-item-check-box-content"><span class="brator-name">Aftermarkets</span><span class="brator-count">(400)</span></div>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="col-lg-9">


                    <div class="brator-plan-pixel-area">
                        <div class="plan-pixel-area"></div>
                    </div>

                    <div class="product-list-items type-list">
                        <div class="row">
                                @foreach ($piece_autos as $piece_auto )
                                    <div class="col-lg-6">
                                        <div class="brator-product-single-item-area design-three">
                                            <div class="brator-product-single-item-area-left">
                                                <div class="brator-product-single-item-img">
                                                    <a href="#_">
                                                        <img class=" img-fluid" src="{{$piece_auto->image}}" alt="image">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="brator-product-single-item-area-mdl">
                                                <div class="brator-product-single-item-mini">
                                                    <div class="brator-product-single-item-cat">
                                                        <a href="product-layout-01.html">{{$piece_auto->categorie_pieces}}</a>
                                                    </div>
                                                    <div class="brator-product-single-item-title">
                                                        <h5><a href="#_"> {{$piece_auto->nom}}</a></h5>
                                                        <p>{{$piece_auto->refence}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brator-product-single-item-area-right">
                                                <div class="brator-product-single-item-btn">
                                                    <div class="brator-product-single-item-btn-cart">
                                                        <button>Appeler</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

     <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="/" class="logo d-flex align-items-center mb-3">
                <img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid" style="max-height: 50px;">
                <h4 class="p-3">STEIL AUTOMOBILE</h4>
              </a>
              <p>

                Abidjan, Yopougon en face de UNIWAX sur l'autoroute du nord<br>
                <strong>Téléphone:</strong>+225 0767754079 <br> +225 0767755112 <br> <br>+225 0767754095
                <strong>Email:</strong> steilautocommercial@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><i class="fa-brands fa-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Lien de Navigation</h4>
            <ul>
              <li><a href="/">Accueil</a></li>
              <li><a href="#get-started">A Propos</a></li>
              <li><a href="#ours_services">Services</a></li>
              <li><a href="/pieces_engin">Pièces Auto / Engin</a></li>
              <li><a href="/reparation">Reparation d'engin</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Prestations de reparation Auto</h4>
            <ul>
              <li><a href="#">Entretien</a></li>
              <li><a href="#">Réparation du moteur</a></li>
              <li><a href="#">Réparation de la transmission</a></li>
              <li><a href="#">Réparation de la climatisation et du système de refroidissement</a></li>
              <li><a href="#">Réparation du système électrique</a></li>
              <li><a href="#">Réparation de la carrosserie</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Steil Automobile</span></strong> tous droits réservés.
        </div>

      </div>
    </div>

</footer>

    <button class="scroll-top scroll-to-target" data-target="html">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
        </svg><span>Haut</span>
    </button>

    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/nouislider.js"></script>
    <script src="assets/js/splide.min.js"></script>
    <script src="assets/js/lazysizes.min.js"></script>
    <script src="assets/js/ls.bgset.min.js"></script>
    <script src="assets/js/tab.js"></script>
    <script src="assets/js/img-zoom.js"></script>
    <script src="assets/js/gsap-core.js"></script>
    <script src="assets/js/scroll-trigger.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/addIndicators.js"></script>
    <script src="assets/js/animation.gsap.js"></script>
    <script src="assets/js/brator-script.js"></script>
</body>

</html>
