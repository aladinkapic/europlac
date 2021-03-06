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
        @foreach($estates as $estate)
            <div class="single-estate" id-value="{{$estate->id ?? '/'}}">
                <div class="image-part">
                    <img src="{{asset('/images/estates/'.$estate->photo ?? '/')}}" alt="">
                    <div class="details">
                        <div class="estate-buttons">
                            @if($estate->akcija == 'Da')
                                <div class="status sale">
                                    <p>AKCIJA</p>
                                </div>
                            @endif
                            <div class="status {{($estate->svrha == 1) ? 'sell' : 'rent'}}">
                                <p>{{($estate->svrha == 1) ? 'PRODAJA' : 'IZNAJMLJIVANJE'}}</p>
                            </div>
                        </div>

                        <div class="left-home-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="analytics-wrapper">
                            <div class="single-analytics" title="{{$estate->cijena ?? '/'}} {{$estate->valutaRel->name ?? '/'}}">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="single-analytics" title="{{count($estate->brojSlika)}} slika/e u galeriji">
                                <i class="fas fa-images"></i>
                            </div>
                            <div class="single-analytics" title="{{$estate->broj_pregleda ?? '/'}} pregleda">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rest-part">
                    <div class="split-it">
                        <p>{{$estate->naziv ?? '/'}}</p>
                    </div>
                    <div class="split-it split-it-second">
                        <p>{{$estate->cijena ?? '/'}} {{$estate->valutaRel->name ?? '/'}}</p>
                    </div>
                </div>
                <div class="address">
                    <p>{{$estate->adresa ?? '/'}}</p>
                </div>
                <div class="detailss">
                    <p>{{$estate->povrsina ?? '/'}} m<span>2</span> </p>
                    <p>{{$estate->broj_soba ?? '/'}} soba/e </p>
                    <p>{{$estate->broj_kupatila ?? '/'}} kupatilo / la </p>
                </div>
                <div class="posted-by">
                    <p>{{$footerEstate->userRel->name ?? '/'}}</p>
                    <div class="img-wrapper">
                        <img src="{{asset('/images/users/'.$footerEstate->userRel->photo ?? '/')}}" alt="">
                    </div>
                </div>
                <div class="posted-by posted-by-2">
                    <p>Objavio / la</p>
                    <p class="who">
                        Agencija
                    </p>
                </div>
            </div>
        @endforeach
    </div>


    <div class="pages">
        @for($i=0; $i<((int)($estates->total() / 12) + 1); $i++)
            <div class="single-page {{($i+1 == $current_page) ? 'focus' : ''}}" page="{{$i + 1}}">
                <p>{{$i + 1}}</p>
            </div>
        @endfor
        <div class="single-page next-one" page="{{$current_page + 1}}">
            <p>Sljedeća stranica</p>
        </div>
    </div>

@endsection
@section('second_js_scripts')
    <script>
        let coodinates = JSON.parse(@json($coordinates));
    </script>
    <script src="{{asset('/js/maps/all-estates.js')}}"></script>
@endsection
