@extends('administracija.layout.master')
@section('title') Pregled svih korisnika  @endsection

@section('page-icon') <i class="fas fa-key"></i> @endsection
@section('page-header') Pregled šifarnika @endsection
@section('page-desc') Pregledajte sve šifarnike sa kategorijama i vrijednostima. @endsection
@section('page-links') <a href="{{route('admin.all-keywords')}}"> Svi šifarnici </a> @endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    <table id="filtering" class="table table-condensed table-bordered">
        <thead>
            <th width="80px" class="text-center">#</th>
            <th>Šifarnik</th>
            <th width="120px" class="text-center">Akcije</th>
        </thead>
        <tbody>
        @php $counter = 1; @endphp
        @foreach($sifarnici as $key => $value)
            <tr>
                <td class="text-center">{{$counter++}}.</td>
                <td>{{$value ?? '/'}}</td>
                <td class="text-center">
                    <a href="{{route('single-keyword', ['key' => $key])}}">
                        <button class="btn my-button">Uredite</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
