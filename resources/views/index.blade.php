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


    <section class="brator-megasell-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brator-megasell-slide-active arrow-design-one splide js-splide p-splide">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev"><i class="fa-solid fa-chevron-left"></i></button>
                            <button class="splide__arrow splide__arrow--next"><i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="brator-megasell-box  design-one splide__slide">
                                    <div class="brator-megasell-content-box mt-5 mb-5">
                                        <span class="sub-title">Site internet de </span>
                                        <h2 class="title-box p-3"><span>Steil Automobile</span></h2>
                                        <p class="p-3">Explorez, découvrez plusieurs pièces automobile dont  <br> vous avez besoins pour votre activité.</p>
                                    </div>
                                    <div class="brator-megasell-thumb">
                                        <img class="img-fluid" src="{{asset('assets/images/slide-1.png')}}" alt="image">
                                    </div>
                                    <div class="thumb-shape">
                                        <img class="lazyload" src="{{asset('assets/images/slide-1.png')}}" alt>
                                    </div>
                                </div>
                                <div class="brator-megasell-box design-one splide__slide">
                                    <div class="brator-megasell-content-box mt-5 mb-5">
                                        <span class="sub-title">Nous vendons des </span>
                                        <h2 class="title-box p-3"><span>Pièces Auto</span></h2>
                                    </div>
                                    <div class="brator-megasell-thumb">
                                        <img class="lazyload" src="{{asset('assets/images/slide-1.png')}}" alt>
                                    </div>
                                    <div class="thumb-shape">
                                        <img class="lazyload" src="{{asset('assets/images/slide-1.png')}}" alt>
                                    </div>
                                </div>
                                <div class="brator-megasell-box design-one splide__slide">
                                    <div class="brator-megasell-content-box mt-5 mb-5">
                                        <span class="sub-title">Nous vendons et louons des</span>
                                        <h2 class="title-box p-3"><span>Engins Automobile</span></h2>
                                    </div>
                                    <div class="brator-megasell-thumb">
                                        <img class="lazyload" src="{{asset('assets/images/slide-1.png')}}" alt>
                                    </div>
                                    <div class="thumb-shape">
                                        <img class="lazyload" src="{{asset('assets/images/slide-1.png')}}" alt>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="brator-service-area">
        <div class="container container-xxxl container-xxl">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="brator-single-service-item">
                        <div class="iocn">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <h4 class="title">Pièces Originaux</h4>
                        <p>Uniquement des pièces de marques de confiance</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="brator-single-service-item">
                        <div class="iocn">
                            <i class="fa-solid fa-car"></i>
                        </div>
                        <h4 class="title">Livraison Rapide</h4>
                        <p>Vous pouvez passer vos commande via appel ou dans nos locaux</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="brator-single-service-item last-item">
                        <div class="iocn">
                            <i class="fa-solid fa-headset"></i>                        </div>
                        <h4 class="title">Une Assistante</h4>
                        <p>Ouvert du lundi au vendredi de 8H - 20H</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ======= About Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content w-100">
              <h3 class="title-section">QUI SOMMES NOUS ?</h3>
              <p>
                Nous sommes spécialisés dans la vente de pièces automobiles de haute qualité. Nous proposons une large gamme de pièces détachées provenant de marques réputées, couvrant différents modèles et types de véhicules.
              </p>
              <P>
                Mais notre expertise ne s'arrête pas là. En plus de la vente de pièces auto, nous offrons également des services complémentaires tels que la location et la réparation d'engins.
              </P>
              <p>
                Chez <strong style="size: 23px;">STEIL AUTOMOBILE</strong>, nous mettons un point d'honneur à fournir des pièces et un service client de qualité. Notre équipe dévouée est là pour vous offrir des conseils d'experts et des solutions personnalisées, en travaillant en étroite collaboration avec vous pour répondre à vos besoins spécifiques.
              </p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade">
            <div class="contact shadow p-3 mb-5 bg-body rounded text-center w-100" style="border-radius: 10px;">
                <h3>NOS CONTACTS</h3>
                <div class="content">
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                      <div class="info-item  d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="fa-solid fa-phone"></i>
                        <h3>Téléphone</h3>
                        <p>+225 0767754079</p>
                        <p>+225 0767754095</p>
                        <p>+225 0767755112</p>

                      </div>
                    </div>

                    <div class="col-lg-6 mt-5 mb-5">
                      <div class="info-item d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="fa-solid fa-envelope"></i>
                        <h3>Email</h3>
                        <p class="m-auto">steilautocommercial@gmail.com</p>
                        <br>
                      </div>

                    </div>

                    <div class="col-lg-12">
                      <div class="info-item  d-flex flex-column justify-content-center align-items-center p-2">
                        <i class="fa-solid fa-map-pin"></i>
                        <h3>Notre Adresse</h3>
                        <p class="m-auto">Abidjan, Yopougon en face de UNIWAX sur l'autoroute du nord</p><br>
                      </div>

                    </div>

                  </div>
                </div>

            </div>

          </div>

        </div>
    </section>


   <!-- ======= ActivitY Section ======= -->
   <section class="activite h-100 mb-5" style="background-color: #000000;" id="ours_services">
        <div class="container">
        <h2 class="text-center mb-5 title-section text-white">NOS SERVICES</h2>
            <div class="row">
                <div class="col-lg-4">
                    <a href="">
                    <div class="card pieces_auto  w-100" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center align-items-center text-center">
                        <h5 class="card-title">VENTE DE PIECE AUTO</h5>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 mt-5 mb-5">
                    <a href="">
                    <div class="card reparation w-100" style="min-height: 200px;">
                        <div class="card-body d-flex justify-content-center align-items-center text-center">
                        <h5 class="card-title">REPARATION DE GROS ENGIN</h5>
                        </div>
                    </div>
                    </a>
                </div>

                <div class="col-lg-4 ">
                <a href="">
                    <div class="card vente_vehicule w-100" style="min-height: 200px;">
                    <div class="card-body d-flex justify-content-center align-items-center text-center">
                        <h5 class="card-title">VENTE ET LOCATION D'ENGIN</h5>
                    </div>
                    </div>
                </a>
                </div>

            </div>
        </div>
    </section>


    <div class="brator-deal-product-slider brator-best-seller design-three">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-12">
                    <div class="brator-best-seller-section-header-area">
                        <div class="brator-section-header all-item-left">
                            <div class="brator-section-header-title">
                                <h3>A la une des des pièces auto</h3>
                            </div>
                            <a href="/pieces">Voir tout les produits
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-12">
                    <div class="brator-product-slider splide js-splide p-splide" data-splide="{&quot;pagination&quot;:false,&quot;type&quot;:&quot;loop&quot;,&quot;perPage&quot;:5,&quot;perMove&quot;:&quot;1&quot;,&quot;gap&quot;:30, &quot;breakpoints&quot;:{ &quot;520&quot; :{ &quot;perPage&quot;: &quot;1&quot; },&quot;746&quot; :{ &quot;perPage&quot;: &quot;2&quot; }, &quot;991&quot; :{ &quot;perPage&quot; : &quot;2&quot; }, &quot;1090&quot;:{ &quot;perPage&quot; : &quot;3&quot; }, &quot;1366&quot;:{ &quot;perPage&quot; : &quot;4&quot; }, &quot;1500&quot;:{ &quot;perPage&quot; : &quot;4&quot; }, &quot;1920&quot;:{ &quot;perPage&quot; : &quot;5&quot; }}}">
                        <div class="splide__arrows style-two">
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

                                @foreach ($piece_autos as $piece_auto )
                                    <div class="brator-product-single-item-area splide__slide design-two">

                                        <div class="brator-product-single-item-img">
                                            <a href="#_"><img src="{{$piece_auto->image}}" alt="alt" /></a>
                                        </div>

                                        <div class="brator-product-single-item-mini">
                                            <div class="brator-product-single-item-cat"><a href="#">{{$piece_auto->nom}}</a></div>
                                            <div class="brator-product-single-item-title">
                                                <h5><a href="#_">{{$piece_auto->reference}}</a></h5>
                                            </div>

                                            <div class="brator-product-single-item-btn"><a href="tel:+2250758265650">Appeler</a></div>
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



    <div class="brator-categories-list-area design-three gray-bg">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-section-header">
                        <div class="brator-section-header-title">
                            <h2>Les engins </h2>
                            <a href="#"> Voir tout<i class="lnir lnir-chevron-right"></i> </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="brator-categories-slider style-three splide js-splide p-splide" data-splide="{&quot;pagination&quot;:false,&quot;type&quot;:&quot;loop&quot;,&quot;perPage&quot;:6,&quot;perMove&quot;:&quot;1&quot;,&quot;gap&quot;:30, &quot;breakpoints&quot;:{ &quot;520&quot; :{ &quot;perPage&quot;: &quot;1&quot; },&quot;746&quot; :{ &quot;perPage&quot;: &quot;2&quot; }, &quot;768&quot; :{ &quot;perPage&quot; : &quot;2&quot; }, &quot;991&quot; :{ &quot;perPage&quot; : &quot;3&quot; }, &quot;1090&quot;:{ &quot;perPage&quot; : &quot;4&quot; }, &quot;1200&quot;:{ &quot;perPage&quot; : &quot;4&quot; }, &quot;1366&quot;:{ &quot;perPage&quot; : &quot;5&quot; }, &quot;1500&quot;:{ &quot;perPage&quot; : &quot;5&quot; }, &quot;1920&quot;:{ &quot;perPage&quot; : &quot;7&quot; }}}">
                        <div class="splide__arrows style-three">
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

                            @foreach ($engins as $engin )
                                <div class="brator-categories-single splide__slide">
                                    <div class="brator-categories-single-img">
                                        <a href="#_">
                                        <img class="" src="{{$engin->image}}" data-src="" alt="image" />
                                        </a>
                                    </div>
                                    <div class="brator-categories-single-title">
                                        <p><a href="shop-sub-category.html">{{$engin->nom}}</a></p>
                                    </div>
                                    {{-- <div class="brator-categories-single-sub">
                                        <a href="#_">Mesh</a><a href="#_">Billet</a>
                                    </div> --}}
                                </div>
                            @endforeach


                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Services Section ======= -->
