<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Swotah Travel | @yield('title')</title>
    {{--Material Design CSS--}}

    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--Material Icons--}}
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.3.0/material-grid.css">
    @yield('links')
    @yield('metatags')
</head>
<body>
@yield('content')
{{--Scripts--}}
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
@yield('scripts')
</body>

</html>






