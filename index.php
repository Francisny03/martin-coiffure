<?php
include('include/header.php');
$PDO = getConn();

$req_slider = "SELECT * FROM slider ORDER BY position ASC";
$stmt_slider = $PDO->prepare($req_slider);
$stmt_slider->execute();
$result_slider = $stmt_slider->fetchAll();


$req_galeries = "SELECT * FROM galeries ORDER BY position ASC";
$stmt_galeries = $PDO->prepare($req_galeries);
$stmt_galeries->execute();
$result_galeries = $stmt_galeries->fetchAll();

$id_galerie = 7;
$req_idgalerie = "SELECT images FROM galeries WHERE id_galerie = :id_galerie";
$stmt_idgalerie = $PDO->prepare($req_idgalerie);
$stmt_idgalerie->bindParam(':id_galerie', $id_galerie, PDO::PARAM_INT);
$stmt_idgalerie->execute();
$result_idgalerie = $stmt_idgalerie->fetchAll();

$req_services = "SELECT * FROM services ORDER BY position ASC";
$stmt_service = $PDO->prepare(query:$req_services);
$stmt_service->execute();
$result_services = $stmt_service->fetchAll();

?>



<!-- Slider main container -->
<div class="swiper space_bottom">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <?php
            foreach($result_slider as $results_sliders){
            ?>
        <div class="swiper-slide">
            <div class="slide_image">
                <img src="login/<?php echo $results_sliders["image"] ?>" alt="">
            </div>
            <div class="slide_filter">
                <div class="slide-text">
                    <h1><?php echo $results_sliders["titre"] ?></h1>
                    <h3><?php echo $results_sliders["description"] ?></h3>
                </div>
            </div>
        </div>
        <?php
            }
?>
    </div>


    <!-- If we need pagination -->
    <!-- <div class="swiper-pagination"></div> -->

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <!-- <div class="swiper-scrollbar"></div> -->
</div>

<div class="nos_services_bloc space space_bottom">
    <a href="service.php">
        <div class="text wow animate__animated animate__fadeInUp animated nos_services_title arrow">
            <p class="text wow animate__animated animate__fadeInUp animated form_bf_title service_title space">
                Nos services
            </p>
            <img src="Images/arrow.svg" alt="">
        </div>
    </a>
    <br>
    <div class="all_services">

        <div class="text wow animate__animated animate__fadeInUp animated nos_services_item">
            <?php
            foreach($result_services as $result_service){
            ?>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <div class="flip-card-front-image">
                            <img src="login/<?php echo $result_service["image1"] ?>" alt="">
                        </div>
                        <div class="flip-card-front-filter">
                            <div class="flip-card-front-text">
                                <p><?php echo $result_service["titre"] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card-back">
                        <img src="login/<?php echo $result_service["image2"] ?>" alt="">
                    </div>
                </div>
            </div>
            <?php
            }
        ?>
        </div>

    </div>

</div>


<div class="nos_services_bloc space space_bottom">
    <a href="galerie.php">
        <div class="text wow animate__animated animate__fadeInUp animated nos_services_title arrow">
            <p class="text wow animate__animated animate__fadeInUp animated form_bf_title service_title space">
                Nos réalisations
            </p>
            <img src="Images/arrow.svg" alt="">
        </div>
    </a>
    <br>
    <div class="all_services">
        <div class="text wow animate__animated animate__fadeInUp animated nos_services_item">
            <?php
            foreach($result_galeries as $results_galeries){
            ?>
            <div class="realisation">
                <a href="galerie_view.php?id=<?php echo $results_galeries["id_galerie"] ?>">
                    <div class="realisation_photo">
                        <img src="login/<?php echo $results_galeries["image"] ?>" alt="">
                    </div>
                    <div class="rectangle_noir">
                        <div class="rect_noir_text">
                            <p>
                                <?php echo $results_galeries["titre"] ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            }
        ?>
        </div>
    </div>
</div>


<div class=" nos_services_bloc space">
    <a href="galerie.php">
        <div class="text wow animate__animated animate__fadeInUp animated nos_services_title arrow">
            <p class="text wow animate__animated animate__fadeInUp animated form_bf_title service_title space">
                Galerie
            </p>
            <img src="Images/arrow.svg" alt="">
        </div>
    </a>
</div>
<br>
<div class=" slider_video">
    <div class="filter">
        <div class="slider_video_text">
            <p>Regarder nos vidéos sur notre chaîne Youtube</p>
            <div class="container wow animate__animated animate__pulse animated">
                <button type="submit" id="myBtn">
                    <img src="Images/play.svg" alt="" class="svg-color-change">
                </button>
                <!-- <a href="https://www.youtube.com/@martincoiffure9082"> -->
                <!-- </a> -->
            </div>
            <div class="popup" id="popup">
                <div class="popup_content">
                    <iframe src="https://www.youtube.com/embed/y41Dq_AI8x4?si=WIboyTZ-2xr_IRpW"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <button type="button" onclick="closePopup()">OK</button>
                </div>
                <!-- <button type="button"><a href="https://www.youtube.com/@martincoiffure9082">Visiter notre chaîne
                        Youtube</a></button> -->
            </div>
        </div>
    </div>
</div>
<br>

<div class="text wow animate__animated animate__fadeInUp animated galerie space space_bottom">
    <div class="galerie_photo">
        <?php
    foreach ($result_idgalerie as $result_idgaleries) {
        $galerieImages = json_decode($result_idgaleries["images"]);
        if (is_array($galerieImages)) {  // Check if decoding was successful
            foreach ($galerieImages as $imgs) {
                echo '<img src="login/' . htmlspecialchars($imgs, ENT_QUOTES, 'UTF-8') . '" alt="Image supplémentaire"> ';
            }
        } else {
            echo "No additional images available";
        }
    }
    ?>
    </div>
</div>


<div class="nos_services_bloc space" id="about">
    <div class="nos_services_title arrow">
        <p class="form_bf_title service_title space text wow animate__animated animate__fadeInUp animated">
            Mot du chef
        </p>
    </div>
</div>
<br>

<fieldset>
    <div class="chef_items space wow animate__animated animate__fadeInUp animated">
        <p>
            <img src="Images/chef2_coupe.png" class="pc">
        <div class="gradient">
            <img src="Images/chef2_coupe.png" class="phone">
        </div>
        <div class="chef_text">
            <div class="chef_text_grif_name">
                <div class="chef_text_griffes"></div>
                <div class="chef_text_name">Martin ITOUA</div>
            </div>
            <br>
            <div class="chef_text_bas">
                <p>La coiffure est notre passion, faire de votre instant coiffure un moment
                    de détente pour vous, une véritable pause, afin de vous rendre unique...
                    Nous attachons le plus grand soin à la qualité de nos services, nous
                    prenons le temps de vous écouter afin de vous proposer ce qu’il vous
                    conviendra le mieux en respectant votre personnalité.
                    Nous vous souhaitons la bienvenue au Salon Martin Coiffure...
                </p>
            </div>
        </div>
        </p>
    </div>
</fieldset>

<!--  -->

<?php
include('include/footer.php')
?>