<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/dashboard.css">
        <title>{{page_title($title)?? ''}}</title>

    </head>
    <body>
        @include('layouts.partiels._nav')
        @yield('content')
        <script src="//code.jquery.com/jquery.js"></script>
        
        <script src="/bootstrap/js/popper.min.js"></script>
        <script src="/bootstrap/js/bootstrap.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/bootstrap/icons/feather.js"></script>
        <script src="/bootstrap/icons/feather.min.js"></script>
        <script>
          feather.replace()
        </script>
    </body>
</html>
