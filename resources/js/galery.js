"user strict";

async function getImages() {
    try {
        const response = await fetch('/getimage');
        if (!response.ok) throw new error ('Hálózati hiba!');
        return await response.json();
    } catch (error) {
        console.log('Hiba a képek lekérdezése közben: ', error);
        return [];
    }
}

document.addEventListener("DOMContentLoaded", () => {

});