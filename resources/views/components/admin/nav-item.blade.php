@props(['active' => false])

<li class="nav-item">
    <a {{ $attributes(['class' => 'nav-link py-3 border-bottom rounded-0 text-black']) }} {{ $active ? 'style=background-color:#dfb97b;' : '' }}>
        {{ $slot }}
    </a>
</li>