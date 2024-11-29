
// Fonction pour ouvrir une modale
function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

// Fonction pour fermer une modale
function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

// Gérer les clics sur les logos
document.querySelectorAll('.federation-logos a').forEach(function (logo) {
    logo.addEventListener('click', function (event) {
        event.preventDefault();
        const modalId = event.target.closest('a').getAttribute('href').replace('#', '');
        openModal(modalId);
    });
});

// Gérer les clics sur les boutons de fermeture
document.querySelectorAll('.close').forEach(function (closeButton) {
    closeButton.addEventListener('click', function () {
        const modalId = this.getAttribute('data-close');
        closeModal(modalId);
    });
});

// Fermer la modale quand on clique en dehors du contenu
window.onclick = function (event) {
    if (event.target.classList.contains('modal')) {
        event.target.style.display = 'none';
    }
}

