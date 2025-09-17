# Kalmár Gumiszerviz Kft. Weboldal

Ez a projekt egy kis gumiszerviz számára készült weboldal, amely Laravel keretrendszert használ. Az oldal célja, hogy dinamikusan kezelje a szolgáltatásokat, árakat, galériát és nyitvatartási adatokat, mindezt modern, reszponzív felületen.

---

## Főbb funkciók

- **Szolgáltatások kezelése:** Az összes szolgáltatás adatbázisból kerül betöltésre, kategóriák szerint rendezve, pl. abroncs csere, javítás, kerékszerelés stb.
- **Árak kezelése:** Az árak szintén adatbázisból töltődnek be, kategóriák szerint.
- **Galéria:** A képek a `public/images/services` mappából töltődnek be, és dinamikusan jelennek meg a galériában JavaScript segítségével.
- **Kapcsolat és nyitvatartás:** Adatbázisban tárolt elérhetőségek és nyitvatartási idők jelennek meg a Kontakt oldalon.
- **Reszponzív design:** A weboldal mobilbarát, a menü és a galéria is dinamikusan alkalmazkodik a képernyőhöz.
- **Admin felület:** Laravel beépített autentikációval a gyors adminisztrációhoz és adatok szerkesztéséhez.

---

## Technológiák

- Laravel 12
- PHP 8.4
- MariaDB
- CSS
- JS
- Vite build rendszer

---