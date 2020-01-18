@extends('administracija.layout.master')
@section('title') {{$nearby->name ?? '/'}}  @endsection

@section('page-icon') <i class="fas fa-map-signs"></i> @endsection
@section('page-header') {{$nearby->name ?? '/'}} @endsection
@section('page-desc') Pregled objekata u blizini / <a href="#" class="trigger-to-delete">OBRIŠITE</a> @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.preview-estate', ['id' => $estate->id, 'what' => true])}}"> Pregled nekretnine </a> / <a href="{{route('admin.preview-nearby', ['id' => $estate->id ?? '/'])}}">Objekti u blizini</a> @endsection

<!-- Deleting items -->
@section("delete-url") {{route('admin.delete-nearby', ['id' => $nearby->id ?? '', 'goto' => $estate->id ?? '/'])}} @endsection
<!-- END OF DELETING ITEMS -->

@section('content')
    {!! Form::open(array('route' => 'admin.update-nearby', 'action' => 'NearbyController@update')) !!}
    @csrf

    <section>
        <div class="single-one single-one-with-padding">

            {!! Form::hidden('id', $nearby->id, ['class' => 'form-input']) !!}
            {!! Form::hidden('estate_id', $estate->id, ['class' => 'form-input']) !!}

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('category', __('Kategorija objekta').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('category', $category, $nearby->category ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('name', __('Naziv objekta').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('name', $nearby->name ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>



            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('distance', __('Udaljenost objekta').' :', ['class' => 'form-label']) !!}
                    {!! Form::number('distance', $nearby->distance ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'step' => '.01']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('stars', __('Broj zvjezdica - RANK').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('stars', ['1', '1.5', '2', '2.5', '3', '3.5', '4', '4.5', '5'], $nearby->stars ?? '0', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                </div>
            </div>
        </div>


        <div class="bottom-buttons">
            <div class="bottom-button">
                {!! Form::submit('AŽURIRAJTE SADRŽAJ', ['class' => 'save-button']) !!}
            </div>
        </div>
    </section>
    {!! Form::close(); !!}
@endsection
