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
        @foreach ($services as $service)
            <div class="service">
                <div class="describe-section">
                    <h3 class="service-title">{{ $service->title }}</h3>
                    <p class="service-describe">{{ $service->content }}</p>
                    <a class="services-btn" href="{{ route('prices') }}">Áraink</a>
                </div>
                <div class="service-img">
                    <img src="{{ asset('images/services/' . $service->image) }}" alt="szervíz kép">
                </div>
            </div>            
        @endforeach
    </div>

    <div class="booking-wrapper">
        <div class="booking">
            <a href="http://idopontfoglalas.gumiszervizem.hu/booking/65" target="_blank">foglaljon időpontot most!</a>
        </div>
    </div>
</section>

@endsection