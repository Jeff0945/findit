<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Inter.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/font-awesome.min.css') }}">

    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</head>

<body>
<form {{ $attributes(['class' => 'justify-content-center p-4', 'method' => 'POST']) }}>
    @csrf

    <x-auth.logo/>

    <x-auth.identifier/>

    {{ $slot }}
</form>
</body>

</html>