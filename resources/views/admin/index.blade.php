<x-admin.layout>
    <x-slot:title>Dashboard</x-slot:title>

    <form>
        <div style="height: 105px;width: 1700px;margin-left: 200px;margin-top: 260px;">
            <div class="container text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center">
                <x-admin.dashboard-card title="TOTAL CLAIMED ITEMS" :count="$claimed" />

                <x-admin.dashboard-card title="TOTAL UNCLAIMED ITEMS" :count="$unclaimed" />

                <x-admin.dashboard-card title="TOTAL DONATED ITEMS" :count="$donated" />
            </div>
        </div>
    </form>
</x-admin.layout>