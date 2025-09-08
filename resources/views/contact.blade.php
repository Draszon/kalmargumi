@extends('layouts.main')

@section('title', 'Kapcsolat')

@section('content')
<div class="title-wrapper">
    <h1 class="main-title">Elérhetőségeink</h1>
</div>

<div class="divider">
    <img src="{{ asset('images/index_section/divider.svg') }}" alt="szekció határoló">
</div>

<section class="section">
    <div class="wrapper contacts-info-wrapper">
        <h3 class="section-title">Vegye fel velünk a kapcsolatot</h3>
        <div class="contacts-container">
            <div class="contacts">
                <div class="contact-wrapper">
                    <div class="info">
                        <img src="{{ asset('images/contacts/phone.png') }}" alt="telefon" class="contact-logo">
                        <p class="contact-text">06 36/560-231</p>
                    </div>
                    <p class="text">Telefonszámunkon azonnal elér minket, és munkatársaink készséggel állnak rendelkezésére minden kérdésében!</p>
                </div>
            </div>
            <div class="contacts">
                <div class="contact-wrapper">
                    <div class="info">
                        <img src="{{ asset('images/contacts/email.png') }}" alt="telefon" class="contact-logo">
                        <p class="contact-text">info@autogumiexpo.hu</p>
                    </div>
                    <p class="text">Írjon nekünk bizalommal, legyen szó időpontfoglalásról, ajánlatkérésről vagy általános érdeklődésről!</p>
                </div>
            </div>
            <div class="contacts">
                <div class="contact-wrapper">
                    <div class="info">
                        <img src="{{ asset('images/contacts/location.png') }}" alt="telefon" class="contact-logo">
                        <p class="contact-text">3300 Eger, Árpád út 39.</p>
                    </div>
                    <p class="text">Gumiszervizünk Eger szívében található, könnyen megközelíthető helyen, ahol mindig örömmel látjuk!</p>
                </div>
            </div>
            <div class="contacts">
                <div class="contact-wrapper">
                    <div class="info">
                        <img src="{{ asset('images/contacts/open.png') }}" alt="telefon" class="contact-logo">
                        <p class="contact-text">Nyitvatartás</p>
                    </div>
                    <p class="text">Telefonszámunkon azonnal elér minket, és munkatársaink készséggel állnak rendelkezésére minden kérdésében!</p>
                </div>
            </div>
        </div>
        
        <div class="map-container">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2675.2685710137052!2d20.370110676477807!3d47.89248686819213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47408d70cedfe749%3A0xf8ef6837c803e848!2sKalm%C3%A1r%20Gumiszerviz%20Kft.!5e0!3m2!1shu!2shu!4v1757309454854!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>
</section>

@endsection