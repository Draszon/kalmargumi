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
            @foreach ($aboutMePhotos as $aboutMePhoto)
                <img class="aboutme-photoes right" src="{{ asset('images/about_photos/' . $aboutMePhoto->path) }}" alt="rólunk képek">
            @endforeach
        </div>

        <div class="text-container containers">
            <p>{{ $aboutMe[0]->about }}</p>
        </div>
    </div>
</section>
@endsection