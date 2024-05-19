<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>all items</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdn.reflowhq.com/v2/toolkit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar-Centered-Brand-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
<nav class="navbar navbar-expand-md bg-body py-3">
    <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><img src="{{ asset('img/minilogo_allitems.png') }}" width="107" height="38"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-4"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse flex-grow-0 order-md-first" id="navcol-4">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-filter-left" style="font-size: 30px;">
                            <path d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5"></path>
                        </svg></a></li>
            </ul>
            <div class="d-md-none my-2"><button class="btn btn-light me-2" type="button">Button</button><button class="btn btn-primary" type="button">Button</button></div>
        </div>
        <div class="d-none d-md-block"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-search" style="font-size: 22px;color: #000000;">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
                </svg></a></div>
    </div>
</nav>
<section>
    <div class="container" style="padding-bottom: 0px;padding-top: 70px;margin-bottom: 70px;">
        <div data-reflow-type="product-list" data-reflow-layout="cards" data-reflow-order="date_desc">
            <div data-reflow-type="product-list" data-reflow-order="date_desc" data-reflow-layout="cards">
                <div class="reflow-product-list ref-cards">
                    <div class="ref-products">
                        @for($i = 0; $i < 10; $i++)
                            <div class="ref-product">
                                <div class="ref-media">
                                    <img class="ref-image" src="https://cdn.bootstrapstudio.io/products/product-30_md.jpg" loading="lazy" />
                                </div>
                                <div class="ref-product-data">
                                    <div class="ref-product-info">
                                        <h5 class="ref-name">Piggy Bank</h5>
                                        <p class="ref-excerpt">Itaque id quidem aperiam perspiciatis unde natus voluptates.</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="ref-product-preview">
                        <div class="ref-product-preview-header">
                            <div class="ref-title"></div>
                            <div class="ref-close-button">×</div>
                        </div>
                        <div class="ref-product-preview-content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ url('https://cdn.reflowhq.com/v2/toolkit.min.js') }}"></script>
<script src="{{ asset('js/bs-init.js') }}"></script>
</body>

</html>