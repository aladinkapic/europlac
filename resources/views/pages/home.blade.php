@extends('layout.layout')

@section('title') Dobro došli na www.europlac-nekretnine.com @stop

@section('content')

    <div class="slider-container">
        {!! Html::image(asset('/images/slider/home-2.png')) !!}
    </div>

    <div id="all_partners">
        <div class="dots_w"></div>
        <div class="swiper-container swiper2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
{{--                    <img src="uploaded_images/{{$partner->image}}" alt="">--}}
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination2"></div>
        </div>

        <script>
            var swiper1 = new Swiper('.swiper2', {
                slidesPerView: 6,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination2',
                    /* type: 'progressbar', */
                    clickable: true,
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 5,
                    },
                    1000: {
                        slidesPerView: 4,
                    },800: {
                        slidesPerView: 3,
                    },600: {
                        slidesPerView: 2,
                    },400: {
                        slidesPerView: 2,
                    }
                }
            });
        </script>
        <script>
            //create_dots("all_partners");
        </script>

    </div>

@endsection
