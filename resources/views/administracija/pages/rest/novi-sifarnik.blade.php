@extends('administracija.layout.master')
@section('title') Unos novog šifarnika @endsection

@section('page-icon') <i class="fas fa-key"></i> @endsection
@section('page-header') Unesite novi šifarnik @endsection
@section('page-desc') Unesite novu vrijednost šifarnika.  @endsection
@section('page-links') <a href="{{route('admin.all-keywords')}}"> Svi šifarnici </a> / <a href="{{route('single-keyword', ['key' => $key])}}"> Uredite šifarnike </a> / <a href="{{route('new-keyword', ['key' => $key])}}">Unesite novi šifarnik</a>@endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    {!! Form::open(array('route' => 'save-new-keyword', 'action' => 'AdministracijaController@saveKeyword')) !!}

    @csrf
    <section>
        <div class="single-one single-one-with-padding">
            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('name', __('Vrijednost šifarnika').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('name', '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}

                    <!-- Value -->
                    {!! Form::hidden('value', $value ?? '/', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
                    <!-- Key -->
                    {!! Form::hidden('type', $key ?? '/', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
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
