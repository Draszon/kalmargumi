@extends('layouts.main')

@section('title', 'Szolgáltatások')

@section('content')
<div class="title-wrapper">
    <h1 class="main-title">szolgáltatásaink</h1>
</div>

<div class="divider">
    <img src="{{ asset('images/index_section/divider.svg') }}" alt="szekció határoló">
</div>

<section class="services section">
    <div class="services-wrapper wrapper">
        <div class="service">
            <div class="describe-section">
                <h3 class="service-title">Abroncs csere</h3>
                <p class="service-describe">Szezonális abroncs cseréje gyorsan és precízen, hogy biztonságosan vezethessen télen és nyáron egyaránt. Akár defektes gumik cseréjét is vállaljuk, rövid határidővel.</p>
                <a class="services-btn" href="#">Áraink</a>
            </div>
            <div class="service-img">
                <img src="{{ asset('images/services/defekt.jpg') }}" alt="szervíz kép">
            </div>
        </div>

        <div class="service">
            <div class="describe-section">
                <h3 class="service-title">Abroncs javítás</h3>
                <p class="service-describe">Szúrt, repedt vagy kisebb sérüléseket szenvedett abroncsát szakszerűen megjavítjuk, hogy tovább használhassa.</p>
                <a class="services-btn" href="#">Áraink</a>
            </div>
            <div class="service-img">
                <img src="{{ asset('images/services/defekt.jpg') }}" alt="szervíz kép">
            </div>
        </div>

        <div class="service">
            <div class="describe-section">
                <h3 class="service-title">Gumihote</h3>
                <p class="service-describe">Abroncsai nálunk jó kezekben vannak: megfelelő körülmények között tároljuk őket, hogy mindig a legjobb állapotban kerülhessenek vissza autójára.</p>
                <a class="services-btn" href="#">Áraink</a>
            </div>
            <div class="service-img">
                <img src="{{ asset('images/services/defekt.jpg') }}" alt="szervíz kép">
            </div>
        </div>
    </div>

    <div class="booking-wrapper">
        <div class="booking">
            <a href="#">foglalj időpontot most!</a>
        </div>
    </div>
</section>

@endsection