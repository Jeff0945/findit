<div class="container" style="background: rgba(240, 238, 226, 1);">
    <div class="text-dark bg-light border rounded border-0 border-light d-flex flex-column justify-content-between align-items-center flex-lg-row p-4 p-lg-5"
         data-bs-theme="light"
         style="height: 5px;background: rgba(240, 238, 226, 1);width: 1342px;margin-top: 9px;"><span></span><span
                style="margin-left: 25px;width: 40px;"></span>
        <select class="form-select"
                style="width: 300px;margin-right: 130px;margin-left: -57px;color: rgba(0, 0, 0, 0.5);font-family: 'Inter';font-weight: bold;"
                required>
            <option value="all" selected>All</option>
            <option value="unclaimed">Unclaimed Items</option>
            <option value="claimed">Claimed Items</option>
            <option value="donated">Donated Items</option>
        </select>
        <div class="d-flex gap-3">
            <div class="d-flex">
                <input class="form-control rounded-end-0" type="search" style="width: 600px;margin-left: -18px;" placeholder="Looking for something?"/>
                <x-button class="text-white bg-black rounded-start-0"><i class="fa fa-search"></i></x-button>
            </div>
            <a class="btn btn-primary bg-black" role="button" href="{{ route('admin.items.create') }}">
                Add item<i class="fa fa-plus ms-2"></i>
            </a>
        </div>
    </div>
</div>