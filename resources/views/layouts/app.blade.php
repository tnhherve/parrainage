<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--  Google font -->
        <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
        <link rel="stylesheet" href="css/dashboard.css">
        <title>{{page_title($title)?? ''}}</title>

    </head>
    <body>
        @include('layouts.partiels._nav')
        @yield('content')
    </body>
</html>
