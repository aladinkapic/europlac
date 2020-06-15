<div class="left-menu">
    <div class="left-small">
        <div class="small-one" value="home">
            <i class="fas fa-home"></i>
            <p>
                Dashboard
            </p>
        </div>
        <div class="small-one" value="homepage">
            <i class="fas fa-sliders-h"></i>
            <p>
                Sadržaj
            </p>
        </div>
        <div class="small-one" value="estates">
            <i class="far fa-building"></i>
            <p>
                Nekretnine
            </p>
        </div>
        <!--
        <div class="small-one" value="organisation">
            <i class="fas fa-envelope-open-text"></i>
            <p>
                Inbox
            </p>
        </div>
        <div class="small-one" value="charts">
            <i class="fas fa-chart-line"></i>
            <p>
                Statistika
            </p>
        </div>
        -->
    </div>

    <div class="left-huge">

        <div class="small-one-text small-one-text-first" value="homepage-property">
            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>NASLOVNA STRANA</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.homepage.slider-preview')}}">
                <i class="fas fa-sliders-h"></i>
                <p>Pregled slidera</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.homepage.slider-new-one')}}">
                <i class="fas fa-plus"></i>
                <p>Novi slider</p>
            </div>

            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>NEKRETNINE</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.homepage.all-estates')}}">
                <i class="far fa-building"></i>
                <p>Nekretnine na naslovnoj</p>
            </div>

            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>O NAMA</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="far fa-sticky-note"></i>
                <p>Ukratko o nama</p>
            </div>


            <!-- BLOG -->

            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>BLOG</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.blog.index')}}">
                <i class="fas fa-rss"></i>
                <p>Pregled svih postova</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.blog.new-post')}}">
                <i class="fas fa-plus"></i>
                <p>Novi post</p>
            </div>
        </div>

        <div class="small-one-text small-one-text-first" value="estates-property">
            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>NEKRETNINE</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.all-estates')}}">
                <i class="far fa-building"></i>
                <p>Pregled svih nekretnina</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.add-estate')}}">
                <i class="fas fa-plus"></i>
                <p>Dodajte nekretninu</p>
            </div>

            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>ŠIFARNICI</p>
            </div>
            <div class="small-one-linked" link="{{route('admin.all-keywords')}}">
                <i class="fas fa-key"></i>
                <p>Pregled šifarnika</p>
            </div>
        </div>

        <div class="small-one-text" value="organisation-property">
            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>ORGANIZACIJA</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-network-wired"></i>
                <p>Pregled organizacija</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-file-alt"></i>
                <p>Registar ugovora</p>
            </div>

            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>UREĐAJI</p>
            </div>
            <div class="small-one-linked" link="/devices/preview-rfid-revices">
                <i class="fas fa-network-wired"></i>
                <p>Pregled RFID uređaja</p>
            </div>

            <!--------------------------------------------------------------------------------------------------------->

        </div>

        <div class="small-one-text" value="projects-property">
            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>PROJEKTI</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-code"></i>
                <p>Pregled projekata</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-plus"></i>
                <p>Novi projekat</p>
            </div>

            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>ULOGE</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-user-tag"></i>
                <p>Dodijelite PM uloge</p>
            </div>

            <!--------------------------------------------------------------------------------------------------------->
        </div>


        <div class="small-one-text" value="charts-property">
            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>UPOSLENICI</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-chart-pie"></i>
                <p>Dnevni izvještaji</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-chart-area"></i>
                <p>Ukupni izvještaji</p>
            </div>

            <div class="small-one-admin-preview">
                <i class="fas fa-terminal"></i>
                <p>PROJEKTI</p>
            </div>
            <div class="small-one-linked" link="">
                <i class="fas fa-chart-bar"></i>
                <p>Mjesečni izvještaji</p>
            </div>
        </div>
    </div>
</div>
