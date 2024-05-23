<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars($_POST['prenom']);
    $mail = htmlspecialchars($_POST['mail']);
    $number = htmlspecialchars($_POST['number']);
    $ville = htmlspecialchars($_POST['ville']);
    $message = htmlspecialchars($_POST['textarea']);

    $to = "contact@martincoiffure.top"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact";
    $body = "Prenom: $prenom\nAdresse mail: $mail\nNumero de telphone: $number\n\nMessage:\n$message";
    $headers = "From: $mail";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
    
    header('Location: contact.php');
    exit();
}
?>