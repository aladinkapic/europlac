@extends('layout.layout')

@section('title') Dobro došli na www.europlac-nekretnine.com @stop
@section('other_js_links')     <script src="{{asset('/js/swiper/swiper.min.js')}}"></script> @endsection
@section('content')
    <!-- Main slider with images -->
    @include('pages.snippets.homepage.slider')

    <div class="numbers">
        <div class="one-number">
            <h3>
                {{$number_of_estates ?? '/'}}
            </h3>
            <p>NEKRETNINE</p>
        </div>
        <div class="one-number">
            <h3>€ {{$total_money ?? '/'}}</h3>
            <p>MILIONA U PRODAJI</p>
        </div>
        <div class="one-number">
            <h3>200+</h3>
            <p>SRETNIH KLIJENATA</p>
        </div>
    </div>
    <div class="just-line"></div>

    <!-- Three home estates -->
    @include('pages.snippets.homepage.estates')

    <div class="small-intro">
        <div class="inside-intro">
            <h2>AGENCIJA ZA POSLOVANJE NEKRETNINAMA</h2>
            <p>
                Višegodišnje iskustvo našeg direktora i uposlenika naše firme EURO-PLAC d.o.o., kvalitet prezentacije nekretnina, broj nekretnina u ponudi, reference... su samo neki od faktora za korektan odabir nas kao posrednika, a sve to možete provjeriti na našoj stranici te kod naših poslovnih partnera. Trudimo se razumijeti poteškoće na koje nailazite prilikom kupovine, odnosno prodaje na tržištu nekretnina. Naš je cilj uspostaviti neposrednu i direktnu komunikaciju sa Vama i svim našim klijentima. Kupnja i prodaja nekretnina (stan, kuća, poslovni prostor, zemljište) podliježe promjenama. Danas je to velik i važan događaj u životu svakog pojedinca, a ujedno i vrlo složena transakcija. Cijeli proces može znatno olakšati profesionalno obučena osoba kao što je iskusni agent za nekretnine.
            </p>
        </div>
    </div>
@endsection


