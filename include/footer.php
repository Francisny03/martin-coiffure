<br>
<br>
<div class="footer">
    <div class="footer_items wow animate__animated animate__fadeInUp animated">
        <div class="footer_item_left">
            <h4>Nous <span class="text_color">suivre</span></h4>
            <div class="footer_icons">
                <a href="https://www.facebook.com/profile.php?id=100064104010472">
                    <div class="circle facebook">
                        <img src="Images/facebook.svg" alt="">
                    </div>
                </a>

                <a href="https://www.instagram.com/martincoiffure/">
                    <div class="circle insta">
                        <img src="Images/instagram.svg" alt="">
                    </div>
                </a>

                <a href="https://www.tiktok.com/@martincoiffure">
                    <div class="circle tiktok">
                        <img src="Images/tiktok.svg" alt="">
                    </div>
                </a>

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
                    <a
                        href="https://api.whatsapp.com/send?phone=%2B242066612033&context=ARD89EEUoSuYa4Ep1E6d3gR7OP0VIaWKMnGLahXn03sqJqUi1m7ifAZrP6Gw7Rrmo3O1PTG21mWr5_QhDtOSUGUWPwV8oAASo_2HLcM-OUHFx2Q2IeTWYH4h5Uy-vKJ7EhHqAAOQH0q9MR4ZlEmunLAA8A&source=FB_Page&app=facebook&entry_point=page_cta&fbclid=IwZXh0bgNhZW0CMTAAAR3CBzjaOVj945WrjvqW4WqZojPNCgxKAIed4Ts_AyRcxvxYs9UsFi77gVk_aem_AWaR-McLahJtN6JqKqC48CcTh2r7rY6K6ZZdiS-8CykcwfM1DxYADU9PxavMoUcGPywa-LmXY_ncxDkGaZrwpv5J">
                        <div class="circle whatsapp">
                            <img src="Images/whatsapp.svg" alt="">
                        </div>
                        <div class="contacter_number">
                            <p>+242 06 661 20 33</p>
                        </div>
                    </a>

                </div>
            </div>
        </div>

        <div class="footer_item_right">
            <h4>Notre <span class="text_color">Adresse</span></h4>
            <div class="footer_icons_column">
                <div class="contacter">
                    <a
                        href="https://www.google.com/maps/place/Martin+Coiffure/@-4.2558548,15.2852711,15z/data=!4m6!3m5!1s0x1a6a33eb2566048b:0x943f5bb80c9e814f!8m2!3d-4.2558548!4d15.2852711!16s%2Fg%2F11hzynf2s7?entry=ttu">
                        <div class="circle placeholder">
                            <img src="Images/placeholder.svg" alt="">
                        </div>
                        <div class="adress">
                            <p>127 rue Mbochis, poto-poto
                                Arrêt Madoukou
                            </p>
                        </div>
                    </a>

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