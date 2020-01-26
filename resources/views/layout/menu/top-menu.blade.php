<!------------------------------------------------- Top menu ---------------------------------------------------------->
<div id="top-menu">
    <div id="menu-links">
        <a href="{{route('home')}}">
            <div class="logo-wrapper">
                {!! Html::image(asset('/images/logo.png')) !!}
            </div>
        </a>
        <div class="links-part">
            <div class="single-link">
                <a href="{{route('home')}}">Naslovna strana</a>
            </div>
            <div class="single-link">
                <a href="{{route('all-estates')}}">Nekretnine</a>
            </div>
            <div class="single-link">
                <a href="">Usluge</a>
            </div>
            <div class="single-link">
                <a href="{{route('about-us')}}">O nama</a>
            </div>
            <div class="single-link">
                <a href="{{route('contact-us')}}">Kontaktirajte nas</a>
            </div>
        </div>
        <div class="sign-up">
            <a href="{{route('sign-in')}}">
                <span>Forma /</span> Prijavite se
            </a>
            <div class="mobile-menu-icon exit_menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
</div>

<!------------------------------------------------  Left menu  -------------------------------------------------------->
<div id="left_menu">
    <div class="exit_menu" title="Zatvorite menu">
        <i class="fas fa-times"></i>
    </div>
    <div class="languages">
        <div class="single_language single_language0">
            <p>BOS</p>
        </div>
        <div class="single_language">
            <p>ENG</p>
        </div>
        <div class="single_language single_language2">
            <p>GER</p>
        </div>
    </div>

    <!-- menu links -->
    <div class="menu_links">
        <div class="menu_link">
            <a href="/">NASLOVNA</a>
        </div>
        <div class="menu_link left_with_sublinks" index="0">
            <a href="#">NEKRETNINE</a>
        </div>
        <div class="menu_sublinks">
            <div class="menu_sublink">
                <a href="/nekretnine">
                    <p># Sve nekretnine</p>
                </a>
            </div>
            <div class="menu_sublink">
                <a href="/nekretnine?filter%5B%5D=vrstaRel.name&filter_values%5B%5D=Apartman&limit=12">
                    <p># Apartmani</p>
                </a>
            </div>
            <div class="menu_sublink">
                <a href="/nekretnine?filter%5B%5D=vrstaRel.name&filter_values%5B%5D=Kuća&limit=12">
                    <p># Kuće</p>
                </a>
            </div>
            <div class="menu_sublink">
                <a href="/nekretnine?filter%5B%5D=vrstaRel.name&filter_values%5B%5D=Poslovni%20prostor&limit=12">
                    <p># Poslovni prostori</p>
                </a>
            </div>
            <div class="menu_sublink">
                <a href="/nekretnine?filter%5B%5D=vrstaRel.name&filter_values%5B%5D=Stan&limit=12">
                    <p># Stanovi</p>
                </a>
            </div>
            <div class="menu_sublink">
                <a href="/nekretnine?filter%5B%5D=vrstaRel.name&filter_values%5B%5D=Vikendica&limit=12">
                    <p># Vikendice</p>
                </a>
            </div>
            <div class="menu_sublink">
                <a href="/nekretnine?filter%5B%5D=vrstaRel.name&filter_values%5B%5D=Vila&limit=12">
                    <p># Vile</p>
                </a>
            </div>
        </div>
        <div class="menu_link">
            <a href="">USLUGE</a>
        </div>
        <div class="menu_link">
            <a href="/o-nama">O NAMA</a>
        </div>
        <div class="menu_link">
            <a href="/kontaktirajte-nas">KONTAKT</a>
        </div>
    </div>


    <div class="copyrights">
        <a href="/login">
            <p>	&copy; Copyright <span>EURO-PLAC d.o.o</span> </p>
        </a>
    </div>
</div>


