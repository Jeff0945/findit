
{{--<div class="container" style="background: rgba(240, 238, 226, 1);">--}}
{{--    <div class="text-dark bg-light border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5"--}}
{{--         data-bs-theme="light"--}}
{{--         style="height: 5px;background: rgba(240, 238, 226, 1);width: 1342px;margin-top: 9px;"><span></span><span--}}
{{--                style="margin-left: 25px;width: 40px;"></span>--}}
{{--        <select class="form-select"--}}
{{--                style="width: 300px;margin-right: 130px;margin-left: -57px;color: rgba(0, 0, 0, 0.5);font-family: 'Inter';font-weight: bold;"--}}
{{--                required>--}}
{{--            <option value="all" selected>All</option>--}}
{{--            <option value="unclaimed">Unclaimed Items</option>--}}
{{--            <option value="claimed">Claimed Items</option>--}}
{{--            <option value="donated">Donated Items</option>--}}
{{--        </select>--}}
{{--        <div class="d-flex gap-3">--}}
{{--            <div class="d-flex">--}}
{{--                <input class="form-control rounded-end-0" type="search" style="width: 600px;margin-left: -18px;"--}}
{{--                       placeholder="Looking for something?"/>--}}
{{--                <x-button class="text-white bg-black rounded-start-0"><i class="fa fa-search"></i></x-button>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



<nav class="navbar navbar-expand-md bg-body py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('img/minilogo_allitems.png') }}" width="107" height="38">
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-filter-left" style="font-size: 30px;">
                            <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"></path>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="d-md-none my-2">
                <x-button class="btn-light me-2">Button</x-button>
                <x-button class="btn-primary">Button</x-button>
            </div>
        </div>
        <div class="d-none d-md-block">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16"
                     class="bi bi-search" style="font-size: 22px;color: #000000;">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                </svg>
            </a>
        </div>
    </div>
</nav>
