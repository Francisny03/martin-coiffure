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


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "votre.email@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message du formulaire de contact";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
    