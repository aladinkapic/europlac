@extends('layout.layout')

@section('title') Dobro došli na www.europlac-nekretnine.com @stop
@section('other_js_links')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection

@section('content')
    <div class="breadcrumbs">
        <div class="inside-breadcrumbs">
            <div class="single-part single-wanished">
                <p>O nama</p>
            </div>
            <div class="single-part ">
                <p>
                    <a href="{{route('home')}}">Naslovna strana</a> /
                    <a href="{{route('about-us')}}">O nama</a>
                </p>
            </div>
        </div>
    </div>
    <div class="full-line"></div>

    <div class="about-full-image">
        <img src="{{asset('/images/images/about.jpg')}}" class="desktop-version" alt="">
        <img src="{{asset('/images/images/about_m.png')}}" class="mobile-version" alt="">
        <div class="inner-shadow">
            <div class="middle">
                <h1>Uživamo prodavati nekretnine i graditi iskustvo.</h1>
                <h1>Dođite i pridružite nam se!</h1>
            </div>
        </div>
    </div>

    <div class="about-split">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <h2>VAŠ POUZDAN I PROVJEREN PARTNER</h2>

            <h5>
                <b>Agencija za poslovanje nekretninama EURO-PLAC d.o.o. Cazin</b>
            </h5>

            <ul>
                <li>Iden. broj: 4263773310004, Kantonalni ured USK-a Žiro račun br:3385202206686374 Bosna Bank International broj tekućeg 1414765320025698</li>
                <li>Tel: Direktor +387 61 786-860 (Viber,WhatsApp)</li>
                <li>Servis kućanskih aparata +387 61 996 154</li>
                <li>E-mail: info@europlac-nekretnine.com, europlac-nekretnine@hotmail.com</li>
                <li>Facebook: REAL ESTATE AGENCY "EURO-PLAC" CAZIN</li>
                <li>KUPUJETE? PRODAJETE? MIJENJATE? NA PRAVOM STE MJESTU!</li>
            </ul>

            <p>Sa višegodišnjim provjerenim iskustvom u prometu nekretnina.</p>
            <p>Zbog mogućnosti postavljanja većeg broja slika Vaše nekretnine i iscrpnih informacija o istoj, te konstantne dostupnosti putem interneta, oglašavajući Vaše nekretnine posredstvom naše Agencije uveliko se povećava mogućnost brze i uspješne prodaje nekretnine ukoliko nekretnina ima urednu papirologiju i realnu tržišnu cijenu po kojoj se prodaje. Na taj način učinit ćete da Vaša nekretnina bude daleko uspješnije predstavljena u odnosu na bilo koji drugi vid oglašavanja. Potencijalnim kupcima preko naše internet stranice nudimo olakšan uvid u ponudu nekretnina i upoznavanje sa nekretninom na licu mjesta.</p>
        </div>
    </div>


    <div class="about-split">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <h2>UKAŽITE NAM POVJERENJE</h2>

            <h5>
                <b>Mnogo je razloga da nam ukažete povjerenje te smo u mogućnosti nabrojati samo neke od njih, kao što su:</b>
            </h5>

            <ol>
                <li>Vašu nekretninu uvrštavamo u našu ponudu nekretnina, gdje na jednom mjestu obuhvatamo više nekretnina od kojih potencijalni kupci mogu uvijek vidjeti i za kupovinu baš izabrati vašu nekretninu.</li>
                <li>Vaša nekretnina je konstantno pristutna na tržištu, dok mi brinemo o njenoj promociji i prezentaciji prema potencijalnim kupcima.</li>
                <li>Pored objavljivanja oglasa na našoj web stranici koja je zadržala visoku dnevnu posjećenost, istu nekretninu objavljujemo na stranicama partnerskih agencija, oglasnika i portala sa kojima naša Agencija ima suradnju, kako na nivou BiH, tako i u inozemstvu. Redovnu promociju Vaše nekretnine vršimo i putem društvenih mreža koje imaju veliku posjećenost.</li>
                <li>Kupce dovodimo u posjetu tek nakon svih objašnjenja o nekretnini, onda kada klijent iskaže potpuno interesovanje za tu nekretninu. Kupci koji dolaze preko naše Agencije su provjereni i pouzdani, o čemu brine naš tim.</li>
                <li>Agencija sa prodavcima sklapa ugovor o posredovanju pri prodaji nekretnina. Tim ugovorom definišu se prava i obaveze između Agencije kao posrednika i prodavca nekretnine. Ugovorom se između ostalog, definiše posrednička provizija koja pretežno iznosi 3-4 % od stvarno postignute cijene ili provizija po međusobnom dogovoru koja inače zavisivisi od vrijednosti nekretnine i postignutog rezulatata prilikom prodaje nekretnine.</li>
            </ol>
        </div>
    </div>
@endsection

@section('second_js_scripts')
    <script src="{{asset('/js/maps/contact-us.js')}}"></script>
@endsection
