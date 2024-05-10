//script pour un slider, swiper
$(document).ready(function () {
    $('.slide').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
});



// Fonction pour vérifier si un élément est visible dans la fenêtre du navigateur
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Fonction pour ajouter la classe d'animation lorsqu'un élément est visible
function animateIfVisible() {
    var elements = document.querySelectorAll('.animate__fadeInUp');
    elements.forEach(function(element) {
        if (isElementInViewport(element)) {
            element.classList.add('animate__fadeInUp');
        }
    });
}

// Événement de défilement pour vérifier à nouveau lors du défilement
window.addEventListener('scroll', function() {
    animateIfVisible();
});

// Vérifier au chargement initial
animateIfVisible();

  