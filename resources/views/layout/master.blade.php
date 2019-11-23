<html lang="BS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/icons/chip.ico')}}"/>--}}

    <title>@yield('title')</title>

    <!--                       FONTS                            -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cdf2a0a58b.js"></script>

    <!--         All javascript files - compiled                -->
    @yield('other_js_links')

    <!--             All css files - compiled                   -->
    @yield('other_css_links')
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
{{--<!-- Loading gifs that covers most of page -->--}}
{{--<div id="loading-gif">--}}
{{--    {!! Html::image(asset('/images/icons/loading.gif')) !!}--}}
{{--</div>--}}


<script src="{{asset('/js/app.js')}}"></script>
@yield('second_js_scripts')
</body>
</html>
