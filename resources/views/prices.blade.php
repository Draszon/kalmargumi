@extends('layouts.main')

@section('title', 'Áraink')

@section('content')
<div class="title-wrapper">
    <h1 class="main-title">Áraink</h1>
</div>

<div class="divider">
    <img src="{{ asset('images/index_section/divider.svg') }}" alt="szekció határoló">
</div>

<section class="section prices-section">
    <div class="wrapper prices-wrapper">
        
        @foreach ($categories as $category)
            <div class="rim-fitting-container">
                <div class="title-container">
                    <h4 class="prices-table-title">{{ $category->name }}</h4>
                </div>
                
                @foreach ($category->wheelsService as $services)
                    <div class="prices-row">
                        <p class="services-name">{{ $services->name }}</p>
                        <p class="services-prices">{{ $services->price . ' ' . $services->unit }}</p>
                    </div>
                @endforeach

            </div>
        @endforeach

        <div class="service-info-container">
            <p>A nálunk vásárolt gumiabroncsnál a hulladékkezelési költséget nem számoljuk fel. Áraink az ÁFA-t tartalmazzák!</p>
            <!--<p>A szerelés ára a szelepet nem tartalmazza!</p>-->
            <p>A szerelés ára a felhasznált súlyokat nem tartalmazza!</p>
        </div>
    </div>
</section>
@endsection