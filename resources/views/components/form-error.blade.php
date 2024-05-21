@props(['name'])

@error($name)
    <p class="text-danger fw-bold mt-1 mb-0" style="font-size: 12px;">{{ $message }}</p>
@enderror