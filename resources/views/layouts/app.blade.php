<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vue/test SSR App</title>

    <link rel="stylesheet" type="text/css" href="/css/app.css?{{ time() }}">
</head>

<body>
    <div id="app"></div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>

</html>
