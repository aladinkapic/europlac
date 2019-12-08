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

    <div class="numbers">
        <div class="one-number">
            <h3>
                162
            </h3>
            <p>NEKRETNINE</p>
        </div>
        <div class="one-number">
            <h3>€ 1.5</h3>
            <p>MILIONA U PRODAJI</p>
        </div>
        <div class="one-number">
            <h3>200+</h3>
            <p>SRETNIH KLIJENATA</p>
        </div>
    </div>
    <div class="just-line"></div>

    <div class="home-estates">
        <div class="first-one">
            <img src="{{asset('/images/slider/estate-1.jpg')}}" alt="">
            <div class="wrapper">
                <div class="status sell">
                    <p>PRODAJA</p>
                </div>
                <div class="details-about">
                    <h4>Kuća sa bazenom</h4>
                    <p>Muhameda ef. Pandže 55, Sarajevo</p>
                    <div class="button-wrap">
                        <div class="button">
                            <p>120 000 KM</p>
                        </div>
                    </div>
                </div>
                <div class="analytics-wrapper">
                    <div class="single-analytics" title="10 slika u galeriji">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="single-analytics" title="120 000 KM">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="single-analytics" title="2190 pregleda">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-one">
            <div class="second-image">
                <img src="{{asset('/images/slider/estate-2.jpg')}}" alt="">
                <div class="wrapper">
                    <div class="status rent">
                        <p>IZNAJMLJIVANJE</p>
                    </div>
                    <div class="details-about">
                        <h4>Vikendica na moru, u blizini plaže</h4>
                        <p>Zadar, Hrvatska </p>
                        <div class="button-wrap">
                            <div class="button">
                                <p>156,000 KM</p>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="10 slika u galeriji">
                            <i class="fas fa-images"></i>
                        </div>
                        <div class="single-analytics" title="120 000 KM">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-image">
                <img src="{{asset('/images/slider/estate-3.jpg')}}" alt="">
                <div class="wrapper">
                    <div class="status sold">
                        <p>PRODANO</p>
                    </div>
                    <div class="details-about">
                        <h4>Planinska koliba, Vlašić</h4>
                        <p>Vlašić, Bosna i Hercegovina</p>
                        <div class="button-wrap">
                            <div class="button">
                                <p>84,000 KM</p>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="10 slika u galeriji">
                            <i class="fas fa-images"></i>
                        </div>
                        <div class="single-analytics" title="120 000 KM">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="small-intro">
        <div class="inside-intro">
            <h2>AGENCIJA ZA POSLOVANJE NEKRETNINAMA</h2>
            <p>
                Višegodišnje iskustvo našeg direktora i uposlenika naše firme EURO-PLAC d.o.o., kvalitet prezentacije nekretnina, broj nekretnina u ponudi, reference... su samo neki od faktora za korektan odabir nas kao posrednika, a sve to možete provjeriti na našoj stranici te kod naših poslovnih partnera. Trudimo se razumijeti poteškoće na koje nailazite prilikom kupovine, odnosno prodaje na tržištu nekretnina. Naš je cilj uspostaviti neposrednu i direktnu komunikaciju sa Vama i svim našim klijentima. Kupnja i prodaja nekretnina (stan, kuća, poslovni prostor, zemljište) podliježe promjenama. Danas je to velik i važan događaj u životu svakog pojedinca, a ujedno i vrlo složena transakcija. Cijeli proces može znatno olakšati profesionalno obučena osoba kao što je iskusni agent za nekretnine.
            </p>
        </div>
    </div>

    @include('pages.includes.footer.footer')
@endsection
