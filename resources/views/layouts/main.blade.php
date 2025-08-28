<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="A Kalmár Gumiszerviz Kft Egerben gyors és profi gumiabroncs cserét, centírozást és gumiszerviz szolgáltatásokat kíná.">
    <meta name="keywords" content="gumiszerviz, gumiabroncs csere, centrírozás, Kalmár Gumiszerviz, Eger, téli gumi, nyári gumi">

    <meta property="og:title" content="Kalmár Gumiszerviz Kft – Eger">
    <meta property="og:description" content="Gyors és profi gumiabroncs csere, centrírozás és szerviz Egerbe a Kalmár Gumiszerviz Kft-nél.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.kalmargumi.hu">
    <meta property="og:image" content="https://www.kalmargumi.hu/images/cover.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title', 'Kalmár Gumiszerviz Kft')</title>
</head>
<body class="inter-text-font">
    <div class="header-navigation-wrapper">
        <div class="nav-logo">
            <img class="logo-image" src="{{ asset('images/nav_icons/tire_logo.png') }}" alt="logó gumi">
            <div class="logo-title">
                <p class="logo-main-title nunito-sans-title-font">Kalmár</p>
                <p class="logo-title nunito-sans-title-font">Gumiszerviz Kft</p>
            </div>
        </div>

        <div class="hamburger-icon">
            <img class="mobile-nav-icon" src="{{ asset('images/nav_icons/hamburger-menu.svg') }}" alt="hamburger menu ikon">
        </div>
    </div>
    <nav class="mobile-nav-wrapper">
        <ul>
            <li class="nav-item">főoldal</li>
            <li class="nav-item">szolgáltatások</li>
            <li class="nav-item">áraink</li>
            <li class="nav-item">rólunk</li>
            <li class="nav-item">kapcsolat</li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>