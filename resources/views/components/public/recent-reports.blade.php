<section>
    <div class="container four-items">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center d-md-flex justify-content-md-center align-items-md-center">Recent reports</h1>
            </div>
        </div>
        <div class="row">
            {{ $slot }}
        </div>
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col d-flex d-md-flex flex-column justify-content-center align-items-center justify-content-md-center align-items-md-center button-viewall">
                <a href="{{ url('/all-items') }}" class="btn btn-dark btn-lg text-center d-flex d-sm-flex d-xxl-flex flex-column justify-content-center align-items-center align-self-center justify-content-sm-center align-items-sm-center justify-content-xxl-center align-items-xxl-center" type="button">
                    View All
                </a>
            </div>
        </div>
    </div>
</section>