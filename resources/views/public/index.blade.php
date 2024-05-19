<!DOCTYPE html>
<html data-bs-theme="light" lang="en" style="background: #FDFBF5;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>homepage</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=ABeeZee') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Corporate-Footer-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Navbar-Right-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive-footer-basicfooter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Responsive-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
<section>
    <nav class="navbar navbar-expand-md bg-body py-3">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#"><i class="icon ion-log-in" style="font-size: 30px;"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center hero-content"></div><img class="img-fluid d-flex d-md-none flex-column justify-content-center align-items-center" src="{{ asset('img/no more changes promise.png') }}"><img class="img-fluid sometimes-shown-img" src="{{ asset('img/superFinalFINAL.png') }}">
</section>
<section>
    <div class="container four-items">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center d-md-flex justify-content-md-center align-items-md-center">Recent reports</h1>
            </div>
        </div>
        <div class="row">
            @for($i = 0; $i < 4; $i++)
                <div class="col-3">
                    <div class="card">
                        <img class="img-fluid" data-bss-disabled-mobile="true" data-bss-hover-animate="pulse" src="{{ asset('img/white-waterbottle.png') }}">
                        <div class="card-body text-center">
                            <h6 class="card-title">White Water Bottle</h6>
                            <p class="card-text">unclaimed</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col d-flex d-md-flex flex-column justify-content-center align-items-center justify-content-md-center align-items-md-center button-viewall"><button class="btn btn-dark btn-lg text-center d-flex d-sm-flex d-xxl-flex flex-column justify-content-center align-items-center align-self-center justify-content-sm-center align-items-sm-center justify-content-xxl-center align-items-xxl-center" type="button">View All</button></div>
        </div>
    </div>
</section>
<footer class="page-footer" style="background: #DFB97B;">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <h4>HOW TO CLAIM AN ITEM</h4>
                <p style="color: var(--bs-body-bg);">Visit the Security and Investigation Division Office in MSU-IIT.</p>
                <h4>HOW TO MAKE A REPORT</h4>
                <p style="color: var(--bs-body-bg);">Visit the Security and Investigation Division Office in MSU-IIT.</p>
            </div>
            <div class="col-6 col-md-3">
                <ul class="footer-links">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <h4>CONTACT US</h4>
                <ul class="footer-links">
                    <li><a href="#" style="color: var(--bs-body-bg);">(63) 221-4062 / LOCAL 4102<br><span style="color: rgb(148, 26, 30); background-color: rgb(245, 245, 245);">sid@g.msuiit.edu.ph</span><br><span style="color: rgb(148, 26, 30); background-color: rgb(245, 245, 245);">sid.helpdesk@g.msuiit.edu.ph</span><br><br><br></a></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <p style="color: var(--bs-secondary-bg);"><br>Copyright © 2024. All rights reserved.<br><br></p>
    </div>
</footer>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bs-init.js') }}"></script>
</body>

</html>