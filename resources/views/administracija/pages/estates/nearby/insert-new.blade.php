@extends('administracija.layout.master')
@section('title') Dodajte novog uposlenika  @endsection

@section('page-icon') <i class="fas fa-plus"></i> @endsection
@section('page-header') Unesite novi objekat u blizini @endsection
@section('page-desc') Unesite novi objekat u blizini i olakšajte klijentu odabir nekretnine @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.preview-estate', ['id' => $estate->id, 'what' => true])}}"> Pregled nekretnine </a> / <a href="">Objekti u blizini</a>@endsection

@section('other_css_links')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvpH2ZexSQv0s_VtyXEHzM4p8F1HdKMD0"></script>
@endsection

@section('content')
    {!! Form::open(array('route' => 'admin.save-nearby', 'action' => 'NearbyController@save')) !!}
    @csrf

    <section>
        <div class="single-one single-one-with-padding">

            {!! Form::hidden('estate_id', $estate->id, ['class' => 'form-input']) !!}

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('category', __('Kategorija objekta').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('category', $category, '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('name', __('Naziv objekta').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('name', '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>



            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('distance', __('Udaljenost objekta').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('distance', '', ['class' => 'form-input', 'autocomplete' => 'off', 'step' => '.01']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('stars', __('Broj zvjezdica - RANK').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('stars', ['1', '1.5', '2', '2.5', '3', '3.5', '4', '4.5', '5'], '0', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
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
