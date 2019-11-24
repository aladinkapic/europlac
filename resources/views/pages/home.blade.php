@extends('layout.layout')

@section('title') Dobro došli na www.europlac-nekretnine.com @stop

@section('content')

    <div class="slider-container">
        {!! Html::image(asset('/images/slider/home.png')) !!}
    </div>

@endsection
