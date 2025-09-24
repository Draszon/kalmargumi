"use strict";

function render(data, type) {
    const customers = document.getElementById('customers');
    const repairs = document.getElementById('repairs');
    const years = document.getElementById('years');

    const formatted = (type !== "year") ? data.toLocaleString() : data;

    switch (type) {
        case "customer":
            customers.textContent = formatted + "+";
            break;
        case "repair":
            repairs.textContent = formatted + "+";
            break;
        case "year":
            years.textContent = formatted;
            break;
        default:
            console.log("Valami hiba történt!");
            break;
    }
}

function counter(steps, end, type) {
    let number = 0;
    const interval = setInterval(() => {
        number += steps;
        render(number, type);
        if (number >= end) {
            clearInterval(interval);
        }
    }, 20);
}

document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entriers) => {
        entriers.forEach(entry => {
            if (entry.isIntersecting) {
                counter(1000, 80000, "customer");
                counter(1000, 100000, "repair");
                counter(1, 35, "year");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll(".our-goals-wrapper").forEach((sec) => {
        observer.observe(sec);
    });
});