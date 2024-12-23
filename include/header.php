<?php
include('db.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Salon de coiffure & esthétique, centre de formation, décoration de voitures, make-up, confection de perruques">
    <meta name="keyword" content="salon, coiffure, make-up, esthétique, dame, femme, décoration, perruques">
    <meta property="og:image" content="https://martincoiffure.top/Images/logo_ref.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon 2  -->
    <link rel="apple-touch-icon" sizes="180x180" href="Images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Images/favicon/favicon-16x16.png">
    <link rel="manifest" href="Images/favicon/site.webmanifest">
    <link rel="mask-icon" href="Images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- wow animate_animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- swiper, slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TGS58WEBXD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TGS58WEBXD');
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/style.css?<?= rand() ?>">
    <link rel="stylesheet" href="CSS/phone.css?<?= rand() ?>">
    <script src="js/script.js?<?= rand() ?>" defer></script>
    <title>Martin Coiffure</title>
</head>

<body>
    <script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-app.js";
    import {
        getAnalytics
    } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
        apiKey: "AIzaSyDZJa8hqEiv5D7o_jkQGkYv_d_N-Dw3pPo",
        authDomain: "martin-coiffure.firebaseapp.com",
        projectId: "martin-coiffure",
        storageBucket: "martin-coiffure.appspot.com",
        messagingSenderId: "483251669801",
        appId: "1:483251669801:web:705725677b597664980538",
        measurementId: "G-S8GXLLZS9Y"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    </script>

    <header>
        <nav class="nav_bar space">
            <div class="logo_container">
                <a href="index.php">
                    <img src="Images/logo_martin.png" alt="logo Martin Coiffure">
                    <p>Martin Coiffure</p>
                </a>
            </div>

            <ul class="menu_nav space" id="menuNav">
                <li class="btn_nav"><a href="index.php">Accueil</a></li>
                <li class="btn_nav"><a href="service.php">Services</a></li>
                <li class="btn_nav"><a href="galerie.php">Galerie</a></li>
                <li class="btn_nav"><a href="index.php#about">A propos</a></li>
                <li class="btn_nav"><a href="contact.php">Contact</a></li>
            </ul>

            <div class="menu_hamburger" id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </nav>
    </header>