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
                <h1 id="estate-full-name">{{$estate->naziv ?? '/'}}</h1>
                <input type="hidden" id="estate-full-id" value="{{$estate->id ?? '/'}}">
                <p>{{$estate->adresa ?? '/'}}, {{$estate->drzavaRel->name ?? '/'}}</p>
            </div>
            <div class="price">
                <h2>{{$estate->cijena ?? '/'}} {{$estate->valutaRel->name ?? '/'}}</h2>
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
                <p>{!! nl2br(e($estate->opis ?? '/')) !!}</p>
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

        <!-- Sidebar -->
        @include('pages.real-estates.snippets.sidebar')

    </div>
@endsection
@section('second_js_scripts')
    <script src="{{asset('/js/maps/single-estate.js')}}"></script>
@endsection
