@extends('layouts.main')

@section('content')
<section class="index-section-wrapper section">
    <div class="index-content">
        <img src="{{ asset("images/index_section/defekt.jpg") }}" alt="defekt">
        <div>
            <h2 class="home-service-title">Gyors és tartós abroncsjavítás, hogy újra biztonságban közlekedhessen! </h2>
            <p>Bármilyen típusú gumiabroncsot szakértő kezekkel javítunk, legyen szó kisebb sérülésről vagy komolyabb defektről. Mi gondoskodunk arról, hogy a javítás hosszú távon megbízható legyen, így nem kell aggódnia a biztonságos közlekedés miatt.</p>
        </div>
    </div>
    <div class="index-arrows">
        <img src="{{ asset("images/index_section/arrow-left.svg") }}" alt="arrow">
        <img src="{{ asset("images/index_section/arrow-right.svg") }}" alt="arrow">
    </div>
</section>

<div class="divider">
    <img src="{{ asset('images/index_section/divider.svg') }}" alt="szerkció határoló">
</div>

<section class="values-section-wrapper section">
    <div class="cards-wrapper">
        <div class="value-card">
            <h2 class="value-title">megbízhatóság</h2>
            <img src="{{ asset("images/values_section/shield.png") }}" alt="" class="value-logo">
        </div>
        <div class="value-card middle">
            <h2 class="value-title">gyorsaság</h2>
            <img src="{{ asset("images/values_section/lightning.png") }}" alt="" class="value-logo">
        </div>
        <div class="value-card">
            <h2 class="value-title">szakértelem</h2>
            <img src="{{ asset("images/values_section/tools.png") }}" alt="" class="value-logo">
        </div>
    </div>
    <p class="values-text">
        Cégünk többéves tapasztalattal áll az Ön rendelkezésére, hogy autója mindig biztonságosan és zökkenőmentesen közlekedhessen. A legmodernebb technológiával és szakértő csapattal végezzük el a gumiabroncsok cseréjét, javítását.
    </p>
</section>

<!--<section class="galery-section-wrapper section">
    <div class="photoes-wrapper">
        <img src="{{ asset("images/galery_background.jpg") }}" alt="galéria">
        <div class="galery-arrows">
            <img src="{{ asset("images/index_section/arrow-left.svg") }}" alt="arrow">
            <img src="{{ asset("images/index_section/arrow-right.svg") }}" alt="arrow">
        </div>
        <p class="galery-text">
            Galériánkban betekintést nyerhet abba, hogyan gondoskodunk ügyfeleink autóiról. Legyen szó gumicseréről, javításról vagy karbantartásról, nálunk minden a precizitásról és a minőségről szól.
        </p>
    </div>
</section>-->
@endsection