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
                    <a href="">Naslovna strana</a> /
                    <a href="">Sve nekretnine</a>  /
                    <a href="">{{$estate->naziv ?? '/'}}</a>
                </p>
            </div>
        </div>
    </div>

    <!-- slider with images -->
    <div class="slider-container">
        <div class="swiper-container estate-slider">
            <div class="swiper-wrapper">
                @foreach($images as $image)
                    <div class="swiper-slide">
                        <img src="{{asset('/images/estates/'.$image->file->file_name ?? '/')}}"  alt="">
                    </div>
                @endforeach
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
                breakpoints: {
                    1000: {
                        slidesPerView: 2,
                    },
                    800: {
                        slidesPerView: 1,
                    }
                }
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
                <h1>{{$estate->naziv ?? '/'}}</h1>
                <p>{{$estate->adresa ?? '/'}}, {{$estate->drzavaRel->name ?? '/'}}</p>
            </div>
            <div class="price">
                <h2>{{$estate->cijena ?? '/'}} BAM</h2>
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
                    <a href="#estate-features"><p>Karakteristike</p></a>
                    <a href="#estate-files"><p>Dokumenti</p></a>
                    <a href="#estate-video"><p>Video</p></a>
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
            <div class="features-header" id="estate-files">
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

            <!-- Video -->
            <div class="features-header" id="estate-video">
                <h4>Video</h4>
            </div>
            <div class="video">
                <iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" src="https://www.youtube.com/embed/P8ksPxR62Ag"></iframe>
            </div>

            <!-- nearby -->
            <div class="features-header" id="estate-nearby">
                <h4>Objekti u blizini</h4>
            </div>
            <div class="nearby">
                <div class="single-class">
                    <div class="class-header">
                        <div class="class-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <p>RESTORANI</p>
                    </div>

                    <div class="single-nearby" title="Ukupna ocjena iznosi 4.55">
                        <div class="what-is">
                            <p>Restoran Amfora, Cazin</p>
                            <p>
                                <span>(0.45 km)</span>
                            </p>
                        </div>
                        <div class="stars-part">
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-class education">
                    <div class="class-header">
                        <div class="class-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <p>EDUKACIJA</p>
                    </div>

                    <div class="single-nearby" title="Ukupna ocjena iznosi 4.55">
                        <div class="what-is">
                            <p>Osnovna škola Cazin I</p>
                            <p>
                                <span>(0.24 km)</span>
                            </p>
                        </div>
                        <div class="stars-part">
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-nearby" title="Ukupna ocjena iznosi 4.28">
                        <div class="what-is">
                            <p>Osnovna škola Cazin II</p>
                            <p>
                                <span>(1.59 km)</span>
                            </p>
                        </div>

                        <div class="stars-part">
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="single-star">
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- location -->
            <div class="features-header" id="estate-location">
                <h4>Lokacija </h4>
            </div>
            <div class="map-of-estate" id="map-of-estate"></div>

            <!-- Contact agent -->
            <div class="contact-agent" id="estate-agent">
                <div class="agent-preview">
                    <div class="just-header">
                        <h4>Albin Ćoralić</h4>
                    </div>
                    <div class="agent-image">
                        <img src="{{asset('/images/slider/albin.jpg')}}" class="desktop-version" alt="">
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
                <div class="contact-form">
                    <div class="just-header">
                        <h4>Zatražite više informacija</h4>
                    </div>

                    <div class="my-select-wrapper" title="Odaberite razlog kontaktiranja" id="request_showing_of_estate" value="0">
                        <div class="my-select-value">
                            <p>Zakažite posjetu nekretnine</p>
                            <div class="select-arrow">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>

                        <div class="select-values">
                            <div class="my-option" value="0">Zakažite posjetu nekretnine</div>
                            <div class="my-option" value="1">Želim dodatne informacije</div>
                        </div>
                    </div>
                    <div class="other-first">
                        <input type="text" name="name" placeholder="Vaše ime" autocomplete="off">
                    </div>
                    <div class="other-first">
                        <input type="text" name="email" placeholder="Vaš email" autocomplete="off">
                    </div>
                    <div class="other-first">
                        <input type="text" name="phone" placeholder="Vaš broj telefona" autocomplete="off">
                    </div>
                    <div class="other-first other-text">
                        <textarea name="mesasge" id="" placeholder="Vaša poruka"></textarea>
                    </div>

                    <div class="send-button">
                        <p>Pošaljite poruku</p>
                    </div>
                </div>
            </div>
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
