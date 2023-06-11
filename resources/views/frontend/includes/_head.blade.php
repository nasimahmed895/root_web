<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ get_option('site_title') }}</title>

    <title>{{ get_option('site_title') }} | Get Software Solutions for Businesses and Individuals!</title>
    <meta name="description"
        content="RootDevs is a software development company that develops mobile app, web and computer software. We create innovative software solutions for businesses and individuals.">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Home - RootDevs">
    <meta property="og:description"
        content="RootDevs is a software development company that develops mobile app, web and computer software. We create innovative software solutions for businesses and individuals.">
    <meta property="og:image" content="{{ asset('public/frontend/Icon_Images/Album/12image.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="RootDevs">
    <meta name="keywords"
        content="rootdevs, ios app development, android app development, website development, computer software development">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home - RootDevs">
    <meta name="twitter:description"
        content="RootDevs is a software development company that develops mobile app, web and computer software. We create innovative software solutions for businesses and individuals.">
    <meta name="twitter:label1" content="Written by">
    <meta name="twitter:data1" content="Mamun Rex">
    <meta name="twitter:label2" content="Time to read">
    <meta name="twitter:data2" content="4 minutes">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="256x256"
        href="{{ asset('public/uploads/images/' . get_option('icon')) }}">
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/toastr/toastr.css') }}">

    <link rel="stylesheet" href="{{ asset('/public/frontend/style/loader.css') }}">
    @if (Route::is('job_details'))
        <link rel="stylesheet" href="{{ asset('/public/frontend/style/share.css') }}">
    @endif

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="{{ asset('public/frontend/plugin/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/public/frontend/style/jquery.datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/frontend/plugin/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/frontend/plugin/slick/slick-theme.css') }}">
    @if (Route::is('contact_us') || Route::is('basic-information'))
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" />
    @endif


    <link rel="stylesheet" href="{{ asset('/public/frontend/font/stylesheet.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/public/frontend/style/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/frontend/style/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/frontend/style/mediaquery.css') }}">
    {{--  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>  --}}
</head>
