@extends('layout.layout')

@section('title') Pregled svih nekretnina @stop
@section('other_js_links')
    <script src="{{asset('/js/swiper/swiper.min.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection
@section('content')
    <div class="estates-map" id="map"></div>

    <div class="search-map-bar">
        <div class="searching-for">
            <p>Pretražujete : </p>
        </div>
        <div class="all-search-fields">
            <p>Sve nekretnine</p>
        </div>
        <div class="open-close-button">
            <p>Zatvorite kartu</p>
            <i class="far fa-minus-square"></i>
        </div>
    </div>

    <div class="all-estates">
        <div class="single-estate" id-value="1">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-2.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Useljiva kuća u Bosanskoj Otoci</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-1.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Stan u centru Bihaća</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-3.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Stan u centru Bihaća</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-2.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Useljiva kuća u Bosanskoj Otoci</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>

        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-1.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Stan u centru Bihaća</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-3.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Stan u centru Bihaća</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-2.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Useljiva kuća u Bosanskoj Otoci</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-2.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Useljiva kuća u Bosanskoj Otoci</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>

        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-2.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Useljiva kuća u Bosanskoj Otoci</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-1.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Stan u centru Bihaća</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-3.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Stan u centru Bihaća</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
        <div class="single-estate">
            <div class="image-part">
                <img src="{{asset('/images/slider/estate-2.jpg')}}" alt="">
                <div class="details">
                    <div class="status sell">
                        <p>PRODAJA</p>
                    </div>
                    <div class="left-home-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="120 000 KM">
                            <i class="far fa-heart"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="single-analytics" title="2190 pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rest-part">
                <div class="split-it">
                    <p>Useljiva kuća u Bosanskoj Otoci</p>
                </div>
                <div class="split-it split-it-second">
                    <p>Od 300 KM / mjesečno</p>
                </div>
            </div>
            <div class="address">
                <p>Ozimice 1 bb Bihać, Bosna i Hercegovina</p>
            </div>
            <div class="detailss">
                <p>56 m<span>2</span> </p>
                <p> 3 sprat </p>
                <p> 4 sobe </p>
            </div>
            <div class="posted-by">
                <p>Albin Ćoralić</p>
                <div class="img-wrapper">
                    <img src="{{asset('/images/slider/agent.jpg')}}" alt="">
                </div>
            </div>
            <div class="posted-by posted-by-2">
                <p>Objavio / la</p>
                <p class="who">
                    Agencija
                </p>
            </div>
        </div>
    </div>


    <div class="pages">
        <div class="single-page focus">
            <p>1</p>
        </div>
        <div class="single-page">
            <p>2</p>
        </div>
        <div class="single-page">
            <p>3</p>
        </div>
        <div class="single-page next-one">
            <p>Sljedeća stranica</p>
        </div>
    </div>

@endsection
