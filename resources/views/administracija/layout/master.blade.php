<html lang="BS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/logo.ico')}}"/>

    <title>@yield('title')</title>

    <!--                       FONTS                            -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cdf2a0a58b.js"></script>

    <!--         All javascript files - compiled                -->
    @yield('other_js_links')

<!--             All css files - compiled                   -->
    @yield('other_css_links')
    <link rel="stylesheet" href="{{asset('/css/administracija/style.css')}}">
</head>
<body>
<!-- Loading gifs that covers most of page -->
<div id="loading-gif">
    {!! Html::image(asset('/images/icons/loading.gif')) !!}
</div>

@include('administracija.layout.menu.menu')
<div class="content-wrapper">
    <div class="wrapper-with-margin">
        <div id="page-menu">
            <div class="page-menu-icon-w">
                @yield('page-icon')
            </div>
            <div class="page-menu-header">
                <h4>
                    @yield('page-header')
                </h4>
                <p>
                    @yield('page-desc')
                </p>
            </div>
            <div class="page-menu-navigation">
                <div class="page-menu-nav-icon">
                    <i class="fas fa-home"></i>
                </div>
                <a href="{{Route('admin')}}"> Naslovna strana </a> /
                @yield('page-links')
            </div>
            <div class="menu-line"></div>
        </div>
        @yield('content')
    </div>
</div>

<script src="{{asset('/js/administracija/app.js')}}"></script>
@yield('second_js_scripts')
</body>
</html>
