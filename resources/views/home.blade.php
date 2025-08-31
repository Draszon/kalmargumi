@extends('layouts.main')

@section('content')
<div class="index-section-wrapper section">
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
</div>

<div class="divider">
    <img src="{{ asset('images/index_section/divider.svg') }}" alt="szerkció határoló">
</div>

<div class="values-section-wrapper section">
    <div class="cards-wrapper">
        <div class="value-card">
            <h2 class="value-title">megbízhatóság</h2>
            <img src="{{ asset("images/values_section/shield.png") }}" alt="" class="value-logo">
        </div>
        <div class="value-card">
            <h2 class="value-title">gyorsaság</h2>
            <img src="{{ asset("images/values_section/lightning.png") }}" alt="" class="value-logo">
        </div>
        <div class="value-card">
            <h2 class="value-title">szakértelem</h2>
            <img src="{{ asset("images/values_section/tools.png") }}" alt="" class="value-logo">
        </div>
    </div>
    <p class="values-text">
        Cégünk többéves tapasztalattal áll az Ön rendelkezésére, hogy autója mindig biztonságosan és zökkenőmentesen közlekedhessen. A legmodernebb technológiával és szakértő csapattal végezzük el a gumiabroncsok cseréjét, javítását, valamint a futómű-beállítást.
    </p>
</div>
@endsection