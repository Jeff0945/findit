@props(['data', 'text' => ''])

<button {{ $attributes(['class' => 'dropdown-item', 'data-info' => json_encode($data), 'type' => 'button', 'data-text' => $text]) }}>
    {{ $text }}
</button>