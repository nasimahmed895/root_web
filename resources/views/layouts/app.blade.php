<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ get_option('site_title') }}</title>
    <meta name="keywords" content="RootDevs,App Development,Web App Development">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="RootDevs | Get software solutions for businesses and individuals">
    <meta property="og:description"
        content="RootDevs is a software company that develops mobile, web and computer software ,We create innovative software solutions for businesses and individuals.">
    <meta property="og:image" content="{{ asset('public/frontend/Icon_Images/Album/12image.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta name="twitter:title" content="RootDevs | Get software solutions for businesses and individuals">
    <meta name="twitter:description"
        content="RootDevs is a software company that develops mobile, web and computer software ,We create innovative software solutions for businesses and individuals.">
    ">
    <meta name="twitter:url" content="{{ asset('/') }}">
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url('/') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('css-stylesheet')
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
