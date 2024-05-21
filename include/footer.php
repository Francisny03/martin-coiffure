<!-- Script menu hamburger -->
<script>

</script>

<!-- swiper script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
const swiper = new Swiper('.swiper', {
    // Direction du défilement
    direction: 'horizontal', // horizontal pour les boutons next/prev

    // Activer le mode boucle pour que le défilement soit continu
    loop: true,

    // Autoplay
    autoplay: {
        delay: 5000, // délai entre chaque diapositive (en millisecondes)
        disableOnInteraction: false, // le défilement automatique ne s'arrête pas lors de l'interaction utilisateur
    },

    // Pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // Scrollbar (optionnel)
    scrollbar: {
        el: '.swiper-scrollbar',
    },

});
</script>

<!-- wow script -->
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
<script>
wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 230,
    mobile: true,
    live: true
})
new WOW().init();
</script>


</body>

</html>