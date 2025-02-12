// script.js

function toggleDropdown() {
    const dropdown = document.querySelector('.dropdown');
    const arrow = document.querySelector('.arrow');

    // Basculer l'état du dropdown
    dropdown.classList.toggle('active');

    // Changer l'icône de la flèche
    if (dropdown.classList.contains('active')) {
        arrow.innerHTML = '<i class="fas fa-chevron-up"></i>'; // Flèche vers le haut
    } else {
        arrow.innerHTML = '<i class="fas fa-chevron-down"></i>'; // Flèche vers le bas
    }
}



// Fermer le menu déroulant si l'utilisateur clique ailleurs sur la page
window.onclick = function(event) {
    if (!event.target.matches('.user-icon') && !event.target.matches('.fa-user') && !event.target.matches('.fa-chevron-down')) {
        const dropdowns = document.getElementsByClassName("dropdown-content");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
};

