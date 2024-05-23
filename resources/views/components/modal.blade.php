<div class="modal fade justify-content-center align-items-center" role="dialog" tabindex="-1" id="modal-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: var(--bs-body-bg);">
                <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                {{ $header ?? '' }}
            </div>
            <div class="modal-body" style="background: var(--bs-body-bg);">
                {{ $slot }}
                <p class="d-xxl-flex justify-content-center align-items-xxl-center"
                   style="font-family: 'Inter';font-weight: bold;color: rgba(53, 51, 45, 1);font-size: 20px;">Do you
                    want to add this item?</p>
            </div>
            <div class="modal-footer" style="background: var(--bs-body-bg);">
                {{ $footer ?? '' }}
                <button class="btn btn-light" type="button" data-bs-dismiss="modal"
                        style="font-family: 'Inter';color: rgba(53, 51, 45, 1);">No
                </button>
                <button class="btn btn-primary" type="button"
                        style="background: rgba(223, 185, 123, 1);font-family: 'Inter';">Yes
                </button>
            </div>
        </div>
    </div>
</div>
