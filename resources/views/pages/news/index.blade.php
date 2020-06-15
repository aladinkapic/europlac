@extends('layout.layout')
@section('title') Dobro došli na www.europlac-nekretnine.com @stop

@section('content')
    <div class="breadcrumbs">
        <div class="inside-breadcrumbs">
            <div class="single-part single-wanished">
                <p>Blog - Prikaz novosti</p>
            </div>
            <div class="single-part ">
                <p>
                    <a href="{{route('home')}}">Naslovna strana</a> /
                    <a href="{{route('news')}}">Blog</a>
                </p>
            </div>
        </div>
    </div>

    <!-- News and sidebar with categories -->
    <div class="news-section">
        <!-- Disply all news -->
        <div class="all-news">
            @foreach($posts as $post)
                <div class="single-new">
                    <img src="{{asset('/images/blog/'.$post->image ?? '/')}}" class="desktop-version" alt="">

                    <h2>{{$post->header ?? '/'}}</h2>
                    <h5>Objavljeno {{$post->date() }} godine, u {{$post->time() }}h u kategoriji {{$post->categoryRel->name ?? ''}}</h5>
                    <p>{{$post->short_desc ?? '/'}}</p>

                    <div class="view-more" title="Pročitajte više">
                        <a href="{{route('news.preview', ['id' => $post->id ?? '/'])}}">
                            <div class="inside-more">
                                <div class="left-line"></div>
                                <p>Nastavite čitati</p>
                                <div class="right-line"></div>
                                <i class="fas fa-caret-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Side bar-->
        <div class="side-bar">
            <h4>Kategorije</h4>

            @foreach($categories as $category)
                <a href="/novosti?filter%5B%5D=category&filter_values%5B%5D={{$category->value ?? '/'}}&page=1">
                    <p>{{$category->name ?? '/'}} ({{ App\Models\Administracija\Blog\Blog::where('category' , $category->value ?? '1')->get()->count() }})</p>
                </a>
            @endforeach
        </div>
    </div>


    <div class="pages">
        @for($i=0; $i<((int)($posts->total() / 12) + 1); $i++)
            <div class="single-blog-page {{($i+1 == $current_page) ? 'focus' : ''}}" page="{{$i + 1}}">
                <a href="{{$actual_link}}{{$i + 1}}">
                    <p>{{$i + 1}}</p>
                </a>
            </div>
        @endfor
        <div class="single-page next-one">
            <p>Sljedeća stranica</p>
        </div>
    </div>
@endsection
