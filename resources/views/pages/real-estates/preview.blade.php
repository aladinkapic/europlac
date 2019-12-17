@extends('layout.layout')

@section('title') Pregled svih nekretnina @stop
@section('other_js_links')
    <script src="{{asset('/js/swiper/swiper.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="inside-breadcrumbs">
            <div class="single-part">
                <p>Poslovno stambeni kompleks uz Unu</p>
            </div>
            <div class="single-part">
                <p>
                    <a href="">Naslovna strana</a> /
                    <a href="">Sve nekretnine</a>  /
                    <a href="">Poslovno stambeni kompleks uz Unu</a>
                </p>
            </div>
        </div>
    </div>

    <!-- slider with images -->
    <div class="slider-container">
        <div class="swiper-container estate-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('/images/estates/1.jpg')}}" class="desktop-version" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/images/estates/2.jpg')}}" class="desktop-version" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/images/estates/3.jpg')}}" class="desktop-version" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/images/estates/4.jpg')}}" class="desktop-version" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/images/estates/5.jpg')}}" class="desktop-version" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('/images/estates/6.jpg')}}" class="desktop-version" alt="">
                </div>
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
            });
        </script>
    </div>

    <!-- estate details -->
    <div class="estate-details">
        <div class="estate-full">
            <div class="estate-state">
                <div class="status featured">
                    <p>EURO-PLAC d.o.o</p>
                </div>
                <div class="status sell">
                    <p>PRODAJA</p>
                </div>
            </div>
            <div class="estate-header">
                <h1>Poslovno stambeni kompleks uz Unu</h1>
                <p>Bosanska Otoka bb, Bosna i Hercegovina</p>
            </div>
            <div class="price">
                <h2>126 000.00 BAM</h2>
            </div>
            <div class="basic-info">
                <div class="single-of-basic">
                    <p>Svrha</p>
                    <p>Prodaja</p>
                </div>
                <div class="single-of-basic">
                    <p>Vrsta nekretnine</p>
                    <p>Apartman</p>
                </div>
                <div class="single-of-basic">
                    <p>Broj soba</p>
                    <p>3 soba / e</p>
                </div>
                <div class="single-of-basic">
                    <p>Broj kupatila</p>
                    <p>2 kupatilo / la</p>
                </div>
                <div class="single-of-basic">
                    <p>Stanje nekretnine</p>
                    <p>Useljivo</p>
                </div>
                <div class="single-of-basic">
                    <p>Površina</p>
                    <p>86 m2</p>
                </div>
            </div>

            <!-- Mini header -->

            <div class="estate-menu">
                <div class="menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="rest-of-it">
                    <p>Karakteristike</p>
                    <p>Dokumenti</p>
                    <p>Video</p>
                    <p>U Blizini</p>
                    <p>Lokacija</p>
                    <p>Kontakt</p>
                </div>
            </div>

            <!-- Long story short -->
            <div class="details-about">
                <p>
                    Stunning Urban Contemporary. For those seeking the best of Urban Living!! Bright, airy open floor plan with 3 full bedrooms and 2 baths. Corner residence with 2 decks facing NorthEast and SouthEast. Contemporary European style kitchen featuring Caesar style counter tops, Fisher & Paykel dual drawer dishwasher and refrigerator. Ge Profile oven, electric range and microwave. Tandem parking for 2 cars. Come see what makes Aria Residence 303 so desirable.
                </p>
            </div>

            <!-- Features -->
            <div class="features-header">
                <h4>Karakteristike nekretnine</h4>
            </div>
            <div class="features">
                <div class="all-features">
                    <div class="single-feature">
                        <i class="fas fa-check"></i>
                        <p>2 Etaža / e</p>
                    </div>
                    <div class="single-feature">
                        <i class="fas fa-check"></i>
                        <p>5 Soba / e</p>
                    </div>
                    <div class="single-feature">
                        <i class="fas fa-check"></i>
                        <p>2 Kupatilo / la</p>
                    </div>
                    <div class="single-feature">
                        <i class="fas fa-check"></i>
                        <p>Centralno grijanje</p>
                    </div>
                    <div class="single-feature">
                        <i class="fas fa-check"></i>
                        <p>Garaža</p>
                    </div>
                    <div class="single-feature">
                        <i class="fas fa-check"></i>
                        <p>Struja</p>
                    </div>
                    <div class="single-feature">
                        <i class="fas fa-check"></i>
                        <p>Voda</p>
                    </div>
                </div>
            </div>

            <!-- Files -->
            <div class="features-header">
                <h4>Privici / Dokumenti</h4>
            </div>
            <div class="files">
                <a href="">
                    <div class="single-file">
                        <i class="fas fa-file-pdf"></i>
                        <p>DokumentacijaV1.pdf</p>
                    </div>
                </a>
                <a href="">
                    <div class="single-file">
                        <i class="fas fa-file-word"></i>
                        <p>Dozvole.docx</p>
                    </div>
                </a>
                <a href="">
                    <div class="single-file">
                        <i class="fas fa-file-excel"></i>
                        <p>Karakteristike.xlxs</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="sidebar">

        </div>
    </div>
@endsection
