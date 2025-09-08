@extends('layouts.main')

@section('title', 'Rólunk')

@section('content')
<div class="title-wrapper">
    <h1 class="main-title">Rólunk</h1>
</div>

<div class="divider">
    <img src="{{ asset('images/index_section/divider.svg') }}" alt="szekció határoló">
</div>

<section class="section">
    <h3 class="section-title page-title">
        Történetünk az ügyfeleink biztonságával kezdődik
    </h3>

    <div class="content-wrapper wrapper">
        <div class="images containers">
            <img class="aboutme-photoes right" src="{{ asset('images/galery_background.jpg') }}" alt="rólunk képek">
            <img class="aboutme-photoes left" src="{{ asset('images/galery_background.jpg') }}" alt="rólunk képek">
            <img class="aboutme-photoes right" src="{{ asset('images/galery_background.jpg') }}" alt="rólunk képek">
        </div>

        <div class="text-container containers">
            <p>Szervizünk története 2010-ben kezdődött, amikor egy kis garázsból indultunk el azzal a céllal, hogy megbízható és megfizethető gumiszerviz szolgáltatásokat nyújtsunk helyi autósoknak. Az első években egyszerű szerszámokkal és hatalmas lelkesedéssel dolgoztunk azon, hogy ügyfeleink mindig elégedetten távozzanak. A kemény munka és az elkötelezettség meghozta gyümölcsét: 2015-ben sikerült bővítenünk a műhelyt, modern diagnosztikai eszközöket és professzionális gépeket vásároltunk. Ezzel lehetővé vált, hogy gyorsabban, pontosabban és még nagyobb ügyfélkörrel dolgozzunk. 2020-ra már több mint 2.000 ügyfél választott minket abroncscserére, futómű-beállításra vagy javításra. Ez az eredmény megerősített minket abban, hogy jó úton járunk. Azóta is folyamatosan fejlődünk, hogy ügyfeleink számára a legmagasabb színvonalú szolgáltatást nyújthassuk.</p>
        </div>
    </div>
</section>
@endsection