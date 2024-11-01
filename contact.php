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
            <form id="contactForm">
                <div class="write_rect">
                    <input class="prenom" type="text" name="prenom" id="nom" placeholder="Nom & Prénom" required>
                    <input class="mail" type="email" name="mail" id="mail" placeholder="Adresse mail" required>
                </div>
                <div class="write_rect write_space">
                    <input class="number" type="text" name="number" id="number" placeholder="Numéro de téléphone"
                        required>
                    <input class="city" type="text" name="ville" id="ville" placeholder="Votre ville">
                </div>
                <div class="write_rect">
                    <textarea class="write_textarea2" name="textarea" id="textarea" placeholder="Votre message ici..."
                        required></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
</div>


<?php
include('include/footer.php')
?>


<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    // var loading = document.getElementById('loading');

    // Afficher l'élément de chargement
    // loading.style.display = 'block';

    fetch('send-email.php', {
        method: 'POST',
        body: formData
    }).then(response => response.text()).then(data => {
        alert('Message envoyé avec succès!');
        // Masquer l'élément de chargement
        // loading.style.display = 'none';
        window.location.href = 'contact.php';
    }).catch(error => {
        loading.style.display = 'none';
        alert('Erreur lors de l\'envoi du message.');
        // Masquer l'élément de chargement
        // loading.style.display = 'none';
        window.location.href = 'contact.php';
    });
});
</script>