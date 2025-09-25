"use strict";

async function getImages() {
    try {
        const response = await fetch('/getimage');
        if (!response.ok) throw new Error ('Hálózati hiba!');
        return await response.json();
    } catch (error) {
        console.log('Hiba a képek lekérdezése közben: ', error);
        return [];
    }
}

function renderImg(galery, direction = "right") {
    const galeryImage = document.getElementById('galery-img');

    if (galeryImage) {
        galeryImage.classList.remove('animate-slideInRight', 'animate-slideInLeft', 'animate-fadeAwayLeft');
        galeryImage.classList.add('animate-fadeAwayLeft');

        galeryImage.addEventListener('animationend', function handler() {
            galeryImage.removeEventListener('animationend', handler);

            // új kép előtöltése egy külön Image objektumba
            const newImg = new Image();
            newImg.src = '/images/galery/' + galery.image;

            newImg.onload = () => {
                // ha betöltött, lecseréljük a src-t
                galeryImage.src = newImg.src;

                // fade out class törlése
                galeryImage.classList.remove('animate-fadeAwayLeft');

                // és ekkor indítjuk a slide in-t
                if (direction === "right") {
                    galeryImage.classList.add('animate-slideInRight');
                } else {
                    galeryImage.classList.add('animate-slideInLeft');
                }
            };
        }, { once: true });
    }
}


document.addEventListener("DOMContentLoaded", async() => {
    const arrows = document.querySelectorAll('.galery-arrow');

    if (arrows) {
        let currentIndex = 0;
        const img = await getImages();
        renderImg(img[currentIndex], "right");

        arrows.forEach(btn => {
            btn.addEventListener('click', (e) => {
                const id = e.target.dataset.id;

                switch(id) {
                    case "1":
                        currentIndex--;
                        if (currentIndex <   0) {
                            currentIndex = img.length - 1;
                        }
                        renderImg(img[currentIndex], "left");
                        break;
                    case "2":
                        currentIndex++;
                        if (currentIndex > img.length - 1) {
                            currentIndex = 0;
                            }
                        renderImg(img[currentIndex], "right");
                        break;
                    default:
                        console.log("Hiba történt képváltás közben!");
                }
            });
        });
    }
});