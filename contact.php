<?php
include('include/header.php')
?>

<div class="slide_service_galerie slide_contact space_bottom">
    <div class="slide_filter_service">
        <div class="slide_text_service">
            <h1>Contactez-nous</h1>
        </div>
    </div>
</div>


<div class="description_text space_bottom">
    <p>Vous avez des questions ou souhaitez prendre rendez-vous ? Contactez-nous! L'équipe
        du salon Martin Coiffure est à votre écoute pour répondre à toutes vos demandes.
    </p>
</div>


<div class="write_us_all">
    <div class="write_items">
        <div class="write_left">
            <img src="Images/contact-pic2.jpg" alt="">
        </div>
        <div class="write_right">
            <div class="write_text">
                <p>Ecrivez-vous</p>
            </div>
            <form action="" method="get">
                <div class="write_rect">
                    <input class="prenom" type="text" name="prenom" id="nom" placeholder="Votre nom" required>
                    <input class="mail" type="e-mail" name="mail" id="mail" placeholder="Votre adresse mail" required>
                </div>
                <div class="write_rect">
                    <input class="number" type="text" name="number" id="number" placeholder="Votre numéro de téléphone"
                        required>
                    <input class="city" type="text" name="ville" id="ville" placeholder="Votre ville" required>
                </div>
                <div class="write_rect">
                    <textarea class="write_textarea2" name="textarea" id="textarea"
                        placeholder="Votre texte ici..."></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</div>
</div>



<?php
include('include/footer.php')
?>