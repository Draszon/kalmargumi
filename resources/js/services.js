"use strict";

//http kéréssel betölti az adatokat az adatbázisból
async function getServices() {
    try {
        const response = await fetch('/getservices');
        if (!response.ok) throw new Error ('Hálózati hiba');
        return await response.json();
    } catch (error) {
        console.log('Hiba történt szervizadatok lekérdezése közben!', error);
        return [];
    }
}

//megjeleníti az aktuálisan választott szerviztevékenységet
function renderServices(service, direction = "right") {
    const title = document.getElementById("main-service-title");
    const content = document.getElementById("main-service-content");
    const image = document.getElementById("service-img");
    const serviceWp = document.getElementById("service-wp");

    serviceWp.classList.remove('animate-slideInRight', 'animate-slideInLeft');
    void serviceWp.offsetWidth;

    if (direction === "right") {
        serviceWp.classList.add('animate-slideInRight');
    } else {
        serviceWp.classList.add('animate-slideInLeft');
    }

    title.textContent = service.title;
    content.textContent = service.content;
    image.src = '/images/services/' + service.image;
}

//DOM betöltése után alapértelmezetten betölti az első szerviztevékenységet
//utána pedig figyel a gombnyomásra és azok alapján a következőt tölti be
document.addEventListener("DOMContentLoaded", async() => {
    const serviceLeft = document.getElementById("service-left");
    const serviceRight = document.getElementById("service-right");

    if (serviceLeft && serviceRight) {
        const services = await getServices();
        let currentIndex = 0;

        if (services.length > 0) {
            renderServices(services[currentIndex], "right");
        }

        serviceRight.addEventListener("click", () => {
            currentIndex++;
            if (currentIndex >= services.length) {
                currentIndex = 0;
            }
            renderServices(services[currentIndex], "right");
        });

        serviceLeft.addEventListener("click", () => {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = services.length -1;
            }
            renderServices(services[currentIndex], "left");
        });        
    }
});