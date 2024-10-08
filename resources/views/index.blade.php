@extends('layout.main')
@section('meta')
<meta property="place:location:latitude" content="50.3503717" />
<meta property="place:location:longitude" content="18.917879641792297" />
<meta property="place:location:street" content="Piłsudskiego 18" />
<meta property="place:location:city" content="Bytom" />
<meta property="place:location:country" content="Poland" />
<meta property="og:site_name" content="Studio tatuażu Bytom - firma Złoty Bohomaz" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{route('index')}}" />

<title>Studio tatuażu Bytom - firma Złoty Bohomaz</title>
<meta property="og:title" content="Studio tatuażu Bytom - firma Złoty Bohomaz" />
<meta name="twitter:title" content="Studio tatuażu Bytom - firma Złoty Bohomaz" />

<meta name="description" content="Sprawdź najlepsze miejsce na tatuaż w Bytomiu! Studio tatuażu złoty bohomaz to idealne miejsce na zrobienie tatuażu.">
<meta property="og:description" content="Sprawdź najlepsze miejsce na tatuaż w Bytomiu! Studio tatuażu złoty bohomaz to idealne miejsce na zrobienie tatuażu." />
<meta name="twitter:description" content="Sprawdź najlepsze miejsce na tatuaż w Bytomiu! Studio tatuażu złoty bohomaz to idealne miejsce na zrobienie tatuażu." />
<meta name="description" content="Sprawdź najlepsze miejsce na tatuaż w Bytomiu! Studio tatuażu złoty bohomaz to idealne miejsce na zrobienie tatuażu.">

