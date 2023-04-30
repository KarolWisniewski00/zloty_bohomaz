@extends('layout.main')

@section('content')
<main>
    <!--HERO-->
    <section>
        <div id="slider" class="carousel slide shadow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="div-img-1">
                        <div class="container h-100">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h1 class="logo fs-7 p-2">Złoty Bohomaz</h1>
                                <p class="text-white p-0 py-3 m-0 font-anton">Pracownia Tatuażu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="div-img-2">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-md-6 h-100">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100 mx-auto" style="width:fit-content">
                                        @foreach($artists as $artist)
                                        <a href="{{$artist['url']}}" class="btn btn-primary mb-3 rounded-0 shadow px-3 py-1 w-100 btn-hover-{{$artist['hover']}}">
                                            <div class="d-flex align-items-center justify-content-start px-1">
                                                <div class="m-0 p-0 pe-2"><i class="fa-brands fa-instagram m-0 p-0 fs-1"></i></div>
                                                <div class="d-flex flex-column align-items-start justify-content-center ms-2 py-2">
                                                    <div class="card-header font-anton">{{$artist['name']}}<i class="fa-solid fa-{{$artist['icon']}} ms-2 color"></i></div>
                                                    <div class="card-body">
                                                        <h4 class="card-title">{{$artist['insta']}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
                    <i class="fa-solid fa-chevron-left fs-1"></i>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
                    <i class="fa-solid fa-chevron-right fs-1"></i>
                </button>
            </div>
    </section>
    <!--END HERO-->
    <!--ALBUM-->
    <section id="album">
        <div class="container">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">NASZE PRACE</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-gem"></i></div>
            </div>
            <hr>
            <div class="row">
                @for($x=1;$x<=12;$x++) <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0" data-bs-toggle="modal" data-bs-target="#tattoo-photo-{{$x}}"><img src="{{ asset('image/'.$x.'.jpg') }}" alt="tattoo-photo-{{$x}}" class="img-fluid shadow"></button>
                    <div class="modal fade" id="tattoo-photo-{{$x}}" tabindex="-1" aria-labelledby="tattoo-photo-{{$x}}-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/'.$x.'.jpg') }}" alt="tattoo-photo-{{$x}}" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Daniel<i class="fa-solid fa-star ms-2 text-warning"></i></p>
                                    <p class="text-muted m-0 p-0">@biszusedziara</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/biszusedziara?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-0">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <h4 class="fs-6 p-0 m-0"><i class="fa-solid fa-magnifying-glass me-2"></i>Podgląd</h4>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/biszusedziara?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-2">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Daniel<i class="fa-solid fa-star ms-2 color"></i></div>
                                                <h4 class="fs-6 p-0 m-0">@biszusedziara</h4>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-1">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Pracownia tatuażu <i class="fa-solid fa-house ms-2"></i></div>
                                                <h4 class="fs-6 p-0 m-0">@zloty.bohomaz</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
            </div>
            @endfor
        </div>
        </div>
    </section>
    <!--END ALBUM-->

    <!--ABOUT AS-->
    <section id="about" class="bg-black text-white">
        <div class="container">
            <hr style="color:#070606">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">NASZE STUDIO</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-crown"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <h1 class="my-5 text-center"><i class="fa-solid fa-spinner me-2"></i>W trakcie prac</h1>
                </div>
            </div>
        </div>
    </section>
    <!--END ABOUT AS-->
    <!--ABOUT ARTIST-->
    <section id="artist">
        <div class="container">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">ARTYŚCI</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-people-group"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    @foreach($artists as $artist)
                    @if($artist['id']!=1)
                    <div class="card mb-3 border-0 rounded-0">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <img alt="artist-{{$artist['name']}}" src="{{asset('asset/'.$artist['photo'])}}" class="img-fluid">
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card-header font-anton fs-1">{{$artist['name']}}<i class="fa-solid fa-{{$artist['icon']}} ms-2 {{$artist['name']}}"></i></div>
                                <div class="card-body">
                                    <h4 class="card-title">{{$artist['insta']}}</h4>
                                    <p class="card-text">{{$artist['p1']}}</p>
                                    <p class="card-text">{{$artist['p2']}}</p>
                                    <div class="d-flex flex-row align-items-start justify-content-start w-100">
                                        <a href="{{$artist['url']}}" class="btn btn-primary mb-3 rounded-0 shadow px-3 py-1 btn-hover-{{$artist['hover']}} me-2" style="size: 80%;">
                                            <div class="d-flex align-items-center justify-content-start px-1">
                                                <div class="m-0 p-0 pe-2"><i class="fa-brands fa-instagram m-0 p-0 fs-1"></i></div>
                                                <div class="d-flex flex-column align-items-start justify-content-center ms-2 py-2">
                                                    <div class="card-header font-anton p-0 m-0">{{$artist['name']}}<i class="fa-solid fa-{{$artist['icon']}} ms-2 color"></i></div>
                                                    <div class="card-body p-0 m-0">
                                                        <h4 class="card-title">{{$artist['insta']}}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--END ABOUT ARTIST-->
    <!--ABOUT PRICE-->
    <section id="price" class="bg-primary text-white">
        <div class="container">
            <hr style="color:#070606">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">WYCENA ORAZ PRJEKT</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-trophy"></i></div>
            </div>
            <hr>
            <div class="row text-center justify-content-center">
                <div class="col-md-3 p-3  position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">01</h2>
                    <p class="text-center fw-bold">Każdy tatuaż jest wyceniany indywidualnie cena zależy od</p>
                    <ul class="list-unstyled w-100">
                        <li class="mb-1">ilości godzin potrzebnych na wykonanie tatuażu</li>
                        <li class="mb-1">czasu potrzebnego na wykonanie projektu</li>
                        <li class="mb-1">ilości i powierzchni kolorów użytych w tatuażu</li>
                        <li class="mb-1">poziomu skomplikowania tatuażu</li>
                        <li class="mb-1">wielkości tatuażu</li>
                        <li class="mb-1">miejsca na ciele</li>
                    </ul>
                </div>
                <div class="col-md-3 p-3  position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">02</h2>
                    <p>Projekt tatuażu jest interpretacją wizualną artysty lub artysty wraz z studiem na podstawie opisu lub referencji klienta</p>
                </div>
                <div class=" col-md-3 p-3 position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">03</h2>
                    <p>Projekt tatuażu przedstawiony jest w dzień wykonania zabiegu</p>
                </div>
                <div class=" col-md-3 p-3 position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">04</h2>
                    <p>Tatuaże projektowane przez studio lub artystów objętę są prawami autorskimi. Kopiowanie jest zabronione</p>
                </div>
                <div class=" col-md-3 p-3 position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">05</h2>
                    <p>Tatuaż jest rzemiosłem artystycznym i efekt kończowy może różnić się od prezentowanrgo projektu</p>
                </div>
                <div class=" col-md-3 p-3 position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">06</h2>
                    <p>Artysta ma prawo do modyfikacji projektu w trakcie zabiegu jeżeli jego zdaniem jest to konieczne</p>
                </div>
                <div class=" col-md-3 p-3 position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">07</h2>
                    <p>Artysta może współpracować z innym artysą np. Właścicielem Studia przy tworzeniu projektu i jest on uznawany za współtwórcę przy równym podziale praw autorskich</p>
                </div>
                <div class=" col-md-3 p-3 position-relative" style="min-height: 7em;">
                    <h2 class="number font-anton">08</h2>
                    <p>Jeśli wymaga tego tatuaż, wykonywany projekt jest bezpłatny. Projekt stanowi własność autora i studia. W przypadku niedotrzymania terminu sesji bądź nierealizowania wyznaczonego projektu zabrania się przekazywania go osobom trzecim czy realizacji w innym studio - wszelkie nadużycia związane z projektem są naruszeniem praw autorskich z następstwem prawnym.</p>
                </div>
            </div>
        </div>
    </section>
    <!--END ABOUT PRICE-->
    <!--VOUCHER-->
    <section id="voucher">
        <div class="container">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">VOUCHER</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-tags"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 p-3 text-center">
                    <p class="fs-4">Vouchery można wykorzystać przy każdym tatuażu u artysty do którego bon został zakupiony i są ważne przez 6 miesięcy od daty zakupu</p>
                </div>
                <div class="col-12 p-3 text-center">
                    <p class="fs-4">Klient kupujący Voucher jest informowany, że nie wykorzystana kwota Vouchera przy usługach tatuatorskich przepada i studio nie ponosi za to odpowiedzialności</p>
                </div>
                <div class="col-12 p-3 text-center">
                    <p class="fs-4">Każdy klient, który posiada Voucher może dokonać dopłaty gotówkowej do droższej usługi tatuażu</p>
                </div>
            </div>
        </div>
    </section>
    <!--END VOUCHER-->
    <!--HEALTH-->
    <section id="health" class="bg-primary text-white">
        <div class="container">
            <hr style="color:#070606">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">GOJENIE</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-heart"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 p-3 text-center">
                    <p class="fs-4">Klient otrzymuje wskazówki dotyczące pielęgnacji tatuażu i zobowiązuje się do ich przestrzegania</p>
                </div>
                <div class="col-12 p-3 text-center">
                    <p class="fs-4">Wszelkie skargi po stwierdzeniu braku stosowania się do zaleceń tatuatora zostaną odrzucone, a poprawka takiego tatuażu będzie odpłatna</p>
                </div>
                <div class="col-12 p-3 text-center">
                    <p class="fs-4">Studio nie ponosi odpowiedzialności za konsekwencje nieprzestrzegania zasad pielęgnacji podczas procesu gojenia</p>
                </div>
            </div>
    </section>
    <!--END HEALTH-->
    <!--CONTACT-->
    <section id="contact">
        <div class="container">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">KONTAKT</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-address-book"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <iframe class="w-100 h-100" style="min-height:20em" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2545.8745700304244!2d18.91702386827318!3d50.35024480983486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x476b1e5d1e321be4!2sZ%C5%82oty%20Bohomaz%20Pracownia%20Tatua%C5%BCu!5e0!3m2!1spl!2spl!4v1659512722889!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex flex-column align-items-center justify-content-center mt-3" style="width:fit-content">
                                @foreach($artists as $artist)
                                <a href="{{$artist['url']}}" class="btn btn-primary mb-3 rounded-0 shadow px-3 py-1 w-100 btn-hover-{{$artist['hover']}}">
                                    <div class="d-flex align-items-center justify-content-start px-1">
                                        <div class="m-0 p-0 pe-2"><i class="fa-brands fa-instagram m-0 p-0 fs-1"></i></div>
                                        <div class="d-flex flex-column align-items-start justify-content-center ms-2 py-2">
                                            <div class="card-header font-anton">{{$artist['name']}}<i class="fa-solid fa-{{$artist['icon']}} ms-2 color"></i></div>
                                            <div class="card-body">
                                                <h4 class="card-title">{{$artist['insta']}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </li>
                        <li class="mb-3 d-flex flex-column align-items-center justify-content-center">
                            <h2 class="font-anton">Piłsudskiego 18</h2>
                            <p>Bytom</p>
                        </li>
                        <li class="mb-3 d-flex flex-column align-items-center justify-content-center">
                            <h2 class="font-anton">zloty.bohomaz@interia.pl</h2>
                            <a href="mailto: zloty.bohomaz@interia.pl" class="btn btn-primary rounded-0 shadow px-3 py-2 btn-hover-0"><i class="fa-solid fa-envelope me-3"></i>Napisz do nas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END CONTACT-->
</main>
@endsection