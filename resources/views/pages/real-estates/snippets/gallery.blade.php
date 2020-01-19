<div class="slider-container">
    <div class="swiper-container estate-slider">
        <div class="swiper-wrapper">
            @foreach($images as $image)
                <div class="swiper-slide">
                    <img src="{{asset('/images/estates/'.$image->file->file_name ?? '/')}}"  alt="">
                </div>
            @endforeach
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination2"></div>
    </div>

    <script>
        var swiper1 = new Swiper('.estate-slider', {
            slidesPerView: 3,
            spaceBetween: 0,
            pagination: {
                el: '.swiper-pagination2',
                type: 'progressbar',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                1000: {
                    slidesPerView: 2,
                },
                800: {
                    slidesPerView: 1,
                }
            }
        });
    </script>
</div>
