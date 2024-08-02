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



// let popup = document.getElementById("popup");

// function openPopup() {
//     popup.classList.add("open_popup");
//     document.body.style.overflow = "hidden"; // Empêcher le défilement de la page
// }

// function closePopup() {
//     popup.classList.remove("open_popup");
//     document.body.style.overflow = ""; // Permettre à nouveau le défilement de la page
// }


var modal = document.getElementById("popup");

var btn = document.getElementById("myBtn");

btn.onclick = function () {
    popup.style.display = "block";
}

function closePopup() {
    popup.style.display = "none";
}


console.log('JavaScript is loaded');