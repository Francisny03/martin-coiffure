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

const animateCSSOnScroll = (element, animation, festiveClass, duration = '11s', prefix = 'animate__', offset = 0) =>
    new Promise((resolve, reject) => {
        const animationName = `${prefix}${animation}`;
        const node = document.querySelector(element);

        // Fonction pour vérifier si l'élément est dans la vue du port.
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 - offset &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) + offset &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        // Fonction pour gérer le début de l'animation lorsqu'il est dans la vue du port.
        function startAnimationIfInViewport() {
            if (isElementInViewport(node)) {
                node.style.animationDuration = duration;
                node.classList.add(`${prefix}animated`, animationName, festiveClass);
                resolve('Animation started');
                window.removeEventListener('scroll', startAnimationIfInViewport);
            }
        }

        // Ajoute un écouteur d'événement pour le défilement qui déclenche l'animation lorsque l'élément est dans la vue du port.
        window.addEventListener('scroll', startAnimationIfInViewport);

        // Lorsque l'animation se termine, on nettoie les classes et résout la Promise.
        function handleAnimationEnd() {
            node.style.animationDuration = ''; // Réinitialiser la durée de l'animation
            node.classList.remove(`${prefix}animated`, animationName, festiveClass);
            resolve('Animation ended');
        }

        node.addEventListener('animationend', handleAnimationEnd, { once: true });

        // Déclenche l'animation immédiatement si l'élément est déjà dans la vue du port.
        startAnimationIfInViewport();
    });

// Utilisez la fonction animateCSSOnScroll avec une durée spécifiée (par exemple, '2s') pour animer la div avec la classe "bg_rose" et ajouter l'effet festif "festive_effect"
animateCSSOnScroll('.footer_items', 'fadeInUp', 'festive_effect', '2s', 'animate__', 100).then(() => {
    // Action à effectuer après la fin de l'animation (facultatif)
    console.log('Animation terminée');
});

// Utilisez la fonction animateCSSOnScroll avec une durée spécifiée (par exemple, '2s') pour animer la div avec la classe "user" et ajouter l'effet festif "festive_effect"
animateCSSOnScroll('.footer_item_center', 'fadeInUp', 'festive_effect', '2s', 'animate__', 100).then(() => {
    // Action à effectuer après la fin de l'animation (facultatif)
    console.log('Animation terminée');
});

  