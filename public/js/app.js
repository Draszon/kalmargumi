"user strict";

document.addEventListener("DOMContentLoaded", () => {
    const dateElement = document.getElementById("footer-date");
    const hamburgerIcon = document.getElementById("hamburger-icon");
    const mobileNav = document.getElementById("mobile-nav");
    
    const date = new Date();
    dateElement.innerHTML = date.getFullYear();

    let isOpen = true;

    hamburgerIcon.addEventListener("click", () => {

        mobileNav.classList.toggle("open");

        /*if (isOpen) {
            mobileNav.style.display = "block"
            mobileNav.style.height = "250px";
            isOpen = false;
        } else {
            mobileNav.style.display = "none"
            mobileNav.style.height = "0px";
            isOpen = true;
        }*/
        
    });
});