<html lang="BS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/images/icons/chip.ico')}}"/>--}}

    <title>@yield('title')</title>

    <!--                       FONTS                            -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/cdf2a0a58b.js"></script>

    <!--
        MASTER TEMPLATES
        https://piaf-vue.coloredstrategies.com/app/dashboards/default
        https://demo.architectui.com/default/#/dashboards/commerce
    -->

    <!--         All javascript files - compiled                -->
{{--    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>--}}
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
    @include('layout/menu/top-menu')
    @yield('content')

    <script src="{{asset('/js/app.js')}}"></script>
    @yield('second_js_scripts')
</body>
</html>
