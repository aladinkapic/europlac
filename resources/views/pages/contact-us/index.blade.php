@extends('layout.layout')

@section('title') Kontaktirajte nas @stop
@section('other_js_links')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="inside-breadcrumbs">
            <div class="single-part single-wanished">
                <p>Kontaktirajte nas</p>
            </div>
            <div class="single-part ">
                <p>
                    <a href="{{route('home')}}">Naslovna strana</a> /
                    <a href="{{route('contact-us')}}">Kontaktirajte nas</a>
                </p>
            </div>
        </div>
    </div>
    <div class="full-line"></div>
    <div class="contact-us-map" id="map"></div>
    <div class="contact-split">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <div class="split-again">
                <h2><b>Cazin</b>, Bosna i Hercegovina</h2>
                <h3>Lojićka bb - kod pijace Incel</h3>
                <h3>77220 Cazin, Bosna i Hercegovina</h3>
                <br>
                <p><span>NAŠ EMAIL</span></p>
                <p><a href="mailto:europlac-nekretnine@hotmail.com" title="Kliknite ovdje da pošaljete email!">@ europlac-nekretnine@hotmail.com</a></p>
                <p><a href="mailto:info@europlac-nekretnine.com" title="Kliknite ovdje da pošaljete email!">@ info@europlac-nekretnine.com</a></p>
                <br>
            </div>
            <div class="split-again">
                <h4>POZOVITE NAS</h4>
                <h3>+387 / 61-786860</h3>
                <h3>+387 / 60-357 4103</h3>
                <h3>+387 / 37-516 096</h3>
                <br>
                <p><span>RADNO VRIJEME</span></p>
                <p>Ponedjeljak - Petak : 9:00 - 17:00</p>
                <p>Subota : 9:00 - 14:00</p>
            </div>
        </div>
    </div>

    <div class="contact-split">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <div class="contact-form">
                <div class="just-header">
                    <h4>Zatražite više informacija</h4>
                </div>

                <div class="other-first">
                    <input type="text" name="name" id="your_name" placeholder="Vaše ime" autocomplete="off">
                </div>
                <div class="other-first">
                    <input type="text" name="email" id="your_email" placeholder="Vaš email" autocomplete="off">
                </div>
                <div class="other-first">
                    <input type="text" name="phone" id="your_phone" placeholder="Vaš broj telefona" autocomplete="off">
                </div>
                <div class="other-first other-text">
                    <textarea name="mesasge" id="wanted-message" placeholder="Vaša poruka"></textarea>
                </div>

                <div class="send-button send-us-a-message" title="Pošaljite poruku!">
                    <p>POŠALJITE PORUKU</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('second_js_scripts')
    <script src="{{asset('/js/maps/contact-us.js')}}"></script>
@endsection
