@extends('layouts.app')
@section('content')

    <div class="brator-banner-slider-area">
        <div class="container-xxxl container-xxl container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brator-banner-area design-four lazyload" data-bg="{{asset('assets/images/logo.png')}}">
                        <div class="brator-banner-content">
                            <h2><a href="#_" style="text-align: center !important">PIECES AUTO ET MOTEURS</a></h2>
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
                                                        {{-- <a href="product-layout-01.html">{{$piece_auto->categorie_pieces}}</a> --}}
                                                    </div>
                                                    <div class="brator-product-single-item-title">
                                                        <h5><a href="#_"> {{$piece_auto->nom}}</a></h5>
                                                        <p>{{$piece_auto->reference}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="brator-product-single-item-area-right">
                                                <div class="brator-product-single-item-btn">
                                                    <div class="brator-product-single-item-btn-cart">
                                                        <button ><a href="tel:+2250758265650">Appeler</a></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                @endforeach
                                <div class="d-flex justify-content-center mb-5 ">
                                    {{ $piece_autos->links() }}
                                </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
