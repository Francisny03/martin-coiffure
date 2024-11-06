console.log('etape1');

const hamburger = document.getElementById('hamburger');
const menuNav = document.getElementById('menuNav');

hamburger.onclick = () => {
    console.log('etape0');
    hamburger.classList.toggle("open");
    menuNav.classList.toggle("menu_nav_slide");
};

console.log('etape2');

// Fonction pour obtenir le nom de fichier sans l'extension et le chemin
function getCurrentPage() {
    const path = window.location.pathname;
    const page = path.split("/").pop();
    return page.split(".")[0];
}



console.log('etape3');

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

console.log('etape4');

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


console.log('etape7');


document.addEventListener("DOMContentLoaded", function () {
    // image viewer gallery
    document.querySelectorAll(".galerie_view_items img").forEach(function (img) {
        img.addEventListener("click", function () {
            document.getElementById("full-image").src = this.src;
            document.getElementById("image-viewer").style.display = "block";
        });
    });

    document.querySelector(".close").addEventListener("click", function () {
        document.getElementById("image-viewer").style.display = "none";
    });

    document.getElementById("image-viewer").addEventListener("click", function (event) {
        if (event.target === this) {
            this.style.display = "none";
        }
    });
});




console.log('etape6');

document.getElementById("myBtn").addEventListener("click", function () {
    document.getElementById("popup").style.display = "block";
});



function closePopup() {
    document.getElementById("popup").style.display = "none";
}



console.log('etape8');
