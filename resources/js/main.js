"use strict";

document.addEventListener("DOMContentLoaded", () => {
    //footer évszám megjelenítése
    const dateElement = document.getElementById("footer-date");
    
    if (dateElement) {
        const date = new Date();
        dateElement.innerHTML = date.getFullYear();
    }

    //mobil nézet menüje
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const mobileNav = document.querySelector('.mobile-nav-wrapper');
    const mobileMenus = document.querySelectorAll('.nav-toggleopen');

    if (hamburgerIcon) {
        const toggleMenu = () => {
           mobileNav.classList.toggle('open');
        }

        hamburgerIcon.addEventListener("click", toggleMenu);
        mobileMenus.forEach(item => item.addEventListener("click", toggleMenu));
    }
});