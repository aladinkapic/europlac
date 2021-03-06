@extends('administracija.layout.master')
@section('title') Dodajte novu nekretninu  @endsection

@section('page-icon') <i class="fas fa-plus"></i> @endsection
@section('page-header') Dodajte novu nekretninu @endsection
@section('page-desc') Na ovom dijelu možete dodavati nove nekretnine i uređivati njihove osnovne informacije @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.add-estate')}}"> Dodajte nekretninu </a> @endsection

@section('other_css_links')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection

@section('content')
    {!! Form::open(array('route' => 'admin.save-estate', 'action' => 'AdministracijaController@updateEstate')) !!}
    @csrf

    <section>
        <div class="split-two">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('naziv', __('Naziv nekretnine').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('naziv', '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('adresa', __('Adresa').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('adresa', '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('grad', __('Grad').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('grad', $grad, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('drzava', __('Država').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('drzava', $drzava, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('povrsina', __('Površina').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('povrsina', '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('povrsina_zemljista', __('Površina zemljišta').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('povrsina_zemljista', '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('cijena', __('Cijena').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('cijena', '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('valuta', __('Valuta').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('valuta', $valuta, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
        </div>
        <div class="split-two">
            <div class="input-row">
                {!! Form::hidden('photo', '', ['class' => 'photo-preview', 'id' => 'photo-input-title']) !!}
                <div class="input-image-w">
                    <img src="" id="photo-preview" alt="">
                    <form action="">
                        <label for="photo-input">
                            <div class="input-image-shadow">
                                <h2>640 x 480</h2>
                            </div>
                        </label>
                        <input type="file" id="photo-input" class="photo-input" source="/images/estates/" foto-name="photo-preview" name="photo-input" url="{{Route('photos.estates.save-image')}}">
                    </form>
                </div>
            </div>
        </div>

        <div class="single-one single-one-with-padding">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('opis', __('Detaljan opis').' :', ['class' => 'form-label']) !!}
                    {!! Form::textarea('opis', '', ['class' => 'form-input', 'autocomplete' => 'off', 'style' => 'height:220px; padding-top:10px;']) !!}
                </div>
            </div>
        </div>

        <div class="single-one single-one-with-padding">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('svrha', __('Svrha').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('svrha', $svrha, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('vrsta', __('Vrsta nekretnine').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('vrsta', $vrsta, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('broj_soba', __('Broj soba').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('broj_soba', $br_soba, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('broj_kupatila', __('Broj kupatila').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('broj_kupatila', $br_kupatila, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('stanje', __('Stanje nekretnine').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('stanje', $stanje, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('akcija', __('Akcijska cijena').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('akcija', ['Ne' => 'NE', 'Da' => 'DA'], '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('izdvojeno', __('Izdvojeno').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('izdvojeno', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('prikaz_na_naslovnoj', __('Prikaži nekretninu na naslovnoj').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('prikaz_na_naslovnoj', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>


            <!------------------------------------------ Ostale informacije ------------------------------------------->
            <br><br><br>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('voda', __('Priključak vode').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('voda', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('struja', __('Priključak struje').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('struja', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('internet', __('Internet').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('internet', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('plin', __('Plin').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('plin', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('kanalizacija', __('Kanalizacija').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('kanalizacija', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('garaza', __('Garaža').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('garaza', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('klima', __('Klima').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('klima', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('parking', __('Parking mjesto / a').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('parking', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('ostava', __('Ostava').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('ostava', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('namjestaj', __('Namještaj').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('namjestaj', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('kablovska', __('Kablovska').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('kablovska', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('videonadzor', __('Video nadzor').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('videonadzor', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('jedan_sprat', __('Jedna etaža').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('jedan_sprat', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('dva_sprata', __('Dvije etaže').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('dva_sprata', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('tri_sprata', __('Tri etaže').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('tri_sprata', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('vise_spratova', __('Više etaža').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('vise_spratova', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>


            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('jezgro_grada', __('Jezgro grada').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('jezgro_grada', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('pogled_na_grad', __('Pogled na grad').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('pogled_na_grad', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('pogled_na_more', __('Pogled na more').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('pogled_na_more', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('u_blizini_rijeke', __('U blizini rijeke').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('u_blizini_rijeke', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>


            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('bazen', __('Bazen').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('bazen', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('sauna', __('Sauna').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('sauna', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('jacuzzi', __('Jacuzzi').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('jacuzzi', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('kuhinja_sa_sankom', __('Kuhinja sa šankom').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('kuhinja_sa_sankom', $daNe, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <!--------------------------------------------- GPS Coordinates ------------------------------------------->
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('x_koordinata', __('X - koordinata').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('x_koordinata', '', ['class' => 'form-input', 'autocomplete' => 'off', 'readonly', 'id' => 'x_koordinata']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('y_koordinata', __('Y - koordinata').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('y_koordinata', '', ['class' => 'form-input', 'autocomplete' => 'off', 'readonly', 'id' => 'y_koordinata']) !!}
                </div>
            </div>

            <div class="select-location" id="my-locatioon">

            </div>

            <!------------------------------------------------ Video URL ---------------------------------------------->
            <br><br><br>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('video', __('Video URL').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('video', '', ['class' => 'form-input', 'autocomplete' => 'off', 'placeholder' => 'Zalijepite ugrađeni YouTube link ']) !!}
                </div>
            </div>
        </div>
        <div class="bottom-buttons">
            <div class="bottom-button">
                {!! Form::submit('SPREMITE SADRŽAJ', ['class' => 'save-button']) !!}
            </div>
        </div>
    </section>
    {!! Form::close(); !!}
@endsection

@section('second_js_scripts')
    <script src="{{asset('/js/administracija/estate.js')}}"></script>
@endsection
