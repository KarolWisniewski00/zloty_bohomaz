@extends('layouts.app')

@section('content')
<header>
    <!--NAVBAR-->
    <nav class="navbar navbar-dark bg-black navbar-expand-lg">
        <div class="container justify-content-between">
            <a class="navbar-brand logo size-200 ml-1" href="/">Złoty Bohomaz</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="mainmenu">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link" href="/">Start</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#works">Prace</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#studio">Studio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#artist">Artyści</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#price">Wycena</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#voucher">Voucher</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#heal">Gojenie</a></li>
                    <li class="nav-item"><a class="nav-link" href="rules">Regulamin</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#contact">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <!--RULES-->
    <section id="rules">
        <div class="container">
            <header>
                <span class="bg-icon"><img src="assets/documents.png" alt="rules-icon"></span>
                <h1 class="my-5">REGULAMIN</h1>
            </header>
            <hr class="my-4">
            <div class="row no-gutters justify-content-center">
                <div class="col-12 p-3">
                    <p>Klient decydując się na wykonanie tatuażu w studiu tatuażu Złoty Bohomaz zobowiązany do zapoznania się z treścią regulaminu studia, przec co akceptuje jego warunki.</p>
                </div>
                <div class="col-12 p-3">
                    <p>Studio wykonuje wszystkie zabiegi tylko osobom pełnoletnim. Osoba niepełnoletnia może zostać poddana zabiegowi wyłącznie za zgodą opiekuna prawnego</p>
                </div>
                <div class="col-12 p-3">
                    <p>Klient ma obowiązek poinformować studio przed ustaleniem terminu sesji o wszelkich dolegliwościach/schorzeniach zdrowotnych, które w rezultacie mogą skutkować uniemożliwieniem wykonaia usługi tatuażu</p>
                </div>
                <div class="col-12 p-3">
                    <p>Posiadam świadomość, że powikłania wynikające z chorób skórnych przy usłudze tatuażu, studio nie ponosi odpowiedzialności z tego wynikającej</p>
                </div>
                <div class="col-12 p-3">
                    <p>Przed przystąpieniem do zabiegu każdy klient zobowiązany jest do wypełnienia oświadczenia: "Formularza dla klienta potwierdzającego zgodę na wykonanie tatuażu". Oświadczenie znajduje się w studio i klient wypełnia je przed sesją</p>
                </div>
                <div class="col-12 p-3">
                    <p>Studio nie wykonuje zabiegów osobom będącym pod wpływem alkoholu, narkotyków i innych środków odurzających</p>
                </div>
                <div class="col-12 p-3">
                    <p>Studio zapewnia sterylność używanych do zabiegu narzędzi i materiałów</p>
                </div>
                <div class="col-12 p-3">
                    <p>W studio obowiązuje bezwzględny zakaz dotykania przedmiotów służacych do wykonania tatuażu</p>
                </div>
                <div class="col-12 p-3">
                    <p>Zastrzegamy sobie prawa autorskie do wykonywanych zdjęć, projektów i tatuaży jak i do zdjęć naszych prac przesłanych przez klientów</p>
                </div>
                <div class="col-12 p-3">
                    <p>W pomieszczeniu zabiegowym, podczas wykonywania zabiegu nie mogą przebywać osoby towarzyszące</p>
                </div>
                <div class="col-12 p-3">
                    <p>Od 2020 roku zgodnie z wytycznymi sanepidu dla salonów tatuażu, osoby towarzyszące nie mogą także przebywać w poczekalni. Na umówiony tatuaż należy przychodzić samodzielnie</p>
                </div>
                <div class="col-12 p-3">
                    <p>W studiu obowiązuje całkowity zakaz palenia tytoniu oraz spożywania alkoholu lub innych środków odurzających</p>
                </div>
                <div class="col-12 p-3">
                    <p>Zabrania się przyprowadzania zwierząt</p>
                </div>
                <div class="col-12 p-3">
                    <p>W przypadku gdy tatuaż wymaga zdjęcia ubrania klient ma prawo prosić o wydzielenie stanowiska za pomocą parawanu. W związku z koniecznością odpowiedniego napięcia skóry, w miejscu tatuażu, artysta ma prawo zażądać odsłonięcia większej części ciała lub zdjęcia danej części ubrania/bielizny aby poprawnie wykonać zabieg</p>
                </div>
                <div class="col-12 p-3">
                    <p>Materiały zużyte prz tatuażu, takie jak: igły, uchwyty do maszyn, kubeczki na tusz wraz z tuszem są utylizowane za pośrednictwem wyspecjalizowanej firmy zajmującej się odbiorem materiałów skażonych drobnoustrojami</p>
                </div>
            </div>
        </div>
    </section>
    <!--FOOTER-->
    <footer class="footer mt-5 py-3 bg-black text-white">
        <div class="container">
            <div class="row ml-1">© 2022 Created by Karol Wiśniewski</div>
            <div class="row ml-1">All rights reserved</div>
        </div>
    </footer>
</main>
@endsection