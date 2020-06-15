<footer>
    <div class="inside-footer">
        <div class="footer-column">
            <div class="logo-part">
                {!! Html::image(asset('/images/logo.png')) !!}
            </div>
            <p>
                EURO-PLAC d.o.o Agencija za poslovanje nekretninama je s Vama od 2007 godine. Punih 12 godina uloženog truda kako bi bili najbolji. Za sve informacije kontaktirajte nas!
            </p>
            <div class="text-with-icon">
                <i class="fas fa-home"></i>
                <p>
                    Lojićka bb <br> 77220 Cazin, Bosna i Hercegovina
                </p>
            </div>
            <div class="text-with-icon">
                <i class="fas fa-phone"></i>
                <p>
                    +387 61/786-860
                </p>
            </div>
            <div class="text-with-icon">
                <i class="fas fa-envelope-open-text"></i>
                <p>
                    info@europlac-nekretnine.com
                </p>
            </div>
        </div>
        <div class="footer-column">
            <div class="colum-header">
                <h3>ZADNJI POSTOVI</h3>
            </div>
            @foreach($blog as $post)
                <div class="footer-post">
                    <h4>{{$post->header ?? '/'}}</h4>
                    <p>
                        {{$post->short_desc ?? '/'}}
                    </p>
                </div>
            @endforeach
        </div>
        <div class="footer-column">
            <div class="colum-header">
                <h3>IZDVOJENE NEKRETNINE</h3>
            </div>
            <a href="{{route('estate-preview', ['id' => $footerEstate->id ?? ''])}}">
                <div class="footer-estate">
                    <div class="image-part">
                        <img src="{{asset('/images/estates/'.$footerEstate->photo ?? '/')}}" alt="">
                        <div class="details">
                            <div class="status {{($footerEstate->svrha == 1) ? 'sell' : 'rent'}}">
                                <p>{{($footerEstate->svrha == 1) ? 'PRODAJA' : 'IZNAJMLJIVANJE'}}</p>
                            </div>
                            <div class="left-home-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="analytics-wrapper">
                                <div class="single-analytics" title="{{$footerEstate->cijena ?? '/'}} {{$footerEstate->valutaRel->name ?? '/'}}">
                                    <i class="far fa-heart"></i>
                                </div>
                                <div class="single-analytics" title="{{count($footerEstate->brojSlika) ?? '/'}} slika/e u galeriji">
                                    <i class="far fa-images"></i>
                                </div>
                                <div class="single-analytics" title="{{$footerEstate->broj_pregleda ?? '/'}} pregleda">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rest-part">
                        <div class="split-it">
                            <p>{{$footerEstate->naziv ?? '/'}}</p>
                        </div>
                        <div class="split-it split-it-second">
                            <p>{{$footerEstate->cijena ?? '/'}} {{$footerEstate->valutaRel->name ?? '/'}}</p>
                            <!-- <p>Od 300 KM / mjesečno</p> -->
                        </div>
                    </div>
                    <div class="address">
                        <p>{{$footerEstate->adresa ?? '/'}}, {{$footerEstate->drzavaRel->name ?? '/'}}</p>
                    </div>
                    <div class="detailss">
                        <p>{{$footerEstate->povrsina ?? '/'}} m<span>2</span> </p>
                        <p>{{$footerEstate->broj_soba ?? '/'}} soba/e </p>
                        <p>{{$footerEstate->broj_kupatila ?? '/'}} kupatilo / la </p>
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
            </a>

        </div>
        <div class="footer-column column-forth">
            <div class="colum-header">
                <h3>PRATITE NAS</h3>
            </div>
            <div class="social-icons">
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

                <a target="_blank" href="https://github.com/aladinkapic/europlac" title="Pogledajte Source Code aplikacije na GitHub-u">
                    <div class="single-social-icon">
                        <i class="fab fa-github"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="bottom-footer">
        <div class="bottom-elements">
            <div class="links">
                <a href="">
                    <p>Naslovna</p>
                </a>
                <a href="">
                    <p>Nekretnine</p>
                </a>
                <a href="">
                    <p>O nama</p>
                </a>
                <a href="">
                    <p>Kontaktirajte nas</p>
                </a>
            </div>
            <div class="copy">
                <p>
                    &copy; {{date('Y')}} - Copyright Euro-Plac d.o.o Sva prava zadržana
                </p>
            </div>
        </div>
    </div>
</footer>
