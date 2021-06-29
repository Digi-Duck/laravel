<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('page-title') </title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <style>
        * {
            box-sizing: border-box;
            font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji';
        }

        body,
        html {
            padding: 0;
            margin: 0;
        }

        header nav a {
            padding: 16px;
        }

        header nav .navbar-nav li a {
            margin: 0 0 0 16px;
            padding: 8px 16px;
        }

        section {
            margin-bottom: 100px;
        }

        .fas.fa-star,
        .far.fa-star {
            color: #6366F1;
            font-size: 14px;
            margin-right: -4px;
        }

        .map .card {
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateY(-50%);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 3px 10px;
        }

        footer:first-of-type {
            padding-bottom: 100px;
        }
    </style>
    @yield('css')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg d-flex">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/logo.svg')}}" height="60" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-body ml-3" href="{{asset('product')}}">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body ml-3" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body ml-3" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body ml-3" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body ml-3" href="{{asset('shopping_cart/step01')}}"><i
                                    class="fas fa-shopping-cart" style="font-size: 25px;"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body ml-3" href="./bootstrap-login.html"><i
                                    class="fas fa-user-circle" style="font-size: 25px;"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('main')
    </main>

    <footer class="footer mt-auto container ">
        <div class="row">
            <div class="col-12 col-md-3 text-center text-md-left mx-auto my-auto ">
                <img class="mb-2" src="{{asset('img/logo2.svg')}}" alt="" width="40" height="40">數位方塊
                <small class="d-block mb-3 text-muted">Air plant banjo lyft occupy retro adaptogen indego</small>
            </div>
            <div class="col-12 col-md-9">
                <div class="row">
                    <div class="col-12 col-lg-3 col-md-6 text-center">
                        <h5>CATEGORIES</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">First
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Second
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Third
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Fourth
                                    Link</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 text-center">
                        <h5>CATEGORIES</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">First
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Second
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Third
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Fourth
                                    Link</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 text-center">
                        <h5>CATEGORIES</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">First
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Second
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Third
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Fourth
                                    Link</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 text-center">
                        <h5>CATEGORIES</h5>
                        <ul class="list-unstyled text-small">
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">First
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Second
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Third
                                    Link</a></li>
                            <li><a class="text-muted" href="https://getbootstrap.com/docs/4.6/examples/pricing/#">Fourth
                                    Link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <footer class="footer mt-auto py-3 bg-light ">
        <div class="container bg-light d-flex flex-wrap justify-content-between align-items-center">
            <p class="m-0 "> © 2020 Tailblocks — @knyttneve</p>
            <p class="">
                <i class="fab fa-facebook-f text-muted mr-2"></i>
                <i class="fab fa-twitter text-muted mr-2"></i>
                <i class="fab fa-instagram text-muted mr-2"></i>
                <i class="fab fa-linkedin-in text-muted mr-2"></i>
            </p>
        </div>
    </footer>

    <script src="{{asset('js/app.js')}}"></script>
    @yield('js')
</body>

</html>