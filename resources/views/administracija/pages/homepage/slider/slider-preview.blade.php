@extends('administracija.layout.master')
@section('title') Pregled slidera  @endsection

@section('page-icon') <i class="fas fa-sliders-h"></i> @endsection
@section('page-header') Pregled slidera @endsection
@section('page-desc') Pregled svih uzoraka slidera @endsection
@section('page-links') <a href=""> Naslovna </a> / <a href="{{Route('admin.homepage.slider-preview')}}"> Pregled slidera </a> @endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    <table id="filtering" class="table table-condensed table-bordered">
        <thead>
        <th width="80px" class="text-center">#</th>
        <th>Naslov slidera</th>
        <th>Link</th>
        <th width="120px;" class="text-center">Akcije</th>
        </thead>
        <tbody>
            @php $counter = 1 @endphp
            @foreach($slides as $slide)
                <tr>
                    <td class="text-center">{{$counter++}}.</td>
                    <td>{{$slide->header ?? '/'}}</td>
                    <td><a href="{{$slide->link ?? '/'}}" target="_blank">Pregled linka</a></td>
                    <td class="text-center">
                        <a href="{{route('admin.homepage.slider-edit', ['id' => $slide->id])}}">
                            <button class="btn my-button">Pregled</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


