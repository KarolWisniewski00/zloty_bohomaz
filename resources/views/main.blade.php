@extends('layouts.app')

@section('content')
<header>
    <!--NAVBAR-->
    <nav class="navbar navbar-dark bg-black navbar-expand-lg fixed-top">
        <div class="container justify-content-between">
            <a class="navbar-brand logo size-200 ml-1" href="/">Złoty Bohomaz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainmenu">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link" onclick='go_to("top")'>Start</a></li>
                    <li class="nav-item"><a class="nav-link" onclick='go_to("works")'>Prace</a></li>
                    <li class="nav-item"><a class="nav-link" onclick='go_to("studio")'>Studio</a></li>
                    <li class="nav-item"><a class="nav-link" onclick='go_to("artist")'>Artyści</a></li>
                    <li class="nav-item"><a class="nav-link" onclick='go_to("price")'>Wycena</a></li>
                    <li class="nav-item"><a class="nav-link" onclick='go_to("voucher")'>Voucher</a></li>
                    <li class="nav-item"><a class="nav-link" onclick='go_to("heal")'>Gojenie</a></li>
                    <li class="nav-item"><a class="nav-link" href="rules">Regulamin</a></li>
                    <li class="nav-item"><a class="nav-link" onclick='go_to("contact")'>Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--INSTA NAVBAR RIGHT-->
    <div class="fixed-r">
        <a href="https://www.instagram.com/zloty.bohomaz/"><img src="assets/ig-c.png" alt="instagram-icon"></a>
    </div>
    <!--INSTA NAVBAR RIGHT-->
    <div class="fixed-r d-md-none" id="up">
        <a onclick='go_to("top")'><img src="assets/up-arrow.png" alt="up-arrow-icon"></a>
    </div>
</header>

