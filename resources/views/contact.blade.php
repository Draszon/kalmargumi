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

            @foreach ($contacts as $contact)
                <div class="contacts">
                    <div class="contact-wrapper">
                        <div class="info">
                            @switch($contact->type)
                                @case('phone')
                                    <img src="{{ asset('images/contacts/phone.png') }}" alt="telefon" class="contact-logo">
                                    @break
                                @case('mail')
                                    <img src="{{ asset('images/contacts/email.png') }}" alt="telefon" class="contact-logo">
                                    @break
                                @case('address')
                                    <img src="{{ asset('images/contacts/location.png') }}" alt="telefon" class="contact-logo">
                                    @break
                                @default
                            @endswitch
                            <p class="contact-text">{{ $contact->value }}</p>
                        </div>
                        <p class="text">{{ $contact->description }}</p>
                    </div>
                </div>
            @endforeach
            <div class="contacts opening">
                <div class="contact-wrapper">
                    <div class="info">
                        <img src="{{ asset('images/contacts/open.png') }}" alt="telefon" class="contact-logo">
                        <p class="contact-text">Nyitvatartás</p>
                    </div>
                    <div class="opening-hours">
                        <p>{{ $openingH[0]->day }}</p>
                        <p>{{ $openingH[0]->openinghour }}</p>
                        <p>{{ $openingH[1]->day }}</p>
                        <p>{{ $openingH[1]->openinghour }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="map-container">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2675.2685710137052!2d20.370110676477807!3d47.89248686819213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47408d70cedfe749%3A0xf8ef6837c803e848!2sKalm%C3%A1r%20Gumiszerviz%20Kft.!5e0!3m2!1shu!2shu!4v1757309454854!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        
    </div>
</section>

@endsection