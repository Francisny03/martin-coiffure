<br>
<br>
<div class="footer">
    <div class="footer_items wow animate__animated animate__fadeInUp animated">
        <div class="footer_item_left">
            <h4>Nous <span class="text_color">suivre</span></h4>
            <div class="footer_icons">
                <div class="circle facebook">
                    <img src="Images/facebook.svg" alt="">
                </div>
                <div class="circle insta">
                    <img src="Images/instagram.svg" alt="">
                </div>
                <div class="circle tiktok">
                    <img src="Images/tiktok.svg" alt="">
                </div>
            </div>
        </div>
        <div class="footer_item_center">
            <h4>Nous <span class="text_color">Contacter</span></h4>
            <div class="footer_icons_column">
                <div class="contacter">
                    <div class="circle call">
                        <img src="Images/call.svg" alt="">
                    </div>
                    <div class="contacter_number">
                        <p>+242 06 661 20 33</p>
                        <p>05 570 56 80</p>
                    </div>
                </div>
                <div class="contacter">
                    <div class="circle whatsapp">
                        <img src="Images/whatsapp.svg" alt="">
                    </div>
                    <div class="contacter_number">
                        <p>+242 06 661 20 33</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_item_right">
            <h4>Notre <span class="text_color">Adresse</span></h4>
            <div class="footer_icons_column">
                <div class="contacter">
                    <div class="circle placeholder">
                        <img src="Images/placeholder.svg" alt="">
                    </div>
                    <div class="adress">
                        <p>127 rue Mbochis, poto-poto
                            Arrêt Madoukou
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="copyright_powered">
    <div class=" copyright">
        <p>Copyright © 2023 martin Coiffure</p>
    </div>
    <div class="powered">
        <p>Développé par Rêveurs professionnels & yashinka</p>
    </div>
</div>

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