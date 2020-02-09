@extends('administracija.layout.master')
@section('title') {{$sifarnik->name ?? ''}} @endsection

@section('page-icon') <i class="fas fa-key"></i> @endsection
@section('page-header') {{$sifarnik->name ?? ''}} @endsection
@section('page-desc')
    Uredite vrijednost šifarnika
    / <a href="#" class="trigger-to-delete">OBRIŠITE</a>
@endsection
@section('page-links') <a href="{{route('admin.all-keywords')}}"> Svi šifarnici </a> / <a href="{{route('single-keyword', ['key' => $sifarnik->type ?? '/'])}}"> Uredite šifarnike </a> / <a href="{{route('new-keyword', ['key' => $sifarnik->type ?? '/'])}}">Unesite novi šifarnik</a>@endsection
<!-- Deleting items -->
@section("delete-url") {{route('admin.delete-keyword', ['id' => $sifarnik->id ?? ''])}} @endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    {!! Form::open(array('route' => 'update-keyword', 'action' => 'AdministracijaController@updateKeyword')) !!}

    @csrf
    <section>
        <div class="single-one single-one-with-padding">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::hidden('id', $sifarnik->id ?? '/')  !!}
                    {!! Form::label('name', __('Vrijednost šifarnika').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('name', $sifarnik->name ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
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
