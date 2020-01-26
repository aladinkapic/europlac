@extends('administracija.layout.master')
@section('title') Pregled svih postova  @endsection
@section('page-icon') <i class="fas fa-clipboard"></i> @endsection
@section('page-header') Unos teksta @endsection
@section('page-desc') Unos tekstuelnog sadržaja posta! / <a href="#" class="trigger-to-delete">OBRIŠITE</a> @endsection
@section('page-links') <a href=""> Naslovna </a> / <a href="{{Route('admin.blog.index')}}"> Pregled svih postova </a> / <a href="{{Route('admin.blog.preview-post', ['id' => $post->id ?? '/'])}}"> Nazad na post </a> @endsection

@if(isset($text))
    <!-- Deleting items -->
    @section("delete-url") {{route('admin.blog.delete-blog-text', ['id' => $text->id ?? ''])}} @endsection
    <!-- END OF DELETING ITEMS -->
@endif

@section('content')
    @if(isset($text))
        {!! Form::open(array('route' => 'admin.blog.update-blog-text', 'action' => 'BlogController@updateBlogText')) !!}
    @else
        {!! Form::open(array('route' => 'admin.blog.insert-blog-text', 'action' => 'BlogController@insertBlogText')) !!}
    @endif

    @csrf
    <section>
        <div class="single-one single-one-with-padding">
            @if(isset($post))
                {!! Form::hidden('blog_id', $post->id, ['class' => 'form-input']) !!}
            @endif
                @if(isset($text))
                    {!! Form::hidden('id', $text->id, ['class' => 'form-input']) !!}
                @endif

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('header', __('Naslov posta').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('header', $text->header ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'maxlength' => '80']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('description', __('Opis').' :', ['class' => 'form-label']) !!}
                    {!! Form::textarea('description', $text->description ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'style' => 'height:200px; resize:none;']) !!}
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
