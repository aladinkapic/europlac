@extends('administracija.layout.master')
@section('title') {{ isset($slider) ? $slider->header : 'Unesite novi uzorak slidera' }}  @endsection

@section('page-icon')<i class="{{ isset($slider) ? 'fas fa-sliders-h' : 'fas fa-plus' }}"></i> @endsection
@section('page-header') {{ isset($slider) ? $slider->header : 'Unesite novi uzorak slidera' }}  @endsection
@section('page-desc')
    Unos / uređivanje novog slidera za naslovnu stranicu. Unesite sliku i potrebne informacije!

    @if(isset($slider))
        / <a href="#" class="trigger-to-delete">OBRIŠITE</a>
    @endif
@endsection

@if(isset($slider))
    <!-- Deleting items -->
    @section("delete-url") {{route('admin.homepage.slider-delete', ['id' => $slider->id ?? ''])}} @endsection
    <!-- END OF DELETING ITEMS -->
@endif


@section('page-links')
    <a href=""> Naslovna </a> /
    <a href="{{Route('admin.homepage.slider-preview')}}"> Pregled slidera </a> /
    <a href=""> {{ isset($slider) ? $slider->header : 'Novi slider' }}  </a>
@endsection


@section('content')
    @if(isset($slider))
        {!! Form::open(array('route' => 'admin.homepage.slider-update', 'action' => 'HomePageController@updateSlider')) !!}
    @else
        {!! Form::open(array('route' => 'admin.homepage.slider-save', 'action' => 'HomePageController@saveSlider')) !!}
    @endif

    @csrf
    <section>
        <div class="split-two">
            <div class="input-row">
                {!! Form::hidden('image',  $slider->image ??'', ['class' => 'photo-preview', 'id' => 'photo-input-title']) !!}
                <div class="input-image-w">
                    <img src="/images/slider/{{$slider->image ?? ''}}" id="photo-preview" alt="">
                    <form action="">
                        <label for="photo-input">
                            <div class="input-image-shadow">
                                <h2>1900 x 600</h2>
                            </div>
                        </label>
                        <input type="file" id="photo-input" class="photo-input" source="/images/slider/" foto-name="photo-preview" name="photo-input" url="{{route('admin.homepage.slider-new-image')}}">
                    </form>
                </div>
            </div>
        </div>
        <div class="split-two">
            <div class="input-row">
                {!! Form::hidden('image_mobile',  $slider->image_mobile ??'', ['class' => 'photo-preview', 'id' => 'photo-mobile-title']) !!}
                <div class="input-image-w">
                    <img src="/images/slider/{{$slider->image_mobile ?? ''}}" id="photo-mobile-preview" alt="">
                    <form action="">
                        <label for="photo-mobile">
                            <div class="input-image-shadow">
                                <h2>720 x 960</h2>
                            </div>
                        </label>
                        <input type="file" id="photo-mobile" class="photo-mobile" source="/images/slider/" foto-name="photo-mobile-preview" name="photo-mobile" url="{{route('admin.homepage.slider-new-image')}}">
                    </form>
                </div>
            </div>
        </div>

        <div class="single-one">
            @if(isset($slider))
                {!! Form::hidden('id', $slider->id, ['class' => 'form-input']) !!}
            @endif

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('header', __('Naslov slidera').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('header', $slider->header ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'maxlength' => 34]) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('value_one', __('Prvi opis').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('value_one', $slider->value_one ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'maxlength' => 50]) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('value_two', __('Drugi opis').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('value_two', $slider->value_two ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'maxlength' => 50]) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('value_three', __('Treći opis').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('value_three', $slider->value_three ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'maxlength' => 50]) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('link', __('Link').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('link', $slider->link ?? '', ['class' => 'form-input', 'autocomplete' => 'off']) !!}
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


