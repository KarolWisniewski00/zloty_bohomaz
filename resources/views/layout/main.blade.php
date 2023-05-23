<!doctype html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/main-icon.png" type="image/png">
    <meta property="og:image" content="adres_url_obrazka" />
    <meta name="robots" content="max-image-preview:large" />
    <meta name="twitter:card" content="summary" />
    <meta property="og:locale" content="pl_PL" />
    <meta name="author" content="Karol Wiśniewski">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <meta property="place:location:latitude" content="50.3503717" />
    <meta property="place:location:longitude" content="18.917879641792297" />
    <meta property="place:location:street" content="Piłsudskiego 18" />
    <meta property="place:location:city" content="Bytom" />
    <meta property="place:location:country" content="Poland" />
    <meta property="og:site_name" content="Studio tatuażu Bytom - firma Złoty Bohomaz"/>
    @yield('meta')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/e37acf9c2e.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--NAV-->
    <section id="nav" class="bg-primary fixed-top">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3">
                <a href="{{route('index')}}" class="d-flex align-items-center me-md-auto link-body-emphasis text-decoration-none text-white logo size-200">
                    Złoty Bohomaz
                </a>

                <ul class="nav nav-pills flex-wrap flex-md-nowrap justify-content-center align-items-center h-100">
                    <li class="nav-item"><a href="{{route('index')}}" class="nav-link text-white-50">Start</a></li>
                    <li class="nav-item dropdown">
                        <button class="nav-link text-white-50 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            O nas
                        </button>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="{{route('index')}}#album">Prace</a></li>
                            <li><a class="dropdown-item" href="{{route('index')}}#artist">Artyści</a></li>
                            <li><a class="dropdown-item" href="{{route('index')}}#about">Studio</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="nav-link text-white-50 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Informacje
                        </button>
                        <ul class="dropdown-menu shadow">
                            <li><a class="dropdown-item" href="{{route('index')}}#price">Wycena</a></li>
                            <li><a class="dropdown-item" href="{{route('index')}}#voucher">Voucher</a></li>
                            <li><a class="dropdown-item" href="{{route('index')}}#health">Gojenie</a></li>
                            <li><a class="dropdown-item" href="{{route('rule')}}">Regulamin</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="{{route('index')}}#contact" class="nav-link text-white-50">Kontakt</a></li>
                    <ul class="nav nav-pills flex-wrap flex-nowrap justify-content-center align-items-center h-100">
                        <li class="nav-item"><a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="nav-link text-white-50"><i class="fa-brands fa-instagram"></i></a></li>
                        <li class="nav-item py-2 h-100">
                            <div class="vr h-100 text-white"></div>
                        </li>
                        <li class="nav-item dropdown">
                            <button class="nav-link text-white-50 dropdown-toggle" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (auto)">
                                <i class="fa-solid fa-lightbulb" id="bd-theme-text"></i>
                            </button>
                            <ul class="dropdown-menu shadow" aria-labelledby="bd-theme-text">
                                <li><button class="dropdown-item" type="button" data-bs-theme-value="light" aria-pressed="false"><i class="fa-solid fa-sun me-2"></i>Jasno</button></li>
                                <li><button class="dropdown-item" type="button" data-bs-theme-value="dark" aria-pressed="false"><i class="fa-solid fa-moon me-2"></i>Ciemno</button></li>
                                <li><button class="dropdown-item" type="button" data-bs-theme-value="auto" aria-pressed="false"><i class="fa-solid fa-circle-half-stroke me-2"></i>Auto</button></li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </header>
        </div>
    </section>
    <!--END NAV-->
    <!--UP-->
    <section class="fixed-top d-flex d-lg-none" style="left:auto;right:1em;top:auto;bottom:1em">
        <div>
            <a href="#slider" class="badge rounded-pill bg-primary fs-4 p-3 border border-2 shadow"><i class="fa-solid fa-chevron-up text-white"></i></a>
        </div>
    </section>
    <!--END UP-->
    @yield('content')
    <!--FOOTER-->
    <footer class="footer mt-5 py-3 bg-black text-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>© 2022 Designed by Karol Wiśniewski</div>
                    <div class="font-anton">All rights reserved</div>
                </div>
            </div>
        </div>
    </footer>
    <!--END FOOTER-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>