<meta name="keywords" content="złoty bohomaz,złoty bohomaz bytom,studio tatuażu bytom,studio tatuaży bytom,tatuaże bytom cennik,salon tatuażu bytom,profesjonalne studio tatuażu bytom,bytom studio tatuażu,studio tatuażu bytom piłsudskiego,tatuaż bytom,tatuaż damski bytom,tatuaże bytom,tatuowanie bytom,tatuażysta bytom,tattoo bytom">
@endsection('meta')
@section('content')
<main>
    <!--HERO-->
    <section id="top">
        <div id="slider" class="carousel slide shadow" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="div-img-1">
                        <div class="container h-100">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h1 class="logo fs-7 p-2">Złoty Bohomaz</h1>
                                <h2 class="text-white p-0 py-3 m-0 font-anton" style="font-size: 1em;">Studio tatuażu</h2>
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
                                        <a href="{{$artist['url']}}" class="btn btn-primary mb-2 rounded-0 shadow px-3 py-1 w-100 btn-hover-{{$artist['hover']}}">
                                            <div class="d-flex align-items-center justify-content-start px-1">
                                                <div class="m-0 p-0 pe-2"><i class="fa-brands fa-instagram m-0 p-0 fs-1"></i></div>
                                                <div class="d-flex flex-column align-items-start justify-content-center ms-2 py-2">
                                                    <div class="card-header font-anton">{{$artist['name']}}<i class="fa-solid fa-{{$artist['icon']}} ms-2 color"></i></div>
                                                    <div class="card-body">
                                                        <div class="card-title h4">{{$artist['insta']}}</div>
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
                <h2 class="my-5 font-anton h1">Zdjęcia</h2>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-gem"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-1" data-bs-toggle="modal" data-bs-target="#tattoo-photo-1">
                        <img src="{{ asset('image/tatuaz-1.jpg') }}" alt="tatuaż geometryczny na ręce" id="img-tattoo-photo-1" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-1" tabindex="-1" aria-labelledby="tattoo-photo-1-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-1.jpg') }}" alt="tatuaż geometryczny na ręce" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Daniel<i class="fa-solid fa-star ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@biszusedziara</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/biszusedziara?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-2">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Daniel<i class="fa-solid fa-star ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@biszusedziara</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-2" data-bs-toggle="modal" data-bs-target="#tattoo-photo-2">
                        <img src="{{ asset('image/tatuaz-2.jpg') }}" alt="tatuaż damski na nodze" id="img-tattoo-photo-2" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-2" tabindex="-1" aria-labelledby="tattoo-photo-2-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-2.jpg') }}" alt="tatuaż damski na nodze" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Daniel<i class="fa-solid fa-star ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@biszusedziara</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/biszusedziara?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-2">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Daniel<i class="fa-solid fa-star ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@biszusedziara</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-3" data-bs-toggle="modal" data-bs-target="#tattoo-photo-3">
                        <img src="{{ asset('image/tatuaz-3.jpg') }}" alt="tatuaż damski na ręce" id="img-tattoo-photo-3" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-3" tabindex="-1" aria-labelledby="tattoo-photo-3-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-3.jpg') }}" alt="tatuaż damski na ręce" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Daniel<i class="fa-solid fa-star ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@biszusedziara</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/biszusedziara?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-2">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Daniel<i class="fa-solid fa-star ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@biszusedziara</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-4" data-bs-toggle="modal" data-bs-target="#tattoo-photo-4">
                        <img src="{{ asset('image/tatuaz-4.jpg') }}" alt="mały tatuaż kwiatków na ręce" id="img-tattoo-photo-4" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-4" tabindex="-1" aria-labelledby="tattoo-photo-4-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-4.jpg') }}" alt="mały tatuaż kwiatków na ręce" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Ola<i class="fa-solid fa-heart ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@clim.tatoo</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/clim.tattoo?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-1">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Ola<i class="fa-solid fa-heart ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@clim.tatooa</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-5" data-bs-toggle="modal" data-bs-target="#tattoo-photo-5">
                        <img src="{{ asset('image/tatuaz-5.jpg') }}" alt="damski tatuaż na przedramieniu" id="img-tattoo-photo-5" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-5" tabindex="-1" aria-labelledby="tattoo-photo-5-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-5.jpg') }}" alt="damski tatuaż na przedramieniu" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Ola<i class="fa-solid fa-heart ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@clim.tatoo</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/clim.tattoo?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-1">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Ola<i class="fa-solid fa-heart ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@clim.tatooa</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-6" data-bs-toggle="modal" data-bs-target="#tattoo-photo-6">
                        <img src="{{ asset('image/tatuaz-6.jpg') }}" alt="damski tatuaż ryby" id="img-tattoo-photo-6" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-6" tabindex="-1" aria-labelledby="tattoo-photo-6-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-6.jpg') }}" alt="damski tatuaż ryby" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Ola<i class="fa-solid fa-heart ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@clim.tatoo</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/clim.tattoo?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-1">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Ola<i class="fa-solid fa-heart ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@clim.tatooa</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-7" data-bs-toggle="modal" data-bs-target="#tattoo-photo-7">
                        <img src="{{ asset('image/tatuaz-7.jpg') }}" alt="damski delikatny tatuaż pomiędzy piersiami" id="img-tattoo-photo-7" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-7" tabindex="-1" aria-labelledby="tattoo-photo-7-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-7.jpg') }}" alt="damski delikatny tatuaż pomiędzy piersiami" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Oliwia<i class="fa-solid fa-heart ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@przysta_tattoo</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/przysta_tattoo?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Oliwia<i class="fa-solid fa-heart ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@przysta_tattoo</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-8" data-bs-toggle="modal" data-bs-target="#tattoo-photo-8">
                        <img src="{{ asset('image/tatuaz-8.jpg') }}" alt="damski tatuaż motyli na przedramieniu" id="img-tattoo-photo-8" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-8" tabindex="-1" aria-labelledby="tattoo-photo-8-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-8.jpg') }}" alt="damski tatuaż motyli na przedramieniu" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Oliwia<i class="fa-solid fa-heart ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@przysta_tattoo</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/przysta_tattoo?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Oliwia<i class="fa-solid fa-heart ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@przysta_tattoo</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-9" data-bs-toggle="modal" data-bs-target="#tattoo-photo-9">
                        <img src="{{ asset('image/tatuaz-9.jpg') }}" alt="damski delikatny tatuaż kwiatka na przedramieniu" id="img-tattoo-photo-9" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-9" tabindex="-1" aria-labelledby="tattoo-photo-9-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-9.jpg') }}" alt="damski delikatny tatuaż kwiatka na przedramieniu" class="img-fluid">
                                    <p class="text-muted m-0 p-0 font-anton">Oliwia<i class="fa-solid fa-heart ms-2"></i></p>
                                    <p class="text-muted m-0 p-0">@przysta_tattoo</p>
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/przysta_tattoo?igshid=NTc4MTIwNjQ2YQ==" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-3">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Oliwia<i class="fa-solid fa-heart ms-2 color"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@przysta_tattoo</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-10" data-bs-toggle="modal" data-bs-target="#tattoo-photo-10">
                        <img src="{{ asset('image/tatuaz-10.jpg') }}" alt="tatuaż motyla na nodze" id="img-tattoo-photo-10" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-10" tabindex="-1" aria-labelledby="tattoo-photo-10-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-10.jpg') }}" alt="tatuaż motyla na nodze" class="img-fluid">
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-11" data-bs-toggle="modal" data-bs-target="#tattoo-photo-11">
                        <img src="{{ asset('image/tatuaz-11.jpg') }}" alt="duży tatuaż kwiatów" id="img-tattoo-photo-11" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-11" tabindex="-1" aria-labelledby="tattoo-photo-11-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-11.jpg') }}" alt="duży tatuaż kwiatów" class="img-fluid">
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
                <div class="col-6 col-md-4 col-xl-3 mb-4">
                    <!--IMAGE-->
                    <button type="button" class="p-0 m-0 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden  load-photo" id="button-tattoo-photo-12" data-bs-toggle="modal" data-bs-target="#tattoo-photo-12">
                        <img src="{{ asset('image/tatuaz-12.jpg') }}" alt="tatuaż róży na nadgarstku" id="img-tattoo-photo-12" class="img-fluid shadow">
                    </button>
                    <div class="modal fade" id="tattoo-photo-12" tabindex="-1" aria-labelledby="tattoo-photo-12-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 rounded-0">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('image/tatuaz-12.jpg') }}" alt="tatuaż róży na nadgarstku" class="img-fluid">
                                </div>
                                <hr>
                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                    <a href="https://instagram.com/zloty.bohomaz?igshid=YmMyMTA2M2Y=" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-4">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                <div class="font-anton" style="font-size: 0.8em;">Studio tatuażu<i class="fa-solid fa-house ms-2"></i></div>
                                                <div class="h4 fs-6 p-0 m-0">@zloty.bohomaz</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--END IMAGE-->
                </div>
            </div>
        </div>
    </section>
    <!--END ALBUM-->

    <!--ABOUT AS-->
    <section id="about" class="bg-black text-white">
        <div class="container">
            <hr style="color:#070606">
            <div class="text-center position-relative">
                <h1 class="my-5 font-anton">STUDIO TATUAŻU</h1>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-crown"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-xl-6 gsap">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 pb-5">
                        <div class="h1 font-anton">Pracownia tatuażu</div>
                        <p class="fs-4 text-center">Wracamy do was z czymś nowym! A konkretnie to studiem pod nowym adresem Piłsudskiego 18.</p>
                        <p class="fs-4 text-center">Ostatnie miesiące były ciężkie i kosztowały wiele nerwów, ale po odświeżeniu nowego lokalu, efekty pokazujemy na zdjęciach. Zdecydowaliśmy się na taki krok przez przestrzeń której w poprzednim lokalu było za mało.
                        <p class="fs-4 text-center">Na wsześniejszym studiu poznaliśmy niesamowite osoby jak i mamy dużo wspaniałych wspomnień szczególnie z wami, klientami.</p>
                        <p class="fs-4 text-center">Ruch ten miał na celu danie wam większej swobody u nas aby każdy miał swoją przestrzeń ale też chcieliśmy zachować w tym wszystkim efekt, że jak przychodzicie do nas to czujecie się jak u znajomych, a nie w miejscu gdzie wykonuje się daną usługę.</p>
                        <p class="fs-4 text-center">No i tak powstał Złoty Bohomaz w lepszym stylu! Chcemy się prz was rozwijać, czuć radość z pracy ale przede wszystkim pisać wspólną historię. Damy od nas wszystko co najlepsze, aby kolejne lata były wspaniałym przeżyciem dla każdego z was!
                        <p class="fs-4 text-center fw-bold">Dziękujemy że jesteście i bądźcie dalej z nami.</p>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 pb-5">
                        <div class="row">
                            @for($i = 1 ; $i <= 4 ; $i++) <div class="col-6">
                                <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                    <button type="button" class="p-0 m-0 mb-3 border-0 d-flex align-items-center justify-content-center bg-transparent overflow-hidden gsap" id="button-studio-photo-{{$i}}" data-bs-toggle="modal" data-bs-target="#studio-photo-{{$i}}">
                                        <img src="{{asset('image/zdjecie-studia-'.$i.'.jpg')}}" alt="zjęcie studia tatuażu w środku" id="img-studio-photo-{{$i}}" class="img-fluid shadow">
                                    </button>
                                    <div class="modal fade" id="studio-photo-{{$i}}" tabindex="-1" aria-labelledby="studio-photo-{{$i}}-label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content border-0 rounded-0">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{asset('image/zdjecie-studia-'.$i.'.jpg')}}" alt="zjęcie studia tatuażu w środku" class="img-fluid">
                                                </div>
                                                <hr>
                                                <div class="modal-footer d-flex flex-column align-items-start justify-content-center border-0" style="width:fit-content;">
                                                    <a href="{{$artists[0]['url']}}" class="btn btn-primary mb-3 rounded-0 shadow w-100 btn-hover-{{$artists[0]['hover']}}">
                                                        <div class="d-flex align-items-center justify-content-center">
                                                            <i class="fa-brands fa-instagram m-0 p-0"></i>
                                                            <div class="d-flex flex-column align-items-start justify-content-center ms-2">
                                                                <div class="font-anton" style="font-size: 0.8em;">{{$artists[0]['name']}}<i class="fa-solid fa-{{$artists[0]['icon']}} ms-2"></i></div>
                                                                <div class="h4 fs-6 p-0 m-0">{{$artists[0]['insta']}}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--END ABOUT AS-->
    <!--ABOUT ARTIST-->
    <section id="artist">
        <div class="container">
            <div class="text-center position-relative">
                <div class="h1 my-5 font-anton">ARTYŚCI</div>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-people-group"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    @foreach($artists as $artist)
                    @if($artist['id']!=1)
                    <div class="card mb-3 border-0 rounded-0 gsap">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <img alt="zdjęcie tatuatora lub tatuatorki" src="{{asset('asset/'.$artist['photo'])}}" class="img-fluid">
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="card-header font-anton fs-1">{{$artist['name']}}<i class="fa-solid fa-{{$artist['icon']}} ms-2 {{$artist['name']}}"></i></div>
                                <div class="card-body">
                                    <div class="h4 card-title">{{$artist['insta']}}</div>
                                    <div class="card-text pb-3">{{$artist['p1']}}</div>
                                    <div class="card-text pb-3">{{$artist['p2']}}</div>
                                    <div class="d-flex flex-row align-items-start justify-content-start w-100">
                                        <a href="{{$artist['url']}}" class="btn btn-primary mb-3 rounded-0 shadow px-3 py-1 btn-hover-{{$artist['hover']}} me-2" style="size: 80%;">
                                            <div class="d-flex align-items-center justify-content-start px-1">
                                                <div class="m-0 p-0 pe-2"><i class="fa-brands fa-instagram m-0 p-0 fs-1"></i></div>
                                                <div class="d-flex flex-column align-items-start justify-content-center ms-2 py-2">
                                                    <div class="card-header font-anton p-0 m-0">{{$artist['name']}}<i class="fa-solid fa-{{$artist['icon']}} ms-2 color"></i></div>
                                                    <div class="card-body p-0 m-0">
                                                        <div class="h4 card-title">{{$artist['insta']}}</div>
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
                <h2 class="my-5 font-anton h1">CENNIK</h2>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-trophy"></i></div>
            </div>
            <hr>
            <div class="row text-center justify-content-center">
                <div class="col-md-3 p-3  position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">01</div>
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
                <div class="col-md-3 p-3  position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">02</div>
                    <p>Projekt tatuażu jest interpretacją wizualną artysty lub artysty wraz z studiem na podstawie opisu lub referencji klienta</p>
                </div>
                <div class=" col-md-3 p-3 position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">03</div>
                    <p>Projekt tatuażu przedstawiony jest w dzień wykonania zabiegu</p>
                </div>
                <div class=" col-md-3 p-3 position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">04</div>
                    <p>Tatuaże projektowane przez studio lub artystów objętę są prawami autorskimi. Kopiowanie jest zabronione</p>
                </div>
                <div class=" col-md-3 p-3 position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">05</div>
                    <p>Tatuaż jest rzemiosłem artystycznym i efekt końcowy może różnić się od prezentowanego projektu</p>
                </div>
                <div class=" col-md-3 p-3 position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">06</div>
                    <p>Artysta ma prawo do modyfikacji projektu w trakcie zabiegu jeżeli jego zdaniem jest to konieczne</p>
                </div>
                <div class=" col-md-3 p-3 position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">07</div>
                    <p>Artysta może współpracować z innym artysą np. Właścicielem Studia przy tworzeniu projektu i jest on uznawany za współtwórcę przy równym podziale praw autorskich</p>
                </div>
                <div class=" col-md-3 p-3 position-relative gsap" style="min-height: 7em;">
                    <div class="h2 number font-anton">08</div>
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
                <div class="my-5 font-anton h1">VOUCHER</div>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-tags"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 p-3 text-center gsap">
                    <div class="fs-4 pb-3">Vouchery można wykorzystać przy każdym tatuażu u artysty do którego bon został zakupiony i są ważne przez 6 miesięcy od daty zakupu</div>
                </div>
                <div class="col-12 p-3 text-center gsap">
                    <div class="fs-4 pb-3">Klient kupujący Voucher jest informowany, że nie wykorzystana kwota Vouchera przy usługach tatuatorskich przepada i studio nie ponosi za to odpowiedzialności</div>
                </div>
                <div class="col-12 p-3 text-center gsap">
                    <div class="fs-4 pb-3">Każdy klient, który posiada Voucher może dokonać dopłaty gotówkowej do droższej usługi tatuażu</div>
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
                <div class="my-5 font-anton h1">GOJENIE</div>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-heart"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 p-3 text-center gsap">
                    <div class="fs-4 pb-3">Klient otrzymuje wskazówki dotyczące pielęgnacji tatuażu i zobowiązuje się do ich przestrzegania</div>
                </div>
                <div class="col-12 p-3 text-center gsap">
                    <div class="fs-4 pb-3">Wszelkie skargi po stwierdzeniu braku stosowania się do zaleceń tatuatora zostaną odrzucone, a poprawka takiego tatuażu będzie odpłatna</div>
                </div>
                <div class="col-12 p-3 text-center gsap">
                    <div class="fs-4 pb-3">Studio nie ponosi odpowiedzialności za konsekwencje nieprzestrzegania zasad pielęgnacji podczas procesu gojenia</div>
                </div>
            </div>
    </section>
    <!--END HEALTH-->
    <!--CONTACT-->
    <section id="contact">
        <div class="container">
            <div class="text-center position-relative">
                <div class="my-5 font-anton h1">KONTAKT</div>
                <div class="position-absolute top-50 start-50 translate-middle opacity-15 fs-7"><i class="fa-solid fa-address-book"></i></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6 gsap">
                    <iframe class="w-100 h-100" style="min-height:20em" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2545.8745700304244!2d18.91702386827318!3d50.35024480983486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x476b1e5d1e321be4!2sZ%C5%82oty%20Bohomaz%20Pracownia%20Tatua%C5%BCu!5e0!3m2!1spl!2spl!4v1659512722889!5m2!1spl!2spl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="col-md-6 gsap">
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
                                                <div class="card-title h4">{{$artist['insta']}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </li>
                        <li class="mb-3 d-flex flex-column align-items-center justify-content-center">
                            <address class="font-anton h2 gsap">Piłsudskiego 18 <br> Bytom</address>
                        </li>
                        <li class="mb-3 d-flex flex-column align-items-center justify-content-center">
                            <div class="font-anton h2">zloty.bohomaz@interia.pl</div>
                            <a href="mailto: zloty.bohomaz@interia.pl" class="btn btn-primary rounded-0 shadow px-3 py-2 btn-hover-0"><i class="fa-solid fa-envelope me-3"></i>Napisz do nas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END CONTACT-->
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    //DESING
    $(window).on("resize", function() {
        height = 1000000
        for (let index = 1; index <= 12; index++) {
            var imgHeight = $('#img-tattoo-photo-' + index).height();
            if (imgHeight < height) {
                height = imgHeight
            }
        }
        for (let index = 1; index <= 12; index++) {
            $('#button-tattoo-photo-' + index).height(height);
        }
    });
    //SCROLL TRIGGER
    gsap.registerPlugin(ScrollTrigger);

    function st(string) {
        const elements = document.querySelectorAll(string);
        elements.forEach(element => {
            gsap.fromTo(element.children, {
                opacity: 0,
                y: 100,
                scale: 0.8
            }, {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 1,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: element,
                    start: 'top 50%',
                    end: 'top 50%',
                }
            });
        });
    };

    st('#album .gsap');
    st('#about .gsap');
    st('#artist .gsap');
    st('#price .gsap');
    st('#health .gsap');
    st('#voucher .gsap');
    $(document).ready(function() {
        height = 1000000
        for (let index = 1; index <= 12; index++) {
            var imgHeight = $('#img-tattoo-photo-' + index).height();
            if (imgHeight < height) {
                height = imgHeight
            }
        }
        for (let index = 1; index <= 12; index++) {
            $('#button-tattoo-photo-' + index).height(height);
        }
    });
</script>
@endsection