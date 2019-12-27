@extends('administracija.layout.master')
@section('title') Pregled svih nekretnina  @endsection

@section('page-icon') <i class="far fa-building"></i> @endsection
@section('page-header') Pregled svih nekretnina @endsection
@section('page-desc') Pregled i uređivanje svih nekretnina !. @endsection
@section('page-links') <a href="{{route('admin.all-estates')}}"> Sve nekretnine </a> @endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    {!!  \App\Http\Controllers\Administracija\Filter::show($estates, $filters) !!}
    <table id="filtering" class="table table-condensed table-bordered">
        <thead>
        {!! \App\Http\Controllers\Administracija\Filter::tableHeader($filters) !!}
        <th>Akcije</th>
        </thead>
        <tbody>
        @php $counter = 1; @endphp
        @foreach($estates as $user)
            <tr>
                <td>{{$counter++}}.</td>
                <td>{{$user->naziv ?? '/'}}</td>
                <td>{{$user->adresa ?? '/'}}</td>
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
