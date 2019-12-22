@extends('administracija.layout.master')
@section('title') Dodajte novog uposlenika  @endsection

@section('page-icon') <i class="fas fa-plus"></i> @endsection
@section('page-header') Dodajte novu nekretninu @endsection
@section('page-desc') Na ovom dijelu možete dodavati nove nekretnine i uređivati njihove osnovne informacije @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.add-estate')}}"> Dodajte nekretninu </a> @endsection

@section('content')

@endsection
