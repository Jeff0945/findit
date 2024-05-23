@props(['item'])

<div class="col-3">
    <div class="card">
        <img class="img-fluid" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" src="{{ $item->attachment?->url }}">
        <div class="card-body text-center">
            <h6 class="card-title">{{ $item->name }}</h6>
            <p class="card-text">{{ $item->status_text }}</p>
        </div>
    </div>
</div>