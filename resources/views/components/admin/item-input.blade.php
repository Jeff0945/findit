@props(['width' => 'auto', 'height' => 'auto', 'label' => ''])

<div style="width: {{ $width }}; height: {{ $height }};">
    <p style="font-size: 18px;color: rgba(53, 51, 45, 1);font-weight: bold;font-family: 'Inter';">{{ $label }}</p>
    <input {{ $attributes(['class' => 'form-control mb-2', 'type' => 'text', 'style' => 'margin-top: -13px;']) }}>
</div>