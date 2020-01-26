@extends('administracija.layout.master')
@section('title') Pregled svih postova  @endsection
@section('page-icon') <i class="fas fa-rss"></i> @endsection
@section('page-header') Pregled svih postova @endsection
@section('page-desc') Na ovom dijelu možete pregledati sve postove iz blog sekcije @endsection
@section('page-links') <a href=""> Naslovna </a> / <a href="{{Route('admin.blog.index')}}"> Pregled svih postova </a> @endsection

@section('other_css_links') <link rel="stylesheet" href="{{asset('/css/bootstrap.css')}}"> @endsection

@section('content')
    {!!  \App\Http\Controllers\Administracija\Filter::show($posts, $filters) !!}
    <table id="filtering" class="table table-condensed table-bordered">
        <thead>
        {!! \App\Http\Controllers\Administracija\Filter::tableHeader($filters) !!}
        <th>Akcije</th>
        </thead>
        <tbody>
        @php $counter = 1; @endphp
        @foreach($posts as $post)
            <tr>
                <td>{{$counter++}}.</td>
                <td>{{$post->header ?? '/'}}</td>
                <td>{{$post->categoryRel->name ?? '/'}}</td>
                <td>{{$post->short_desc ?? '/'}}</td>

                <td>
                    <a href="{{route('admin.blog.preview-post', ['id' => $post->id ?? '/'])}}">
                        <button class="btn my-button">Pregled</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
