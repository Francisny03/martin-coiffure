<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- wow animate_animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- swiper, slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="CSS/style.css?<?= rand() ?>">
    <link rel="stylesheet" href="CSS/phone.css?<?= rand() ?>">
    <title>Martin Coiffure</title>
</head>

<body>
    <header>
        
        <nav class="nav_bar space">
            <div class="logo_container">
                <a href="index.php">
                    <img src="Images/logo_martin.png" alt="logo Martin Coiffure">
                    <p>Martin Coiffure</p>
                </a>
            </div>

            <ul class="menu_nav space" id="menu_nav">
                <li class="btn_nav active"><a href="index.php">Accueil</a></li>
                <li class="btn_nav"><a href="conseils.html">Services</a></li>
                <li class="btn_nav"><a href="divers.html">Galerie</a></li>
                <li class="btn_nav"><a href="#about">A propos</a></li>
                <li class="btn_nav"><a href="contact.html">Contact</a></li>
            </ul>

            <div class="menu_hamburger" id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <!-- <div class="menu_hamburger">
                <i class="fa-solid fa-bars-staggered"></i>
            </div> -->

        </nav>
    </header>