@extends('administracija.layout.master')
@section('title') {{isset($post) ? $post->header : 'Unos novog posta'}}  @endsection
@section('page-icon') <i class="fas fa-plus"></i> @endsection
@section('page-header') {{isset($post) ? $post->header : 'Unos novog posta'}}@endsection
@section('page-desc')
    @if(isset($post))
        Pregledajte / uredite post -
        <a href="{{route('admin.blog.blog-details', ['id' => $post->id])}}">Pregled sadržaja</a>

        / <a href="#" class="trigger-to-delete">OBRIŠITE</a>
    @else
        Unos novog posta u blog sekciju
    @endif
@endsection

@if(isset($post))
    <!-- Deleting items -->
@section("delete-url") {{route('admin.blog.blog-delete', ['id' => $post->id ?? ''])}} @endsection
<!-- END OF DELETING ITEMS -->
@endif


@section('page-links') <a href=""> Naslovna </a> / <a href="{{Route('admin.blog.index')}}"> Pregled svih postova </a> @endsection

@section('content')
    @if(isset($post))
        {!! Form::open(array('route' => 'admin.blog.update-new-post', 'action' => 'BlogController@updateNewPost')) !!}
    @else
        {!! Form::open(array('route' => 'admin.blog.save-new-post', 'action' => 'BlogController@saveNewPost')) !!}
    @endif

    @csrf
    <section>
        <div class="split-two">
            @if(isset($post))
                {!! Form::hidden('id', $post->id, ['class' => 'form-input']) !!}
            @endif

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('header', __('Naslov posta').' :', ['class' => 'form-label']) !!}
                    {!! Form::text('header', $post->header ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'maxlength' => '50']) !!}
                </div>
                <div class="input-col">
                    {!! Form::label('category', __('Kategorija').' :', ['class' => 'form-label']) !!}
                    {!! Form::select('category', $category, $post->category ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'maxlength' => '50']) !!}
                </div>
            </div>

            <div class="input-row">
                <div class="input-col">
                    {!! Form::label('short_desc', __('Kratki opis').' :', ['class' => 'form-label']) !!}
                    {!! Form::textarea('short_desc', $post->short_desc ?? '', ['class' => 'form-input', 'autocomplete' => 'off', 'style' => 'height:200px; resize:none;', 'maxlength' => '240']) !!}
                </div>
            </div>
        </div>
        <div class="split-two">
            <div class="input-row">
                {!! Form::hidden('image',  $post->image ?? '', ['class' => 'photo-preview', 'id' => 'photo-input-title']) !!}
                <div class="input-image-w">
                    <img src="/images/blog/{{ $post->image ?? ''}}" id="photo-preview" alt="">
                    <form action="">
                        <label for="photo-input">
                            <div class="input-image-shadow">
                                <i class="fas fa-camera"></i>
                            </div>
                        </label>
                        <input type="file" id="photo-input" class="photo-input" source="/images/blog/" foto-name="photo-preview" name="photo-input" url="{{Route('photos.blog.new-post-photo')}}">
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

@section('second_js_scripts')
    <script src="{{asset('/js/administracija/estate.js')}}"></script>
@endsection
