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

    <link rel="icon" type="image/x-icon" href="{{ asset('images/tab-icon.svg') }}">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

    <title>@yield('title', 'Kalmár Gumiszerviz Kft')</title>
</head>
<body class="inter-text-font">
    <div class="nav-section">
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

            <nav class="desktop-menu">
                <ul>
                    <li class="nav-item desktop-nav-item"><a href="{{ route('home') }}">főoldal</a></li>
                    <li class="nav-item desktop-nav-item"><a href="{{ route('services') }}">szolgáltatások</a></li>
                    <li class="nav-item desktop-nav-item"><a href="{{ route('prices') }}">áraink</a></li>
                    <li class="nav-item desktop-nav-item"><a href="{{ route('about') }}">rólunk</a></li>
                    <li class="nav-item desktop-nav-item"><a href="{{ route('contact') }}">kapcsolat</a></li>
                </ul>
            </nav>
        </div>        
    </div>

    <nav class="mobile-nav-wrapper">
        <ul>
            <li class="nav-item nav-border nav-toggleopen"><img class="mobile-menu-icon" src="{{ asset('images/nav_icons/home.svg') }}" alt="home button img"><a href="{{ route('home') }}">főoldal</a></li>
            <li class="nav-item nav-border nav-toggleopen"><img class="mobile-menu-icon" src="{{ asset('images/nav_icons/services.svg') }}" alt=""><a href="{{ route('services') }}">szolgáltatások</a></li>
            <li class="nav-item nav-border nav-toggleopen"><img class="mobile-menu-icon" src="{{ asset('images/nav_icons/price.svg') }}" alt=""><a href="{{ route('prices') }}">áraink</a></li>
            <li class="nav-item nav-border nav-toggleopen"><img class="mobile-menu-icon" src="{{ asset('images/nav_icons/aboutme.svg') }}" alt=""><a href="{{ route('about') }}">rólunk</a></li>
            <li class="nav-item nav-border nav-toggleopen"><img class="mobile-menu-icon" src="{{ asset('images/nav_icons/contact.svg') }}" alt=""><a href="{{ route('contact') }}">kapcsolat</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="section">
        <div class="footer-wrapper wrapper">
            <div class="contact-footer-container footer-section">
                <p class="footer-section-title">Elérhetőségek</p>
                <div class="contacts-footer">
                    <div class="contact">
                        <p>Telefon:</p>
                        <p id="telephone"></p>
                    </div>
                    <!--<div class="contact">
                        <p>Mobil</p>
                        <p id="mobile"></p>
                    </div>-->
                    <div class="contact">
                        <p>Email:</p>
                        <p id="email"></p>
                    </div>
                    <div class="contact">
                        <p>Címünk:</p>
                        <p id="address"></p>
                    </div>
                </div>
            </div>
            <div class="openings-footer-container footer-section middle">
                <p class="footer-section-title">Nyitvatartás</p>
                <div class="openings-footer">
                    <p id="monday"></p>
                    <p id="monday-time"></p>
                </div>
                <div class="openings-footer">
                    <p id="saturday"></p>
                    <p id="saturday-time"></p>
                </div>
                <div class="openings-footer">
                    <p id="sunday"></p>
                    <p id="sunday-time"></p>
                </div>
            </div>
            <div class="copyright-footer-container footer-section">
                <p>© <span id="footer-date"></span> Kalmár Gumiszervíz</p>
                <p>Minden jog fenntartva.</p>
                <p>Powered by <a target="_blank" href="https://webpeter.hu">Peter</a></p>
            </div>
        </div>
    </footer>
</body>
</html>