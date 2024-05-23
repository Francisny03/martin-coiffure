<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $name = htmlspecialchars($_POST['mail']);
    $name = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['textarea']);
    
    $to = "contact@martincoiffure.top"; // Remplacez par votre adresse e-mail
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