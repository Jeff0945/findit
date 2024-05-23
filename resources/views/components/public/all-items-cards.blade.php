@props(['item'])

<div class="ref-product">
    <div class="ref-media">
        <img class="ref-image" src="{{ $item->attachment?->url }}" loading="lazy" />
    </div>
    <div class="ref-product-data">
        <div class="ref-product-info">
            <h5 class="ref-name">{{ $item->name }}</h5>
            <p class="ref-excerpt">{{ $item->status_text }}</p>
        </div>
    </div>
</div>