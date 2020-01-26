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

    <div class="news-part">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>

            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. <br><br>

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
        </div>
    </div>

    <div class="news-part">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <img src="{{asset('/images/blog/1.jpg')}}" class="desktop-version" alt="">
        </div>
    </div>

    <div class="news-part">
        <div class="left-one"><div class="just-line"></div></div>
        <div class="right-one">
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>

            <p>
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32. <br><br>

                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
            </p>
        </div>
    </div>

    <div class="news-part">
        <div class="left-one"></div>
        <div class="right-one">
            <div class="final-part">
                <h5>Prije 5 sati u kategoriji Posao, <span>objavio / la Albin Ćoralić</span></h5>
            </div>
        </div>
    </div>
@endsection
