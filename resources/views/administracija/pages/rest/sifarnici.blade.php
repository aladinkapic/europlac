@extends('administracija.layout.master')
@section('title') Pregled svih korisnika  @endsection

@section('page-icon') <i class="fas fa-users"></i> @endsection
@section('page-header') Pregled šifarnika @endsection
@section('page-desc') Pregledajte sve šifarnike sa kategorijama i vrijednostima. Filteri omogućeni @endsection
@section('page-links') <a href=""> Svi uposlenici </a> @endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    {!!  \App\Http\Controllers\Administracija\Filter::show($sifarnici, $filters) !!}
    <table id="filtering" class="table table-condensed table-bordered">
        <thead>
        {!! \App\Http\Controllers\Administracija\Filter::tableHeader($filters) !!}
        <th>Akcije</th>
        </thead>
        <tbody>
        @php $counter = 1; @endphp
        @foreach($sifarnici as $user)
            <tr>
                <td>{{$counter++}}.</td>
                <td>{{$user->name ?? '/'}}</td>
                <td>{{$user->type ?? '/'}}</td>
                <td>{{$user->value ?? '/'}}</td>
                <td>
                    <a href="">
                        <button class="btn my-button">Pregled</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
