@extends('administracija.layout.master')
@section('title') Pregled svih korisnika  @endsection

@section('page-icon') <i class="fas fa-key"></i> @endsection
@section('page-header') Uredite šifarnik @endsection
@section('page-desc') Pregled i uređivanje vrijednosti šifarnika. <a href="{{route('new-keyword', ['key' => $key])}}">Unesite novi šifarnik</a> @endsection
@section('page-links') <a href="{{route('admin.all-keywords')}}"> Svi šifarnici </a> / <a href="{{route('single-keyword', ['key' => $key])}}"> Uredite šifarnike </a> @endsection

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
        @foreach($sifarnici as $sifarnik)
            <tr>
                <td>{{$counter++}}.</td>
                <td>{{$sifarnik->name ?? '/'}}</td>
                <td>{{$sifarnik->type ?? '/'}}</td>
                <td>{{$sifarnik->value ?? '/'}}</td>
                <td>
                    <a href="{{route('admin.single-keyword-preview', ['id' => $sifarnik->id ?? '/'])}}">
                        <button class="btn my-button">Pregled</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
