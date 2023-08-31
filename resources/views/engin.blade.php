@extends('layouts.app')
@section('content')

<!-- New pieces -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="brator-best-product-slider">
                    <div class="brator-section-header text-center mb-5 mt-5">
                        <div class="brator-section-header-title texte-center">
                            <h2>ENGINS</h2>
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

@endsection
