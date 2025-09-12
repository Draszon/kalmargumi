@extends('layouts.main')

@section('content')
<section class="index-section-wrapper section">
    <div class="index-content">
        <div class="section-img">
            <img id="service-img" src="" alt="defekt">
        </div>
        <div>
            <h2 class="home-service-title" id="main-service-title"></h2>
            <p id="main-service-content"></p>
        </div>
    </div>
    <div class="index-arrows">
        <img class="arrows" id="service-left" src="{{ asset("images/index_section/arrow-left.svg") }}" alt="arrow">
        <img class="arrows" id="service-right" src="{{ asset("images/index_section/arrow-right.svg") }}" alt="arrow">
    </div>
</section>

<div class="divider">
    <img src="{{ asset('images/index_section/divider.svg') }}" alt="szekció határoló">
</div>

<section class="values-section-wrapper section">
    <div class="cards-wrapper wrapper">
        <div class="value-card">
            <h2 class="value-title">megbízhatóság</h2>
            <img src="{{ asset("images/values_section/shield.png") }}" alt="" class="value-logo">
            <p>Szervizünkben mindig arra törekszünk, hogy ügyfeleink nyugodt szívvel bízzák ránk autójukat.</p>
        </div>
        <div class="value-card middle">
            <h2 class="value-title">gyorsaság</h2>
            <img src="{{ asset("images/values_section/lightning.png") }}" alt="" class="value-logo">
            <p>Rövid határidőkkel, rugalmas időpontokkal és gyors munkavégzéssel segítünk, hogy autója mielőbb újra úton lehessen.</p>
        </div>
        <div class="value-card">
            <h2 class="value-title">szakértelem</h2>
            <img src="{{ asset("images/values_section/tools.png") }}" alt="" class="value-logo">
            <p>Több éves tapasztalattal és modern technológiákkal biztosítjuk a legjobb megoldást minden helyzetben.</p>
        </div>
    </div>
</section>

<section class="galery-section-wrapper section">
    <div class="photoes-wrapper wrapper">
        <div class="section-img">
            <img id="galery-img" src="" alt="galéria képek">
        </div>
        <div class="galery-arrows">
            <img class="arrows galery-arrow" data-id="1" src="{{ asset("images/index_section/arrow-left.svg") }}" alt="nyilak">
            <img class="arrows galery-arrow" data-id="2" src="{{ asset("images/index_section/arrow-right.svg") }}" alt="nyilak">
        </div>
        <p class="galery-text">
            Galériánkban betekintést nyerhet abba, hogyan gondoskodunk ügyfeleink autóiról. Legyen szó gumicseréről, javításról vagy karbantartásról, nálunk minden a precizitásról és a minőségről szól.
        </p>
    </div>
</section>

<section class="tips-and-tricks-wrapper section">
    <div class="tips-wrapper wrapper">
        <h2 class="section-title">
            Hasznos tippek és tanácsok a biztonságos közlekedéshez
        </h2>
        <div class="tips-container">
            <div class="tip-wrapper">
                <h3 class="tip-title">Ellenőrizze a guminyomást rendszeresen</h3>
                <img class="tips-icon" src="{{ asset("images/tips/pump.png") }}" alt="pumpa">
                <p class="tips-description">
                    A megfelelő nyomás biztosítja az abroncs élettartamát és az autó üzemanyag-hatékonyságát.
                </p>
            </div>
            <div class="tip-wrapper">
                <h3 class="tip-title">Ne használjon különböző típusú gumikat</h3>
                <img class="tips-icon" src="{{ asset("images/tips/tire.png") }}" alt="pumpa">
                <p class="tips-description">
                    Az eltérő mintázatú vagy típusú gumik instabilitást okozhatnak, különösen nedves úton. Mindig azonos típusú abroncsokat használjon.
                </p>
            </div>
            <div class="tip-wrapper">
                <h3 class="tip-title">Ne várja meg a szezonváltás utolsó pillanatát!</h3>
                <img class="tips-icon" src="{{ asset("images/tips/season.png") }}" alt="pumpa">
                <p class="tips-description">
                    A szezonális gumicserék idején a műhelyek túlterheltek lehetnek, ezért időben foglaljon időpontot.
                </p>
            </div>
            <div class="tip-wrapper">
                <h3 class="tip-title">Végezzen alapos abroncsellenőrzést!</h3>
                <img class="tips-icon" src="{{ asset("images/tips/tire-wheels.png") }}" alt="pumpa">
                <p class="tips-description">
                    Ellenőrizze a barázdák mélységét és az abroncs oldalát, hogy nincsenek-e rajta repedések vagy kidudorodások.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="partners-wrapper section">
    <div class="partners-container wrapper">
        <h2 class="section-title">Partnereink</h2>
        <div class="partners">
            <img src="{{ asset("images/partners/bridgestone.png") }}" alt="partnerek" class="partner-img">
            <img src="{{ asset("images/partners/continental.png") }}" alt="partnerek" class="partner-img">
            <img src="{{ asset("images/partners/goodyears.png") }}" alt="partnerek" class="partner-img">
            <img src="{{ asset("images/partners/hankook.png") }}" alt="partnerek" class="partner-img">
            <img src="{{ asset("images/partners/michelin.png") }}" alt="partnerek" class="partner-img">
            <img src="{{ asset("images/partners/pirelli.png") }}" alt="partnerek" class="partner-img">
        </div>
    </div>
</section>

<section class="aboutme-wrapper section">
    <div class="about-me-container wrapper">
        <h2 class="section-title">Rólunk mondták</h2>
        <p class="aboutme-text" id="comment-content"></p>
        <p class="aboutme-writer" id="comment-author"></p>
    </div>
</section>

<section class="our-goals-wrapper section">
    <div class="our-goals-container wrapper">
        <div class="goals-card">
            <p class="counter">80.000+</p>
            <p>Elégedett ügyfél</p>
        </div>
        <div class="goals-card middle-card">
            <p class="counter">100.000+</p>
            <p>Javítások száma</p>
        </div>
        <div class="goals-card">
            <p class="counter">35 év</p>
            <p>Szakmai tapasztalat</p>
        </div>
    </div>
</section>
@endsection