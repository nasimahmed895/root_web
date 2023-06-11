<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/uploads/images/' . get_option('icon')) }}">
    <link rel="icon" type="image/png" href="{{ asset('public/uploads/images/' . get_option('icon')) }}">
    <title>{{ get_option('site_title') }}</title>
    <!--  Fonts and icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="{{ asset('/public/frontend/style/loder.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    {{--  yajra datatable  --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/toastr/toastr.css') }}">
    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/dropify/dropify.min.css') }}">
    <!-- Nucleo Icons -->
    <link href="{{ asset('/public/backend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/public/backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/public/backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('/public/backend/assets/css/argon-dashboard.css?v=2.0.4') }}"
        rel="stylesheet" />

    {{-- Tag It --}}
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/tag-it/css/jquery.tagit.css') }}">
    <link rel="stylesheet" href="{{ asset('/public/backend/assets/plugins/tag-it/css/tagit.ui-zendesk.css') }}">

    <link rel="stylesheet" href="{{ asset('/public/backend/assets/css/style.css') }}">


    {{--  summernote  --}}
    {{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">  --}}
    {{--  summernote  --}}
</head>
