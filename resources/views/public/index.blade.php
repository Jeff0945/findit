<x-public.layout>
    <x-slot:title>Home</x-slot:title>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=ABeeZee') }}">
        <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Corporate-Footer-Clean.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Navbar-Right-Links-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Responsive-footer-basicfooter.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Responsive-footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/simple-footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    </x-slot:styles>

    <x-public.index-navbar/>

    <x-public.recent-reports>
        @foreach($items as $item)
            <x-public.index-cards :item="$item"/>
        @endforeach
    </x-public.recent-reports>

    <x-public.index-footer/>
</x-public.layout>