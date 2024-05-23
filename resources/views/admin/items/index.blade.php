<x-admin.layout>
    <x-slot:title>Items</x-slot:title>

    <div style="width: 1920px;height: 1080px;background: rgba(240, 238, 226, 1);">
        <section class="py-4 py-xl-5">
            <x-admin.items-header />

            <x-admin.item-table :items="$items" />
        </section>
    </div>
</x-admin.layout>
