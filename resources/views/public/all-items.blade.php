<x-public.layout>
    <x-slot:styles>
        <link rel="stylesheet" href="{{ url('https://cdn.reflowhq.com/v2/toolkit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Navbar-Centered-Brand-icons.css') }}">
    </x-slot:styles>

    <x-slot:title>All Items</x-slot:title>

    <x-public.all-items-navbar />

    <x-public.all-items-products>
        @foreach($items as $item)
            <x-public.all-items-cards :item="$item" />
        @endforeach
    </x-public.all-items-products>
</x-public.layout>