<section id="services ours_services" class="services section-bg">
    <div class="container">

      <div class="section-header">
        <h2>NOS PRESTATIONS DE REPARATION</h2>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" >
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-solid fa-toolbox"></i>
            </div>
            <h3>Entretien</h3>
            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" >
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
            <h3>Réparation du moteur</h3>
            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-toolbox"></i>
            </div>
            <h3>Réparation de la transmission</h3>
            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
            <h3>Réparation de la climatisation et du système de refroidissement</h3>
            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit provident adipisci neque.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-toolbox"></i>
            </div>
            <h3>Réparation du système électrique</h3>
            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed animi at autem alias eius labore.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-screwdriver-wrench"></i>
            </div>
            <h3>Réparation de la carrosserie</h3>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
          </div>
        </div>

      </div>

    </div>
</section>



    <section class="braton-sponser-area">
        <div class="container container-xxl container-xxxl">
            <div class="row">
                <div class="col-lg-12">
                    <div class="braton-sponser-title">
                    <h3>Nos marques</h3>
                    </div>
                </div>
                <div class="row sponser-row">
                    @foreach ($marques as $marque )
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6">
                            <div class="brator-brand-img">
                                <a href="#_"><img class="lazyload" src="{{$marque->chemin}}" alt="Image" /></a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>








 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <a href="/" class="logo d-flex align-items-center mb-3">
                <img src="{{asset('assets/imgages/logo.png')}}" alt="" class="img-fluid" style="max-height: 50px;">
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
              <li><a href="/pieces">Pièces Auto / Engin</a></li>
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
    </svg><span>haut</span>
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
