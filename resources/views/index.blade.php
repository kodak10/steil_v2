
@extends('layouts.app')

@section('content')

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
    <section class="service mb-5" style="background-color: #000000;" id="">
        <div class="container">
        <h2 class="text-center mb-5 mt-3 title-section text-white">NOS SERVICES</h2>
            <div class="row">
                <div class="col-lg-4">
                    <a href="/pieces">
                        <div class="card w-100">
                            <img class="card-img-top" src="{{asset('assets/images/slide-1.png')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center font-weight-bold">Vente de pièces auto et moteur</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 mt-5 mb-5">
                    <a href="/engins">
                        <div class="card w-100">
                            <img class="card-img-top" src="{{asset('assets/img/vente_engin.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title text-center font-weight-bold">Vente et location d'engin</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 mb-3">
                    <a href="/reparation">
                        <div class="card w-100">
                            <img class="card-img-top" src="{{asset('assets/img/reparation_vehicule.jpg')}}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title text-center font-weight-bold">Reparation d'egin automobile</h5>
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


    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="brator-best-product-slider">
                    <div class="brator-section-header">
                        <div class="brator-section-header-title">
                            <h2>Engins</h2>
                            <a href="/engins"> Voir tout<i class="lnir lnir-chevron-right"></i> </a>
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
                                @foreach ($engins as $engin)
                                <div class="brator-product-single-item-area splide__slide design-two">

                                    <div class="brator-product-single-item-info info-content-flex">
                                        <div class="brator-product-single-item-info-right"><a href="#_">
                                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                                            </svg></a>
                                        </div>
                                    </div>



                                        <div class="brator-product-single-item-img">
                                            <a href="#_"><img class="img-fluid" src="{{$engin->image}}" alt="image" /></a>
                                        </div>

                                        <div class="brator-product-single-item-mini">
                                            <div class="brator-product-single-item-cat">
                                                    <a href="#">{{$engin->nom}}</a>
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


@endsection
