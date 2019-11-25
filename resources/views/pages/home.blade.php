@extends('layout.layout')

@section('title') Dobro došli na www.europlac-nekretnine.com @stop
@section('other_js_links')     <script src="{{asset('/js/swiper/swiper.min.js')}}"></script> @endsection
@section('content')

    <div class="slider-container">
        <div class="swiper-container swiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    {!! Html::image(asset('/images/slider/home-2.png')) !!}
                </div>
                <div class="swiper-slide">
                    {!! Html::image(asset('/images/slider/home-2.png')) !!}
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
                breakpoints: {
                    1200: {
                        slidesPerView: 1,
                    }
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        </script>
    </div>

@endsection
