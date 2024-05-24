@props(['items'])

<div class="table-responsive" style="width: 1342px;margin-left: 313px;margin-top: 45px;">
    <table class="table">
        <thead>
        <x-admin.item-header-row/>
        </thead>
        <tbody>
        @foreach($items as $item)
            <x-admin.item-row :item="$item"/>
        @endforeach
        </tbody>
    </table>
</div>