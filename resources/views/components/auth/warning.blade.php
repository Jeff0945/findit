@props(['authType' => ''])

<div class="d-flex justify-content-center">
    <div class="p-3 font-inter rounded" style="color: rgba(138, 95, 53, 0.8);background: rgba(229, 229, 229, 1);">
        <div class="row">
            <div class="col flex-grow-0 flex-shrink-1 pe-0">
                <i class="fa fa-warning"></i>
            </div>
            <div class="col">
                <p class="fw-bold mb-2">
                    Attention!
                </p>
                <p class="m-0">
                    Access to {{ $authType }} is restricted exclusively to the Security and Investigation Department.
                </p>
            </div>
        </div>
    </div>
</div>