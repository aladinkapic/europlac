@extends('administracija.layout.master')
@section('title') Pregled svih postova  @endsection
@section('page-icon') <i class="fas fa-rss"></i> @endsection
@section('page-header') Sadržaj posta @endsection
@section('page-desc') Na ovom dijelu je prikazan sadržaj posta sa svim njegovim dijelovima! Izvorni prikaz. @endsection
@section('page-links') <a href=""> Naslovna </a> / <a href="{{Route('admin.blog.index')}}"> Pregled svih postova </a> / <a href="{{Route('admin.blog.preview-post', ['id' => $post->id ?? '/'])}}"> Nazad na post </a> @endsection



@section('content')
    <!-- Links to follow -->
    <div class="blog-post-inputs">
        <a href="{{route('admin.blog.blog-details-text', ['id' => $post->id ?? '/'])}}">
            <div class="single-element" title="Unesite tekstuelni dio">
                <i class="fas fa-clipboard"></i>
            </div>
        </a>
        <a href="{{route('admin.blog.blog-details-image', ['id' => $post->id ?? '/'])}}">
            <div class="single-element" title="Unesite sliku">
                <i class="fas fa-image"></i>
            </div>
        </a>
    </div>


    <!-- Default header -->
    <div class="news-part">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <h1>{{$post->header ?? '/'}}</h1>
        </div>
    </div>

    <!----------------------------------------------------------------------------------------------------------------->
    <!-- Dynamics part !! -->

    @foreach($post->posts as $elem)
        @if($elem->what == 'text_part')
            <div class="news-part">
                <div class="edit-delete">
                    <a href="{{route('admin.blog.blog-details-text-edit', ['id' => $elem->text->id ?? '/'])}}">
                        <div class="post-part edit-post" title="Uredite ovaj post">
                            <i class="fas fa-edit"></i>
                        </div>
                    </a>
                    <a href="{{route('admin.blog.blog-text-delete', ['post' => $post->id, 'id' => $elem->text->id])}}">
                        <div class="post-part delete-post" title="Izbrišite ovaj post">
                            <i class="fas fa-trash"></i>
                        </div>
                    </a>
                </div>

                <div class="left-one"><div class="just-line"></div></div>
                <div class="right-one">
                    <h2>{{$elem->text->header ?? '/'}}</h2>

                    <p>{{nl2br($elem->text->description ?? '/')}}</p>
                </div>
            </div>
        @elseif($elem->what == 'image_part')
            <div class="news-part image">
                <div class="edit-delete edit-delete-2">
                    <a href="{{route('admin.blog.blog-details-image-edit', ['id' => $elem->imagRel->id ?? '/'])}}">
                        <div class="post-part edit-post" title="Uredite ovaj post">
                            <i class="fas fa-edit"></i>
                        </div>
                    </a>

                    <a href="{{route('admin.blog.blog-image-delete', ['post' => $post->id, 'id' => $elem->imagRel->id])}}">
                        <div class="post-part delete-post" title="Izbrišite ovaj post">
                            <i class="fas fa-trash"></i>
                        </div>
                    </a>
                </div>

                <div class="left-one"><div class="just-line"></div></div>
                <div class="right-one">
                    <img src="{{asset('/images/blog/all-images/'.$elem->imagRel->image ?? '/')}}" class="desktop-version" alt="">
                </div>
            </div>
        @endif
    @endforeach

    <div class="news-part">
        <div class="left-one"></div>
        <div class="right-one">
            <div class="final-part">
                <h5>Objavljeno {{$post->date() }} u {{$post->time() }} u kategoriji {{$post->categoryRel->name ?? ''}}, <span>objavio / la {{$post->user->name ?? ''}}</span></h5>
            </div>
        </div>
    </div>
@endsection
