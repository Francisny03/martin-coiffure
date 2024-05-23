<?php
// Étape 1 : Créer le Formulaire HTML
// Créez un fichier HTML pour votre formulaire. Par exemple, formulaire.html :
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de Contact</title>
    </head>
    <body>
        <form id="contactForm">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br><br>
            
            <button type="submit">Envoyer</button>
        </form>
    
        <script>
            document.getElementById('contactForm').addEventListener('submit', function(event) {
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
        </script>
    </body>
</html>



    