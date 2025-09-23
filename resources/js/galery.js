"user strict";

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
        galeryImage.src = '/images/galery/' + galery.image;
        galeryImage.classList.remove('slide-in-right', 'slide-in-left');
        void galeryImage.offsetWidth;

        if (direction === "right") {
            galeryImage.classList.add('slide-in-right');
        } else {
            galeryImage.classList.add('slide-in-left');
        }
    }
}

document.addEventListener("DOMContentLoaded", async() => {
    const arrows = document.querySelectorAll('.galery-arrow');

    if (arrows) {
        let currentIndex = 0;
        const img = await getImages();
        renderImg(img[currentIndex]);

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