<main>
    <!--HEADER-->
    <section id="top">
        <div class="jumbotron text-light bg-img rounded-0 shadow">
            <div class="header col-md-6 offset-md-3 my-12 animation">
                <h1 class="display-1 logo py-5">Złoty Bohomaz</h1>
                <p class="my-2">Pracowania tatuażu</p>
            </div>
        </div>
    </section>
    <!--LAST WORKS-->
    <section id="works">
        <div class="container">

            <header>
                <span class="bg-icon"><img src="assets/diamond.png" alt="diamond"></span>
                <h1 class="my-5">NASZE PRACE</h1>
            </header>
            <hr class="my-4">
            <!--IMAGES-->
            <div class="row">
                @for ($x=1;$x<=12;$x++)
                <div class="col-sm-6 col-md-4 col-xl-3 mb-4">
                    <a href="https://www.instagram.com/zloty.bohomaz/"><img src="assets/{{$x}}.jpg" alt="tattoo{{$x}}"></a>
                </div>
                @endfor
            </div>

        </div>
    </section>
    <!--STUDIO-->
    <section id="studio" class="bg-black text-white">
        <div class="w-100">
            <hr>
        </div>
        <div class="container">
            <header>
                <span class="bg-icon"><img src="assets/tattoo-studio-w.png" alt="studio-icon"></span>
                <h1 class="my-5">NASZE STUDIO</h1>
            </header>
            <hr class="bg-white my-4">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 animation">
                    <h1>Pracownia</h1>
                    <p>Nasze studio znajduje się w Bytomiu. Jest otwarte od 11.01.2022 roku i nieprzerwanie prężnie się rozwija. Kochamy robić dziarki dlatego oddaliśmy mase pracy i całe nasze serca aby studio się otwarło.</p>
                    <p>Profesjonalne podejście pozwoliło nam zyskać ogromną gammę zadowolonych klientów i klientek. Do każdej osoby podchodzimy indywidualnie. Każdy tatuaż robimy najlepiej jak to możliwe, dzięki czemu uzyskujesz produkt którego oczekujesz!</p>
                </div>
                <div class="col-md-6 animation">
                    <div class="i-500">
                        <img src="assets/studio.jpeg" class="img-fluid" id="img-h" alt="photo-studio">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ARTIST-->
    <section id="artist">
        <div class="container">
            <header>
                <span class="bg-icon"><img src="assets/kastet.png" alt="kastet-icon"></span>
                <h1 class="my-5">ARTYŚCI</h1>
            </header>
            <hr class="my-4">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <span class="animation_no_move">
                        <div class="artist-p my-2">
                            <img src="assets/bisz.jpeg" alt="artist-bisz-photo">
                        </div>
                    </span>
                    <span class="animation">
                        <h2 class="my-4">Daniel</h2>
                        <p>Zaczął tatuować od razu po ukończeniu 19 roku życia. A że teraz będzie mieć 22 lata to mijają już za niedługo 3 lata od momentu zaczęcia swojej działalności. Jednak na otwarcie studia zdecydował się dopiero w tym roku w styczniu i jest jednym z młodszych założycieli studia tatuażu w Polsce. Ale jak widać był to dobry krok ze względu na ilość osób chętnych do niego na tatuaż.</p>
                        <p>Sam też mówi, że to wy klienci zbudowaliści to studio, poprzez zaufanie wasze do jego pracy. Cieszy się, że może dzielić sie swoją pasją z wami i tworzyć miejsce, w którym każdy będzie się czuł jak u siebie</p>
                        <div class="icon-artist container mb-2"><a href="https://www.instagram.com/biszusedziara/"><img src="assets/ig.png" alt="instagram-icon"></a></div>
                    </span>
                </div>
                <div class="col-lg-6">
                    <span class="animation_no_move">
                        <div class="artist-p my-2">
                            <img src="assets/ola.jpeg" alt="artist-ola-photo">
                        </div>
                    </span>
                    <span class="animation">
                        <h2 class="my-4">Ola</h2>
                        <p>Młoda tatuatorka, która swoje pierwsze kroczki związane z tatuażami stawiała w Tarnowskich Górach. Uwielbia cieniutkie tatuaże ale z chęcią poszerzy swoje horyzonty o większe dotworkowe prace</p>
                        <div class="icon-artist container mb-2"><a href="https://www.instagram.com/clim.tattoo/"><img src="assets/ig.png" alt="instagram-icon"></a></div>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <!--PRICE-->
    <section id="price" class="bg-black text-white">
        <div class="w-100">
            <hr>
        </div>
        <div class="container">
            <header>
                <span class="bg-icon"><img src="assets/tattoo-w.png" alt="tattoo-machine-icon"></span>
                <h1 class="my-5">WYCENA ORAZ PROJEKT</h1>
            </header>
            <hr class="bg-white my-4">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-3 p-3 price-h animation">
                    <h2 class="number">01</h2>
                    <p>Każdy tatuaż jest wyceniany indywidualnie cena zależy od:</p>
                    <ul class="list-unstyled">
                        <li>ilości godzin potrzebnych na wykonanie tatuażu</li>
                        <li>czasu potrzebnego na wykonanie projektu</li>
                        <li>ilości i powierzchni kolorów użytych w tatuażu</li>
                        <li>poziomu skomplikowania tatuażu</li>
                        <li>wielkości tatuażu</li>
                        <li>miejsca na ciele</li>
                    </ul>
                </div>
                <div class="col-md-3 p-3 price-h animation">
                    <h2 class="number">02</h2>
                    <p>Projekt tatuażu jest interpretacją wizualną artysty lub artysty wraz z studiem na podstawie opisu lub referencji klienta</p>
                </div>
                <div class=" col-md-3 p-3 price-h animation">
                    <h2 class="number">03</h2>
                    <p>Projekt tatuażu przedstawiony jest w dzień wykonania zabiegu</p>
                </div>
                <div class=" col-md-3 p-3 price-h animation">
                    <h2 class="number">04</h2>
                    <p>Tatuaże projektowane przez studio lub artystów objętę są prawami autorskimi. Kopiowanie jest zabronione</p>
                </div>
                <div class=" col-md-3 p-3 price-h animation">
                    <h2 class="number">05</h2>
                    <p>Tatuaż jest rzemiosłem artystycznym i efekt kończowy może różnić się od prezentowanrgo projektu</p>
                </div>
                <div class=" col-md-3 p-3 price-h animation">
                    <h2 class="number">06</h2>
                    <p>Artysta ma prawo do modyfikacji projektu w trakcie zabiegu jeżeli jego zdaniem jest to konieczne</p>
                </div>
                <div class=" col-md-3 p-3 price-h animation">
                    <h2 class="number">07</h2>
                    <p>Artysta może współpracować z innym artysą np. Właścicielem Studia przy tworzeniu projektu i jest on uznawany za współtwórcę przy równym podziale praw autorskich</p>
                </div>
                <div class=" col-md-3 p-3 price-h animation">
                    <h2 class="number">08</h2>
                    <p>Jeśli wymaga tego tatuaż, wykonywany projekt jest bezpłatny. Projekt stanowi własność autora i studia. W przypadku niedotrzymania terminu sesji bądź nierealizowania wyznaczonego projektu zabrania się przekazywania go osobom trzecim czy realizacji w innym studio - wszelkie nadużycia związane z projektem są naruszeniem praw autorskich z następstwem prawnym.</p>
                </div>
            </div>
        </div>
    </section>
    <!--VOUCHER-->
    <section id="voucher">
        <div class="container">
            <header>
                <span class="bg-icon"><img src="assets/voucher.png" alt="voucher-icon"></span>
                <h1 class="my-5">VOUCHER</h1>
            </header>
            <hr class="my-4">
            <div class="row no-gutters justify-content-center">
                <div class="col-12 p-3 animation">
                    <p>Vouchery można wykorzystać przy każdym tatuażu u artysty do którego bon został zakupiony i są ważne przez 6 miesięcy od daty zakupu</p>
                </div>
                <div class="col-12 p-3 animation">
                    <p>Klient kupujący Voucher jest informowany, że nie wykorzystana kwota Vouchera przy usługach tatuatorskich przepada i studio nie ponosi za to odpowiedzialności</p>
                </div>
                <div class="col-12 p-3 animation">
                    <p>Każdy klient, który posiada Voucher może dokonać dopłaty gotówkowej do droższej usługi tatuażu</p>
                </div>
            </div>
        </div>
    </section>
    <!--HEAL-->
    <section id="heal" class="bg-black text-white">
        <div class="w-100">
            <hr>
        </div>
        <div class="container">
            <header>
                <span class="bg-icon"><img src="assets/heart-w.png" alt="heal-icon"></span>
                <h1 class="my-5">GOJENIE</h1>
            </header>
            <hr class="my-4">
            <div class="row no-gutters justify-content-center">
                <div class="col-12 p-3 animation">
                    <p>Klient otrzymuje wskazówki dotyczące pielęgnacji tatuażu i zobowiązuje się do ich przestrzegania</p>
                </div>
                <div class="col-12 p-3 animation">
                    <p>Wszelkie skargi po stwierdzeniu braku stosowania się do zaleceń tatuatora zostaną odrzucone, a poprawka takiego tatuażu będzie odpłatna</p>
                </div>
                <div class="col-12 p-3 animation">
                    <p>Studio nie ponosi odpowiedzialności za konsekwencje nieprzestrzegania zasad pielęgnacji podczas procesu gojenia</p>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT-->
    <section id="contact">
        <div class="container">
            <header>
                <span class="bg-icon"><img src="assets/contact.png" alt="contact-icon"></span>
                <h1 class="my-5">KONTAKT</h1>
            </header>
            <hr class="my-4">
            <div class="row no-gutters justify-content-center">
                <div class="col-md-6 animation">
                    <!-- Google Map Copied Code -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2545.8745700304244!2d18.91702386827318!3d50.35024480983486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x476b1e5d1e321be4!2sZ%C5%82oty%20Bohomaz%20Pracownia%20Tatua%C5%BCu!5e0!3m2!1spl!2spl!4v1659512722889!5m2!1spl!2spl" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="col-md-6 animation">
                    <ul class="list-unstyled">
                        <li class="my-5">
                            <h2>Złoty Bohomaz</h2>
                            <p>Pracownia tatuażu</p>
                        </li>
                        <li class="my-5">
                            <h2>Piłsudskiego 23/2</h2>
                            <p>Bytom</p>
                        </li>
                        <li class="my-5">
                            <a href="mailto: zloty.bohomaz@interia.pl">
                                <h2>zloty.bohomaz@interia.pl</h2>
                                <p>Napisz do nas</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--FOOTER-->
    <footer class="footer mt-5 py-3 bg-black text-white">
        <div class="container">
            <div class="row ml-1">© 2022 Designed by Karol Wiśniewski</div>
            <div class="row ml-1">All rights reserved</div>
        </div>
    </footer>
</main>
@endsection