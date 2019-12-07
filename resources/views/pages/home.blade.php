@extends('layout.layout')

@section('title') Dobro došli na www.europlac-nekretnine.com @stop
@section('other_js_links')     <script src="{{asset('/js/swiper/swiper.min.js')}}"></script> @endsection
@section('content')

    <div class="slider-container">
        <div class="swiper-container swiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('/images/slider/home-2.png')}}" class="desktop-version" alt="">
                    <img src="{{asset('/images/slider/home-m-1.png')}}" class="mobile-version" alt="">
                    <div class="overlay-color"></div>
                    <div class="slider-text">
                        <h1>Brand New Luxury Condo in San Diego</h1>
                        <div class="slider-properties">
                            <div class="single-property">
                                <div class="just-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="just-property">
                                    <h2>Stunning city and waterfront views</h2>
                                </div>
                            </div>
                            <div class="single-property">
                                <div class="just-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="just-property">
                                    <h2>Swedish hardwood flooring and Italian cabinetry</h2>
                                </div>
                            </div>
                            <div class="single-property">
                                <div class="just-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="just-property">
                                    <h2>Unparalleled services and amenities</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slider-button">
                            <a href="">
                                <div class="slider-button-btn">
                                    <p>ZAKAŽITE SASTANAK</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/images/slider/home-3.png')}}" class="desktop-version" alt="">
                    <img src="{{asset('/images/slider/home-m-2.png')}}" class="mobile-version" alt="">
                    <div class="overlay-color"></div>
                    <div class="slider-text">
                        <h1>Brand New Luxury Condo in San Diego</h1>
                        <div class="slider-properties">
                            <div class="single-property">
                                <div class="just-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="just-property">
                                    <h2>Swedish hardwood flooring and Italian cabinetry</h2>
                                </div>
                            </div>
                            <div class="single-property">
                                <div class="just-check">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="just-property">
                                    <h2>Unparalleled services and amenities</h2>
                                </div>
                            </div>
                        </div>
                        <div class="slider-button">
                            <a href="">
                                <div class="slider-button-btn">
                                    <p>ZAKAŽITE SASTANAK</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination2"></div>
        </div>

        <script>
            var swiper1 = new Swiper('.swiper2', {
                slidesPerView: 1,
                spaceBetween: 0,
                pagination: {
                    el: '.swiper-pagination2',
                    /* type: 'progressbar', */
                    clickable: true,
                },
                // autoplay: {
                //     delay: 5000,
                // },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    </div>

@endsection
