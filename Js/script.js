hamburger.onclick = () => {
    hamburger.classList.toggle("open");
    menu_nav.classList.toggle("menu_nav_slide");
}

// Fonction pour obtenir le nom de fichier sans l'extension et le chemin

function getCurrentPage() {
    const path = window.location.pathname;
    const page = path.split("/").pop();
    return page.split(".")[0];
}

// Fonction pour définir la classe active
function setActiveNav() {
    const currentPage = getCurrentPage();
    const navLinks = document.querySelectorAll('nav ul li a');

    navLinks.forEach(link => {
        const linkPage = link.getAttribute('href').split(".")[0];
        if (linkPage === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Appelez la fonction pour définir la classe active lors du chargement de la page
window.onload = setActiveNav;



document.getElementById('contactForm').addEventListener('submit', function (event) {
    event.preventDefault();
    var formData = new FormData(this);

    fetch('send-email.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(data => {
        alert('Message envoyé avec succès!');
    }).catch(error => {
        alert('Erreur lors de l\'envoi du message.');
    });
});