<!---------------------------------------------- Search console ------------------------------------------------------->
<div id="search-console">
    <div class="search-wrapper">
        <div class="search-row">
            <div class="top-first">
                <div class="search-icon">
                    <i class="fas fa-search"></i>
                </div>
                <input type="text" name="name_of" placeholder="Pretraga po nazivu .." autocomplete="off">
            </div>
            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="gradRel.name" value="0">
                    <div class="my-select-value">
                        <p id="gradRel.name.paragraph">Odaberite grad</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Svi gradovi</div>
                        @foreach($filters['grad'][0] as $key => $value)
                            <div class="my-option" value="{{$value}}">{{$value}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="other-first other-custon">
                <div class="search-button" title="Pretražite">
                    <p>PRETRAŽITE</p>
                </div>
                <div class="other-searches-button">
                    <i class="fas fa-th-large"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="just-line"></div>
</div>
<div class="rest-of-search-options">
    <div class="search-wrapper">
        <div class="search-row">
            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite svrhu" id="svrhaRel.name" value="0">
                    <div class="my-select-value">
                        <p id="svrha-paragraph">Odaberite svrhu</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Svrha</div>
                        @foreach($filters['svrha'][0] as $key => $value)
                            <div class="my-option" value="{{$value}}">{{$value}}</div>
                        @endforeach
                    </div>
                </div>
            </div>


            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="vrstaRel.name" value="0">
                    <div class="my-select-value">
                        <p id="vrsta-paragraph">Odaberite vrstu nekretnine</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Sve</div>
                        @foreach($filters['vrsta'][0] as $key => $value)
                            <div class="my-option" value="{{$value}}">{{$value}}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="broj_soba" value="0">
                    <div class="my-select-value">
                        <p id="broj_soba-paragraph">Odaberite broj soba</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Broj soba</div>
                        @foreach($filters['broj_soba'][0] as $key => $value)
                            <div class="my-option" value="{{$key}}">{{$value}}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="broj_kupatila" value="0">
                    <div class="my-select-value">
                        <p id="broj_kupatila-paragraph">Odaberite broj kupatila</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Broj kupatila</div>
                        @foreach($filters['broj_kupatila'][0] as $key => $value)
                            <div class="my-option" value="{{$key}}">{{$value}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="search-row">
            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite državu" id="drzavaRel.name" value="0">
                    <div class="my-select-value">
                        <p id="drzava-paragraph">Odaberite državu</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Odaberite državu</div>
                        @foreach($filters['drzava'][0] as $key => $value)
                            <div class="my-option" value="{{$value}}">{{$value}}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite stanje nekretnine" id="stanjeRel.name" value="0">
                    <div class="my-select-value">
                        <p id="stanje-paragraph">Odaberite stanje</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Odaberite stanje</div>
                        @foreach($filters['stanje'][0] as $key => $value)
                            <div class="my-option" value="{{$value}}">{{$value}}</div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="other-first">
                <input type="text" name="id" placeholder="Pretraga po ID-u" autocomplete="off">
            </div>

            <div class="other-first">
                <input type="text" name="action" placeholder="Akcijska ponuda - Da / Ne" autocomplete="off">
            </div>
        </div>

        <!-- checkable console -->
        <div class="check-boxes">
            <div class="check-boxed-header">
                <h4>DODATNE STAVKE</h4>
            </div>

            <!-- elements -->
            <div class="check-boxed-body">
                <div class="check-wrapper" id="voda" value="1">
                    <div class="check-place"></div>
                    <p>Priključak vode</p>
                </div>
                <div class="check-wrapper" id="struja" value="1">
                    <div class="check-place"></div>
                    <p>Priključak struje</p>
                </div>
                <div class="check-wrapper" id="internet" value="1">
                    <div class="check-place"></div>
                    <p>Priključak interneta</p>
                </div>
                <div class="check-wrapper" id="plin" value="1">
                    <div class="check-place"></div>
                    <p>Priključak plina</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" id="kanalizacija" value="1">
                    <div class="check-place"></div>
                    <p>Kanalizacija</p>
                </div>
                <div class="check-wrapper" id="garaza" value="1">
                    <div class="check-place"></div>
                    <p>Garaža</p>
                </div>
                <div class="check-wrapper" id="klima" value="1">
                    <div class="check-place"></div>
                    <p>Instalisan klima uređaj</p>
                </div>
                <div class="check-wrapper" id="parking" value="1">
                    <div class="check-place"></div>
                    <p>Parking mjesto</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" id="jedan_sprat" value="1">
                    <div class="check-place"></div>
                    <p>Jedan sprat</p>
                </div>
                <div class="check-wrapper" id="dva_sprata" value="1">
                    <div class="check-place"></div>
                    <p>Dva sprata</p>
                </div>
                <div class="check-wrapper" id="tri_sprata" value="1">
                    <div class="check-place"></div>
                    <p>Tri sprata</p>
                </div>
                <div class="check-wrapper" id="vise_spratova" value="1">
                    <div class="check-place"></div>
                    <p>Više spratova</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" id="jezgro_grada" value="1">
                    <div class="check-place"></div>
                    <p>Jezgro grada</p>
                </div>
                <div class="check-wrapper" id="pogled_na_grad" value="1">
                    <div class="check-place"></div>
                    <p>Pogled na grad</p>
                </div>
                <div class="check-wrapper" id="pogled_na_more" value="1">
                    <div class="check-place"></div>
                    <p>Pogled na more</p>
                </div>
                <div class="check-wrapper" id="u_blizini_rijeke" value="1">
                    <div class="check-place"></div>
                    <p>U blizini rijeke</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" id="bazen" value="1">
                    <div class="check-place"></div>
                    <p>Bazen</p>
                </div>
                <div class="check-wrapper" id="sauna" value="1">
                    <div class="check-place"></div>
                    <p>Sauna</p>
                </div>
                <div class="check-wrapper" id="jacuzzi" value="1">
                    <div class="check-place"></div>
                    <p>Jacuzzi</p>
                </div>
                <div class="check-wrapper" id="kuhinja_sa_sankom" value="1">
                    <div class="check-place"></div>
                    <p>Kuhinja sa šankom</p>
                </div>
            </div>

        </div>
    </div>
</div>
