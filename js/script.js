// script.js

// Exemple de fonction pour montrer une alerte
function showAlert(message) {
    alert(message);
}

// pour la nav bar
document.addEventListener("DOMContentLoaded", function() {
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector("header nav ul");

    menuToggle.addEventListener("click", function() {
        navMenu.classList.toggle("visible");
    });
});

// // Afficher la vidéo correspondante lorsque l'étape est cliquée
// document.addEventListener("DOMContentLoaded", function() {
//     const videos = document.querySelectorAll(".video-container iframe");
//     const steps = document.querySelectorAll(".step");

//     steps.forEach((step, index) => {
//         step.addEventListener("click", function() {
//             // Masquer toutes les vidéos
//             videos.forEach(video => {
//                 video.style.display = "none";
//             });

//             // Afficher la vidéo correspondant à l'étape cliquée
//             videos[index].style.display = "block";
//         });
//     });
// });

const burger = document.querySelector('.burger');
const nav = document.querySelector('nav ul');

burger.addEventListener('click', () => {
    burger.classList.toggle('toggle');
    nav.classList.toggle('visible');
});

