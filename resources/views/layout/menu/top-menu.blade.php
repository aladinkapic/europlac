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
                <a href="">O nama</a>
            </div>
            <div class="single-link">
                <a href="">Kontaktirajte nas</a>
            </div>
        </div>
        <div class="sign-up">
            <a href="{{route('sign-in')}}">
                <span>Forma /</span> Prijavite se
            </a>
            <div class="mobile-menu-icon">
                <i class="fas fa-bars"></i>
            </div>
        </div>
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
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="cities" value="0">
                    <div class="my-select-value">
                        <p>Odaberite grad</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Svi gradovi</div>
                        <div class="my-option" value="1">Cazin</div>
                        <div class="my-option" value="2">Bihać</div>
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
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="what_to_do" value="0">
                    <div class="my-select-value">
                        <p>Odaberite svrhu</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Svrha</div>
                        <div class="my-option" value="1">Prodaja</div>
                        <div class="my-option" value="2">Najam</div>
                    </div>
                </div>
            </div>


            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="estate_type" value="0">
                    <div class="my-select-value">
                        <p>Odaberite vrstu nekretnine</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Sve</div>
                        <div class="my-option" value="1">Apartman</div>
                        <div class="my-option" value="2">Kuća</div>
                        <div class="my-option" value="3">Poslovni prostor</div>
                        <div class="my-option" value="4">Stan</div>
                        <div class="my-option" value="5">Vikendica</div>
                        <div class="my-option" value="6">Vila</div>
                        <div class="my-option" value="7">Zemljište</div>
                    </div>
                </div>
            </div>

            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="room_number" value="0">
                    <div class="my-select-value">
                        <p>Odaberite broj soba</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Broj soba</div>
                        <div class="my-option" value="1">1</div>
                        <div class="my-option" value="2">2</div>
                        <div class="my-option" value="3">3</div>
                        <div class="my-option" value="4">4</div>
                        <div class="my-option" value="5">5</div>
                        <div class="my-option" value="6">6</div>
                        <div class="my-option" value="7">7</div>
                        <div class="my-option" value="7">8</div>
                        <div class="my-option" value="7">9</div>
                        <div class="my-option" value="7">10</div>
                    </div>
                </div>
            </div>

            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite željeni grad" id="bath_number" value="0">
                    <div class="my-select-value">
                        <p>Odaberite broj kupatila</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Broj kupatila</div>
                        <div class="my-option" value="1">1</div>
                        <div class="my-option" value="2">2</div>
                        <div class="my-option" value="3">3</div>
                        <div class="my-option" value="4">4</div>
                        <div class="my-option" value="5">5</div>
                        <div class="my-option" value="6">6</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-row">
            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite državu" id="country" value="0">
                    <div class="my-select-value">
                        <p>Odaberite državu</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Odaberite državu</div>
                        <div class="my-option" value="1">Bosna i Hercegovina</div>
                        <div class="my-option" value="2">Hrvatska</div>
                        <div class="my-option" value="3">Srbija</div>
                        <div class="my-option" value="4">Crna Gora</div>
                    </div>
                </div>
            </div>

            <div class="other-first">
                <div class="my-select-wrapper" title="Odaberite stanje nekretnine" id="state_of_estate" value="0">
                    <div class="my-select-value">
                        <p>Odaberite stanje</p>
                        <div class="select-arrow">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <div class="select-values">
                        <div class="my-option" value="0">Odaberite stanje</div>
                        <div class="my-option" value="1">Useljivo</div>
                        <div class="my-option" value="2">Nije useljivo</div>
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
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Priključak vode</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Priključak struje</p>
                </div>
                <div class="check-wrapper">
                    <div class="check-place"></div>
                    <p>Priključak interneta</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Priključak plina</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Kanalizacija</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Garaža</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Instalisan klima uređaj</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Parking mjesto</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Jedan sprat</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Dva sprata</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Tri sprata</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Više spratova</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Jezgro grada</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Pogled na grad</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Pogled na more</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>U blizini rijeke</p>
                </div>
            </div>

            <!------------------------------------------>

            <div class="check-boxed-body">
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Bazen</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Sauna</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Jacuzzi</p>
                </div>
                <div class="check-wrapper" value="Ne">
                    <div class="check-place"></div>
                    <p>Kuhinja sa šankom</p>
                </div>
            </div>

        </div>
    </div>
</div>
