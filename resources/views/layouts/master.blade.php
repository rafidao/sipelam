<!DOCTYPE HTML>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="materialize/css/materialize.css"> @yield('styles')
</head>

<body>
    @yield('navbar')
    <div class="main">@yield('content')</div>
    @yield('script')
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>

</html>