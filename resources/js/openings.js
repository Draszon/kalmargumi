"user strict";

async function getOpening() {
    try {
        const response = await fetch('/getopenings');
        if (!response.ok) throw new Error ('Hálózati probléma!');
        return await response.json();
    } catch (error) {
        console.log('Hiba történt az nyitvatartási adatok lekérdezése közben: ', error);
    }
}



document.addEventListener("DOMContentLoaded", async() => {

});