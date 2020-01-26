@extends('layout.layout')
@section('title') Business meeting 2017 in San Francisco @stop

@section('content')
    <div class="breadcrumbs">
        <div class="inside-breadcrumbs">
            <div class="single-part single-wanished">
                <p>{{$post->header ?? '/'}}</p>
            </div>
            <div class="single-part ">
                <p>
                    <a href="{{route('home')}}">Naslovna strana</a> /
                    <a href="{{route('news')}}">Blog</a> /
                    <a href="{{route('news')}}">{{$post->header ?? '/'}}</a>
                </p>
            </div>
        </div>
    </div>

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
                <div class="left-one"><div class="just-line"></div></div>
                <div class="right-one">
                    <h2>{{$elem->text->header ?? '/'}}</h2>

                    <p>{{nl2br(stripcslashes($elem->text->description ?? '/'))}}</p>
                </div>
            </div>
        @elseif($elem->what == 'image_part')
            <div class="news-part image">
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
                <h5>Prije 5 sati u kategoriji {{$post->categoryRel->name ?? '/'}}, <span>objavio / la Albin Ćoralić</span></h5>
            </div>
        </div>
    </div>

    <div class="news-line"></div>

@endsection
