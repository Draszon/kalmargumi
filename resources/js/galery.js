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

function renderImg(galery) {
    const galeryImage = document.getElementById('galery-img');
    galeryImage.src = '/images/galery/' + galery.image;
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
                        if (currentIndex <= 0) {
                            currentIndex = img.length - 1;
                            renderImg(img[currentIndex]);
                        } else {
                            renderImg(img[currentIndex]);
                        }
                        break;
                    case "2":
                        currentIndex++;
                        if (currentIndex > img.length - 1) {
                            currentIndex = 0;
                            renderImg(img[currentIndex]);
                        } else {
                            renderImg(img[currentIndex]);
                        }
                        break;
                    default:
                        console.log("Hiba történt képváltás közben!");
                }
            });
        });
    }
});