@extends('administracija.layout.master')
@section('title') Unos slike / Pregled  @endsection
@section('page-icon') <i class="fas fa-image"></i> @endsection
@section('page-header') Unos / pregled slike @endsection
@section('page-desc') Unos / pregled slika iz posta! / <a href="#" class="trigger-to-delete">OBRIŠITE</a> @endsection
@section('page-links') <a href=""> Naslovna </a> / <a href="{{Route('admin.blog.index')}}"> Pregled svih postova </a> / <a href="{{Route('admin.blog.preview-post', ['id' => $post->id ?? '/'])}}"> Nazad na post </a> @endsection

@if(isset($image))
    <!-- Deleting items -->
@section("delete-url") {{route('admin.blog.delete-blog-image', ['id' => $image->id ?? ''])}} @endsection
<!-- END OF DELETING ITEMS -->
@endif

@section('content')
    @if(isset($image))
        {!! Form::open(array('route' => 'admin.blog.update-blog-image', 'action' => 'BlogController@updateBlogImage')) !!}
    @else
        {!! Form::open(array('route' => 'admin.blog.insert-blog-image', 'action' => 'BlogController@insertBlogImage')) !!}
    @endif

    @csrf
    <section>
        <div class="single-one single-one-with-padding">
            @if(isset($post))
                {!! Form::hidden('blog_id', $post->id, ['class' => 'form-input']) !!}
            @endif
            @if(isset($image))
                {!! Form::hidden('id', $image->id, ['class' => 'form-input']) !!}
            @endif

            <div class="input-row">
                {!! Form::hidden('image', $image->image ?? '', ['class' => 'photo-preview', 'id' => 'photo-input-title']) !!}
                <div class="input-image-w">
                    <img src="/images/blog/all-images/{{$image->image ?? '/'}}" id="photo-preview" alt="">
                    <form action="">
                        <label for="photo-input">
                            <div class="input-image-shadow">
                                <i class="fas fa-camera"></i>
                            </div>
                        </label>
                        <input type="file" id="photo-input" class="photo-input" source="/images/blog/all-images/" foto-name="photo-preview" name="photo-input" url="{{Route('photos.blog.post-image-upload')}}">
                    </form>
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
