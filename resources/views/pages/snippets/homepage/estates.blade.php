<div class="home-estates">
    <a href="{{route('estate-preview', ['id' => $estates[0]->id])}}">
        <div class="first-one">
            <img src="{{asset('/images/estates/'.$estates[0]->photo ?? '/')}}" alt="">
            <div class="wrapper">
                <div class="status {{($estates[0]->svrha == 1) ? 'sell' : 'rent'}}">
                    <p>{{($estates[0]->svrha == 1) ? 'PRODAJA' : 'IZNAJMLJIVANJE'}}</p>
                </div>

                <div class="details-about">
                    <h4>{{$estates[0]->naziv ?? '/'}}</h4>
                    <p>{{$estates[0]->adresa ?? '/'}}</p>
                    <div class="button-wrap">
                        <div class="button">
                            <p>{{$estates[0]->cijena ?? '/'}} {{$estates[0]->valutaRel->name ?? '/'}}</p>
                        </div>
                    </div>
                </div>
                <div class="analytics-wrapper">
                    <div class="single-analytics" title="{{count($estates[0]->brojSlika)}} slika/e u galeriji">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="single-analytics" title="{{$estates[0]->cijena ?? '/'}} {{$estates[0]->valutaRel->name ?? '/'}}">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="single-analytics" title="{{$estates[0]->broj_pregleda ?? '/'}} pregleda">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                </div>
            </div>
        </div>
    </a>
    <div class="second-one">
        <div class="second-image">
            <img src="{{asset('/images/estates/'.$estates[1]->photo ?? '/')}}" alt="">
            <a href="{{route('estate-preview', ['id' => $estates[1]->id])}}">
                <div class="wrapper">
                    <div class="status {{($estates[1]->svrha == 1) ? 'sell' : 'rent'}}">
                        <p>{{($estates[1]->svrha == 1) ? 'PRODAJA' : 'IZNAJMLJIVANJE'}}</p>
                    </div>

                    <div class="details-about">
                        <h4>{{$estates[1]->naziv ?? '/'}}</h4>
                        <p>{{$estates[1]->adresa ?? '/'}}</p>
                        <div class="button-wrap">
                            <div class="button">
                                <p>{{$estates[1]->cijena ?? '/'}} {{$estates[1]->valutaRel->name ?? '/'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="{{count($estates[1]->brojSlika)}} slika/e u galeriji">
                            <i class="fas fa-images"></i>
                        </div>
                        <div class="single-analytics" title="{{$estates[1]->cijena ?? '/'}} {{$estates[1]->valutaRel->name ?? '/'}}">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="single-analytics" title="{{$estates[1]->broj_pregleda ?? '/'}} pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="second-image">
            <img src="{{asset('/images/estates/'.$estates[2]->photo ?? '/')}}" alt="">
            <a href="{{route('estate-preview', ['id' => $estates[2]->id])}}">
                <div class="wrapper">
                    <div class="status {{($estates[2]->svrha == 1) ? 'sell' : 'rent'}}">
                        <p>{{($estates[2]->svrha == 1) ? 'PRODAJA' : 'IZNAJMLJIVANJE'}}</p>
                    </div>

                    <div class="details-about">
                        <h4>{{$estates[2]->naziv ?? '/'}}</h4>
                        <p>{{$estates[2]->adresa ?? '/'}}</p>
                        <div class="button-wrap">
                            <div class="button">
                                <p>{{$estates[2]->cijena ?? '/'}} {{$estates[2]->valutaRel->name ?? '/'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="analytics-wrapper">
                        <div class="single-analytics" title="{{count($estates[2]->brojSlika)}} slika/e u galeriji">
                            <i class="fas fa-images"></i>
                        </div>
                        <div class="single-analytics" title="{{$estates[2]->cijena ?? '/'}} {{$estates[2]->valutaRel->name ?? '/'}}">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <div class="single-analytics" title="Kontaktirajte nas u vezi ove nekretnine">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <div class="single-analytics" title="{{$estates[2]->broj_pregleda ?? '/'}} pregleda">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
