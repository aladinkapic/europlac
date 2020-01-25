<div class="slider-container">
    <div class="swiper-container swiper2">
        <div class="swiper-wrapper">
            @foreach($slider as $slide)
                <div class="swiper-slide">
                    <img src="{{asset('/images/slider/'.$slide->image ?? '/')}}" class="desktop-version" alt="">
                    <img src="{{asset('/images/slider/'.$slide->image_mobile ?? '/')}}" class="mobile-version" alt="">
                    <div class="overlay-color"></div>
                    <div class="slider-text">
                        <h1>{{$slide->header ?? '/'}}</h1>
                        <div class="slider-properties">
                            @if($slide->value_one)
                                <div class="single-property">
                                    <div class="just-check">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="just-property">
                                        <h2>{{$slide->value_one ?? '/'}}</h2>
                                    </div>
                                </div>
                            @endif
                            @if($slide->value_two)
                                <div class="single-property">
                                    <div class="just-check">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="just-property">
                                        <h2>{{$slide->value_two ?? '/'}}</h2>
                                    </div>
                                </div>
                            @endif
                            @if($slide->value_three)
                                <div class="single-property">
                                    <div class="just-check">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <div class="just-property">
                                        <h2>{{$slide->value_three ?? '/'}}</h2>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="slider-button">
                            <a href="{{$slide->link ?? '/'}}">
                                <div class="slider-button-btn">
                                    <p>PREGLEDAJTE VIŠE</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
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
</div><?php
