"use strict";

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
    const telephone = document.getElementById("telephone");
    const email = document.getElementById("email");
    const address = document.getElementById("address");

    const monday = document.getElementById("monday");
    const mondayTime = document.getElementById("monday-time");
    const saturday = document.getElementById("saturday");
    const saturdayTime = document.getElementById("saturday-time");
    const sunday = document.getElementById("sunday");
    const sundayTime = document.getElementById("sunday-time");

    const data = await getOpening();

    telephone.textContent = data.contacts[0].value;
    email.textContent = data.contacts[1].value;
    address.textContent = data.contacts[2].value;

    monday.textContent = data.openings[0].day;
    mondayTime.textContent = data.openings[0].openinghour;

    saturday.textContent = data.openings[1].day;
    saturdayTime.textContent = data.openings[1].openinghour;

    sunday.textContent = data.openings[2].day;
    sundayTime.textContent = data.openings[2].openinghour;
});