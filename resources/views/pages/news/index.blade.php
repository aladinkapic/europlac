@extends('layout.layout')
@section('title') Dobro došli na www.europlac-nekretnine.com @stop

@section('content')
    <div class="breadcrumbs">
        <div class="inside-breadcrumbs">
            <div class="single-part single-wanished">
                <p>Blog - Prikaz novosti</p>
            </div>
            <div class="single-part ">
                <p>
                    <a href="{{route('home')}}">Naslovna strana</a> /
                    <a href="{{route('news')}}">Blog</a>
                </p>
            </div>
        </div>
    </div>

    <!-- News and sidebar with categories -->
    <div class="news-section">
        <!-- Disply all news -->
        <div class="all-news">
            <div class="single-new">
                <img src="{{asset('/images/blog/1.jpg')}}" class="desktop-version" alt="">

                <h2>Business meeting 2017 in San Francisco</h2>
                <h5>Prije 5 sati u kategoriji Posao</h5>
                <p>One of my fabourite things I like to watch is the bloopers and outtakes that are shown of mistakes made during the making of a movie.</p>

                <div class="view-more" title="Pročitajte više">
                    <a href="">
                        <div class="inside-more">
                            <div class="left-line"></div>
                            <p>Nastavite čitati</p>
                            <div class="right-line"></div>
                            <i class="fas fa-caret-right"></i>
                        </div>
                    </a>
                </div>
            </div>

            <div class="single-new">
                <img src="{{asset('/images/blog/1.jpg')}}" class="desktop-version" alt="">

                <h2>Business meeting 2017 in San Francisco</h2>
                <h5>Prije 5 sati u kategoriji Posao</h5>
                <p>One of my fabourite things I like to watch is the bloopers and outtakes that are shown of mistakes made during the making of a movie.</p>

                <div class="view-more" title="Pročitajte više">
                    <a href="">
                        <div class="inside-more">
                            <div class="left-line"></div>
                            <p>Nastavite čitati</p>
                            <div class="right-line"></div>
                            <i class="fas fa-caret-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Side bar-->
        <div class="side-bar">
            <h4>Kategorije</h4>

            <a href="">
                <p>Naše usluge (5)</p>
            </a>
            <a href="">
                <p>Tržišno stanje nekretnina (3)</p>
            </a>
            <a href="">
                <p>Poslovni prijedlozi (1)</p>
            </a>
        </div>
    </div>


    <div class="pages">
        <div class="single-page focus">
            <p>1</p>
        </div>
        <div class="single-page">
            <p>2</p>
        </div>
        <div class="single-page">
            <p>3</p>
        </div>
        <div class="single-page next-one">
            <p>Sljedeća stranica</p>
        </div>
    </div>
@endsection

@section('second_js_scripts')
    <script src="{{asset('/js/maps/contact-us.js')}}"></script>
@endsection
