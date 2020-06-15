@extends('administracija.layout.master')
@section('title') Dodajte novog uposlenika  @endsection

@section('page-icon') <i class="far fa-building"></i> @endsection
@section('page-header') {{$estate->naziv ?? ''}}@endsection
@section('page-desc')
    {{$estate->adresa ?? ''}}, {{$estate->gradRel->name ?? ''}} - {{$estate->drzavaRel->name ?? ''}}
    @if(isset($preview))
        / <a href="{{route('admin.preview-estate', ['id' => $estate->id, 'what' => '0'])}}">Uredite nekretninu</a>
        / <a href="{{route('photos.photo-gallery', ['id' => $estate->id])}}">Galerija</a>
        / <a href="{{route('photos.all-files',     ['id' => $estate->id])}}">Dokumenti</a>
        / <a href="{{route('admin.preview-nearby', ['id' => $estate->id])}}">Objekti u blizini</a>

        / <a href="#" class="trigger-to-delete">OBRIŠITE</a>
    @endif
@endsection

<!-- Deleting items -->
@section("delete-url") {{route('admin.delete-estate', ['id' => $estate->id ?? ''])}} @endsection
<!-- END OF DELETING ITEMS -->

@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.preview-estate', ['id' => $estate->id, 'what' => true])}}"> Pregled nekretnine </a> @endsection

@section('other_css_links')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection

