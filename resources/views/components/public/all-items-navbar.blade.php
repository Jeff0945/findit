<nav class="navbar navbar-expand-md bg-body py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/minilogo_allitems.png') }}" width="107" height="38">
        </a>
        <form class="d-flex"
              action="{{ route('all-items') }}"
              method="GET">
            <input name="search"
                   value="{{ request('search') }}"
                   class="form-control rounded-end-0">
            <x-button class="text-white bg-black rounded-start-0" type="submit">
                <i class="fa fa-search"></i>
            </x-button>
        </form>
    </div>
</nav>