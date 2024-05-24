<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Inter&amp;display=swap') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/material-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter.css') }}">

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bs-init.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>
</head>

<body style="background: rgba(240, 238, 226, 1);">
<x-admin.nav/>

<x-admin.logo/>

{{ $slot }}
</body>

</html>