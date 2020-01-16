@extends('administracija.layout.master')
@section('title') Pregled svih korisnika  @endsection

@section('page-icon') <i class="fas fa-map-signs"></i> @endsection
@section('page-header') Objekti u blizini @endsection
@section('page-desc') Pregled svih objekata u blizini nekretnine. <a href="{{route('admin.insert-nearby', ['id' => $estate->id])}}">Unesite novi objekat</a> @endsection
@section('page-links') <a href=""> Sve nekretnine </a> / <a href="{{Route('admin.preview-estate', ['id' => $estate->id, 'what' => true])}}"> Pregled nekretnine </a> / <a href="">Objekti u blizini</a>@endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    {!!  \App\Http\Controllers\Administracija\Filter::show($nearby, $filters) !!}
    <table id="filtering" class="table table-condensed table-bordered">
        <thead>
        {!! \App\Http\Controllers\Administracija\Filter::tableHeader($filters) !!}
        <th>Akcije</th>
        </thead>
        <tbody>
        @php $counter = 1; @endphp
        @foreach($nearby as $user)
            <tr>
                <td>{{$counter++}}.</td>
                <td>{{$user->gradRel->name ?? '/'}}</td>
                <td>{{$user->name ?? '/'}}</td>
                <td>{{$user->distance ?? '/'}}</td>
                <td></td>
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