@section('content')
    {!! Form::open(array('route' => 'admin.update-estate', 'action' => 'AdministracijaController@saveEstate')) !!}
    @csrf
    {!! Form::hidden('id', $estate->id) !!}
        <section>
        <div class="split-two">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('naziv', __('Naziv nekretnine').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('naziv', $estate->naziv ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'readonly' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('adresa', __('Adresa').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('adresa', $estate->adresa ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'readonly' : '']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('grad', __('Grad').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('grad', $grad, $estate->grad ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('drzava', __('Država').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('drzava', $drzava, $estate->drzava ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('povrsina', __('Površina').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('povrsina', $estate->povrsina ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'readonly']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('povrsina_zemljista', __('Površina zemljišta').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('povrsina_zemljista', $estate->povrsina_zemljista ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'readonly' : '']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('cijena', __('Cijena').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('cijena', $estate->cijena ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'readonly' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('valuta', __('Valuta').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('valuta', $valuta, $estate->valuta ??'', ['class' => 'form-input', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
        </div>
        <div class="split-two">
            <div class="input-row">
                <div class="input-image-w">
                    {!! Form::hidden('photo', $estate->photo, ['class' => 'photo-preview', 'id' => 'photo-input-title']) !!}
                    <img src="/images/estates/{{$estate->photo ?? '/'}}" id="photo-preview" alt="">
                    @if(!isset($preview))
                        <form action="">
                            <label for="photo-input">
                                <div class="input-image-shadow">
                                    <h2>640 x 480</h2>
                                </div>
                            </label>
                            <input type="file" id="photo-input" class="photo-input" source="/images/estates/" foto-name="photo-preview" name="photo-input" url="{{route('photos.estates.save-image')}}">
                        </form>
                    @endif
                </div>
            </div>
        </div>

        <div class="single-one single-one-with-padding">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('opis', __('Detaljan opis').' :', ['class' => 'form-label']) !!}
                    {!! Form::textarea('opis', $estate->opis ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'style' => 'height:220px; padding-top:10px;']) !!}
                </div>
            </div>
        </div>

        <div class="single-one single-one-with-padding">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('svrha', __('Svrha').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('svrha', $svrha, $estate->svrha ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('vrsta', __('Vrsta nekretnine').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('vrsta', $vrsta, $estate->vrsta ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('broj_soba', __('Broj soba').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('broj_soba', $br_soba, $estate->broj_soba ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('broj_kupatila', __('Broj kupatila').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('broj_kupatila', $br_kupatila, $estate->broj_kupatila ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('stanje', __('Stanje nekretnine').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('stanje', $stanje, $estate->stanje ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('akcija', __('Akcijska cijena').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('akcija', ['Ne' => 'NE', 'Da' => 'DA'], $estate->akcija ?? '', ['class' => 'form-input', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('izdvojeno', __('Izdvojeno').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('izdvojeno', $daNe, $estate->izdvojeno ?? '', ['class' => 'form-input', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('prikaz_na_naslovnoj', __('Prikaži nekretninu na naslovnoj').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('prikaz_na_naslovnoj', $daNe, $estate->prikaz_na_naslovnoj ?? '', ['class' => 'form-input', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>

            <!------------------------------------------ Ostale informacije ------------------------------------------->
            <br><br><br>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('voda', __('Priključak vode').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('voda', $daNe, $estate->voda ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('struja', __('Priključak struje').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('struja', $daNe, $estate->struja ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('internet', __('Internet').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('internet', $daNe, $estate->internet ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('plin', __('Plin').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('plin', $daNe, $estate->plin ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('kanalizacija', __('Kanalizacija').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('kanalizacija', $daNe, $estate->kanalizacija ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('garaza', __('Garaža').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('garaza', $daNe, $estate->garaza ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('klima', __('Klima').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('klima', $daNe, $estate->klima ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('parking', __('Parking mjesto / a').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('parking', $daNe, $estate->parking ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('ostava', __('Ostava').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('ostava', $daNe, $estate->ostava ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('namjestaj', __('Namještaj').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('namjestaj', $daNe, $estate->namjestaj ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('kablovska', __('Kablovska').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('kablovska', $daNe, $estate->kablovska ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('videonadzor', __('Video nadzor').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('videonadzor', $daNe, $estate->videonadzor ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('jedan_sprat', __('Jedna etaža').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('jedan_sprat', $daNe, $estate->jedan_sprat ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('dva_sprata', __('Dvije etaže').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('dva_sprata', $daNe, $estate->dva_sprata ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('tri_sprata', __('Tri etaže').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('tri_sprata', $daNe, $estate->tri_sprata ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('vise_spratova', __('Više etaža').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('vise_spratova', $daNe, $estate->vise_spratova ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>


            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('jezgro_grada', __('Jezgro grada').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('jezgro_grada', $daNe, $estate->jezgro_grada ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('pogled_na_grad', __('Pogled na grad').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('pogled_na_grad', $daNe, $estate->pogled_na_grad ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('pogled_na_more', __('Pogled na more').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('pogled_na_more', $daNe, $estate->pogled_na_more ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('u_blizini_rijeke', __('U blizini rijeke').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('u_blizini_rijeke', $daNe, $estate->u_blizini_rijeke ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>


            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('bazen', __('Bazen').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('bazen', $daNe, $estate->bazen ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('sauna', __('Sauna').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('sauna', $daNe, $estate->sauna ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('jacuzzi', __('Jacuzzi').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('jacuzzi', $daNe, $estate->jacuzzi ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('kuhinja_sa_sankom', __('Kuhinja sa šankom').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('kuhinja_sa_sankom', $daNe, $estate->kuhinja_sa_sankom ?? '', ['class' => 'form-input', 'autocomplete' => 'off', isset($preview) ? 'disabled => true' : '']) !!}
                </div>
            </div>

            <!--------------------------------------------- GPS Coordinates ------------------------------------------->
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('x_koordinata', __('X - koordinata').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('x_koordinata', $estate->x_koordinata ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'readonly', 'id' => 'x_koordinata']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('y_koordinata', __('Y - koordinata').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('y_koordinata', $estate->y_koordinata ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'readonly', 'id' => 'y_koordinata']) !!}
                </div>
            </div>

            <div class="select-location" id="my-locatioon">

            </div>

            <!------------------------------------------------ Video URL ---------------------------------------------->
            <br><br><br>
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('video', __('Video URL').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('video', $estate->video ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'placeholder' => 'Zalijepite ugrađeni YouTube link ', isset($preview) ? 'readonly' : '']) !!}
                </div>
            </div>
        </div>


        @if(!isset($preview))
            <div class="bottom-buttons">
                <div class="bottom-button">
                    {!! Form::submit('SPREMITE SADRŽAJ', ['class' => 'save-button']) !!}
                </div>
            </div>
        @endif
    </section>
    {!! Form::close(); !!}
@endsection

@section('second_js_scripts')
    <script src="{{asset('/js/administracija/estate.js')}}"></script>
@endsection
