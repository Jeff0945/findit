<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">

    {{ $styles }}
</head>

<body>
{{ $slot }}
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('https://cdn.reflowhq.com/v2/toolkit.min.js') }}"></script>
<script src="{{ asset('js/bs-init.js') }}"></script>
</body>

</html>