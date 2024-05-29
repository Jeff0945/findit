<div class="container" style="background: rgba(240, 238, 226, 1);">
    <form action="{{ route('admin.items.index') }}"
          method="GET"
          class="text-dark bg-light border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5"
          data-bs-theme="light"
          style="height: 5px;background: rgba(240, 238, 226, 1);width: 1342px;margin-top: 9px;">
        <span></span>
        <span style="margin-left: 25px;width: 40px;"></span>
        <select name="filter"
                class="form-select"
                style="width: 300px;margin-right: 130px;margin-left: -57px;color: rgba(0, 0, 0, 0.5);font-family: 'Inter';font-weight: bold;"
                onchange="this.form.submit()"
                required>
            <option value="all" {{ (request('filter') === 'all') || (request('filter') === '') ? 'selected' : '' }}>
                All
            </option>
            <option value="unclaimed" {{ request('filter') === 'unclaimed' ? 'selected' : '' }}>Unclaimed Items</option>
            <option value="claimed" {{ request('filter') === 'claimed' ? 'selected' : '' }}>Claimed Items</option>
            <option value="donated" {{ request('filter') === 'donated' ? 'selected' : '' }}>Donated Items</option>
        </select>
        <div class="d-flex gap-3">
            <div class="d-flex">
                <input name="search"
                       class="form-control rounded-end-0"
                       type="search"
                       style="width: 600px;margin-left: -18px;"
                       value="{{ request('search') }}"
                       placeholder="Looking for something?"/>
                <x-button class="text-white bg-black rounded-start-0" type="submit">
                    <i class="fa fa-search"></i>
                </x-button>
            </div>
            <a class="btn btn-primary bg-black" role="button" href="{{ route('admin.items.create') }}">
                Add item<i class="fa fa-plus ms-2"></i>
            </a>
        </div>
    </form>
</div>