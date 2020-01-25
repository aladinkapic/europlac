@extends('layout.layout')

@section('title') Pregled svih nekretnina @stop
@section('other_js_links')
    <script src="{{asset('/js/swiper/swiper.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="inside-breadcrumbs">
            <div class="single-part single-wanished">
                <p>{{$estate->naziv ?? '/'}}</p>
            </div>
            <div class="single-part ">
                <p>
                    <a href="{{route('home')}}">Naslovna strana</a> /
                    <a href="{{url()->previous()}}">Sve nekretnine</a>  /
                    <a href="#">{{$estate->naziv ?? '/'}}</a>
                </p>
            </div>
        </div>
    </div>

    <!-- slider with images -->
    @include('pages.real-estates.snippets.gallery')

    <!-- estate details -->
    <div class="estate-details">
        <div class="estate-full">
            <div class="estate-state">
                <div class="status featured">
                    <p>EURO-PLAC d.o.o</p>
                </div>
                <div class="status @if($estate->svrha == 1) sell @else rent @endif">
                    <p>{{strtoupper($estate->svrhaRel->name ?? '/')}}</p>
                </div>
            </div>
            <div class="estate-header">
                <h1>{{$estate->naziv ?? '/'}}</h1>
                <p>{{$estate->adresa ?? '/'}}, {{$estate->drzavaRel->name ?? '/'}}</p>
            </div>
            <div class="price">
                <h2>{{$estate->cijena ?? '/'}} BAM</h2>
            </div>
            <div class="basic-info">
                <div class="single-of-basic">
                    <p>Svrha</p>
                    <p>{{$estate->svrhaRel->name ?? '/'}}</p>
                </div>
                <div class="single-of-basic">
                    <p>Vrsta nekretnine</p>
                    <p>{{$estate->vrstaRel->name ?? '/'}}</p>
                </div>
                <div class="single-of-basic">
                    <p>Broj soba</p>
                    <p>{{$estate->broj_soba ?? '/'}} soba / e</p>
                </div>
                <div class="single-of-basic">
                    <p>Broj kupatila</p>
                    <p>{{$estate->broj_kupatila ?? '/'}} kupatilo / la</p>
                </div>
                <div class="single-of-basic">
                    <p>Stanje nekretnine</p>
                    <p>{{$estate->stanjeRel->name ?? '/'}}</p>
                </div>
                <div class="single-of-basic">
                    <p>Površina</p>
                    <p>{{$estate->povrsina ?? '/'}} m2</p>
                </div>
            </div>

            <!-- Mini header -->

            <div class="estate-menu">
                <div class="menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="rest-of-it">
                    <a href="#estate-features"><p>Karakteristike</p></a>
                    <a href="#estate-files"><p>Dokumenti</p></a>
                    @if(isset($estate->video)) <a href="#estate-video"><p>Video</p></a> @endif
                    <a href="#estate-nearby"><p >U Blizini</p></a>
                    <a href="#estate-location"><p>Lokacija</p></a>
                    <a href="#estate-agent"><p>Kontakt</p></a>
                </div>
            </div>

            <!-- Long story short -->
            <div class="details-about">
                <p>
                    Stunning Urban Contemporary. For those seeking the best of Urban Living!! Bright, airy open floor plan with 3 full bedrooms and 2 baths. Corner residence with 2 decks facing NorthEast and SouthEast. Contemporary European style kitchen featuring Caesar style counter tops, Fisher & Paykel dual drawer dishwasher and refrigerator. Ge Profile oven, electric range and microwave. Tandem parking for 2 cars. Come see what makes Aria Residence 303 so desirable.
                </p>
                <p>
                    Stunning Urban Contemporary. For those seeking the best of Urban Living!! Bright, airy open floor plan with 3 full bedrooms and 2 baths. Corner residence with 2 decks facing NorthEast and SouthEast. Contemporary European style kitchen featuring Caesar style counter tops, Fisher & Paykel dual drawer dishwasher and refrigerator. Ge Profile oven, electric range and microwave. Tandem parking for 2 cars.
                </p>
            </div>

            <!-- Features -->
            <div class="features-header" id="estate-features">
                <h4>Karakteristike nekretnine</h4>
            </div>
            @include('pages.real-estates.snippets.features')

            <!-- Files -->
            <div class="features-header" id="estate-files">
                <h4>Privici / Dokumenti</h4>
            </div>
            @include('pages.real-estates.snippets.documents')

            <!-- Video -->
            @if(isset($estate->video))
                <div class="features-header" id="estate-video">
                    <h4>Video</h4>
                </div>
                <div class="video">
                    <iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="{{$estate->video ?? '/'}}"></iframe>
                </div>
            @endif

            <!-- nearby -->
            <div class="features-header" id="estate-nearby">
                <h4>Objekti u blizini</h4>
            </div>
            @include('pages.real-estates.snippets.nearby')

            <!-- location -->
            @if(($estate->x_koordinata) and ($estate->y_koordinata))
                <div class="features-header" id="estate-location">
                    <h4>Lokacija </h4>
                </div>
                <div class="map-of-estate" id="map-of-estate" lat="{{$estate->x_koordinata ?? '/'}}" lon="{{$estate->y_koordinata ?? '/'}}"></div>
            @endif

            <!-- Contact agent -->
            @include('pages.real-estates.snippets.contact-agent')
        </div>


        <div class="sidebar">
            <!-- Agent preview -->
            <div class="agent-preview">
                <div class="agent-image">
                    <img src="{{asset('/images/slider/albin.jpg')}}" class="desktop-version" alt="">
                </div>

                <div class="just-header">
                    <h4>Albin Ćoralić</h4>
                    <p>Direktor</p>
                </div>

                <div class="agent-details">
                    <div class="single-agent-detail">
                        <i class="fas fa-phone"></i>
                        <p>0038761/536-889</p>
                    </div>
                    <div class="single-agent-detail">
                        <i class="fas fa-phone"></i>
                        <p>0038761/856-899</p>
                    </div>
                    <div class="single-agent-detail">
                        <i class="fas fa-envelope-open-text"></i>
                        <p>info@europlac-nekretnine.com</p>
                    </div>
                    <div class="single-agent-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Lojićka bb, 77220 Cazin</p>
                    </div>
                </div>
                <div class="agent-social">
                    <a target="_blank" href="" title="Posjetite našu Facebook stranicu">
                        <div class="single-social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </a>
                    <a target="_blank" href="" title="Posjetite našu LinkedIN stranicu">
                        <div class="single-social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </a>
                    <a target="_blank" href="" title="Posjetite našu Instagram stranicu">
                        <div class="single-social-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </a>
                    <a target="_blank" href="" title="Posjetite naš YouTube kanal">
                        <div class="single-social-icon">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </a>
                    <a target="_blank" href="" title="Posjetite našu Twitter stranicu">
                        <div class="single-social-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Request showing -->
            <div class="get-date">
                <div class="get-date-header">
                    <h4>Zakažite posjetu</h4>
                </div>
                <div class="swiper-container request-showing swiper-init" data-initial-slide="2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" day="22" month="12" year="2019">
                            <div class="date-header">
                                <p>NED</p>
                            </div>
                            <h4>
                                22
                            </h4>
                            <h5>
                                DEC
                            </h5>
                        </div>
                        <div class="swiper-slide" day="23" month="12" year="2019">
                            <div class="date-header">
                                <p>PON</p>
                            </div>
                            <h4>
                                23
                            </h4>
                            <h5>
                                DEC
                            </h5>
                        </div>
                        <div class="swiper-slide" day="24" month="12" year="2019">
                            <div class="date-header">
                                <p>UTO</p>
                            </div>
                            <h4>
                                24
                            </h4>
                            <h5>
                                DEC
                            </h5>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <div class="get-date-header">
                    <h5>Izaberite vrijeme</h5>
                </div>

                <div class="select-dates">
                    <div class="my-select-wrapper" title="Odaberite razlog kontaktiranja" id="request_showing_from" value="0">
                        <div class="my-select-value">
                            <p>09:00</p>
                            <div class="select-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>

                        <div class="select-values">
                            <div class="my-option" value="0">09:00</div>
                            <div class="my-option" value="1">09:30</div>
                        </div>
                    </div>
                    <p class="to">DO</p>
                    <div class="my-select-wrapper" title="Odaberite razlog kontaktiranja" id="request_showing_to" value="0">
                        <div class="my-select-value">
                            <p>09:00</p>
                            <div class="select-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>

                        <div class="select-values">
                            <div class="my-option" value="0">09:00</div>
                            <div class="my-option" value="1">09:30</div>
                        </div>
                    </div>
                </div>

                <div class="schedule">
                    <p>ZAKAŽITE POSJETU</p>
                </div>

                <script>
                    var swiper = new Swiper('.request-showing', {
                        effect: 'coverflow',
                        grabCursor: true,
                        centeredSlides: true,
                        slidesPerView: 3,
                        initialSlide: 1,
                        coverflowEffect: {
                            rotate: 50,
                            stretch: 0,
                            depth: 100,
                            modifier: 1,
                        }
                    });

                    //$('.swiper-slide-active img').attr('src')
                </script>
            </div>
        </div>
    </div>
@endsection
@section('second_js_scripts')
    <script src="{{asset('/js/maps/single-estate.js')}}"></script>
@endsection
