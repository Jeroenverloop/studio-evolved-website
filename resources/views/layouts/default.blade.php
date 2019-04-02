<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @include('layouts.thirdparty')
        @yield('custom-head')
        <link rel="stylesheet" type="text/css" href="/css/app.css?{{ time() }}">
    </head>
    <body>
        <script src="{{ asset('js/custom/nav.js') }}"></script>
        @yield('custom-body')
        <div class="container">
            @include('components.nav')
            @yield('content')
        </div>
    </body>
</html>
