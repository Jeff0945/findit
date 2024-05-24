<div class="bg-body shadow d-flex flex-column flex-shrink-0 position-fixed top-0 bottom-0"
     style="border-right: 1px solid rgba(53, 51, 45, 0.5);background: rgba(240, 238, 226, 1);">
    <ul class="nav nav-pills flex-column text-center nav-flush my-auto">
        <x-admin.nav-item :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2"
                 stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"
                 class="icon icon-tabler icon-tabler-brand-google-analytics" style="height: 33px;width: 54px;">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M10 9m0 1.105a1.105 1.105 0 0 1 1.105 -1.105h1.79a1.105 1.105 0 0 1 1.105 1.105v9.79a1.105 1.105 0 0 1 -1.105 1.105h-1.79a1.105 1.105 0 0 1 -1.105 -1.105z"></path>
                <path d="M17 3m0 1.105a1.105 1.105 0 0 1 1.105 -1.105h1.79a1.105 1.105 0 0 1 1.105 1.105v15.79a1.105 1.105 0 0 1 -1.105 1.105h-1.79a1.105 1.105 0 0 1 -1.105 -1.105z"></path>
                <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
            </svg>
        </x-admin.nav-item>
        <x-admin.nav-item :href="route('admin.items.index')" :active="request()->routeIs('admin.items.index')">
            <i class="fa fa-tasks" style="font-size: 28px;"></i>
        </x-admin.nav-item>
        <form id="logout" method="POST" action="{{ route('logout') }}">
            @csrf

            <x-admin.nav-item type="submit" onclick="document.getElementById('logout').submit()">
                <i class="fa fa-sign-out" style="font-size: 28px"></i>
            </x-admin.nav-item>
        </form>
    </ul>
</div>