<?php try {
    $conn = new PDO('mysql:host=localhost;dbname=martin_coiffure;charset=utf8', "root", "");
    //$conn = new PDO('mysql:host=localhost;dbname=u940744937_martincoiffure;charset=utf8', 'u940744937_martin', '0jIy0E3|2&mE');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}