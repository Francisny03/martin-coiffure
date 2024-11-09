<?php
include('include/header.php');

$req_services = "SELECT * FROM services ORDER BY position ASC";
$stmt_service = $conn->prepare(query:$req_services);
$stmt_service->execute();
$result_services = $stmt_service->fetchAll();
?>

<div class="slide_service_galerie slide_service space_bottom">
    <div class="slide_filter_service">
        <div class="slide_text_service">
            <h1>Services</h1>
        </div>
    </div>
</div>

<div class="description_text space_bottom">
    <p>Bienvenue chez Martin Coiffure, où nous mettons en avant votre beauté naturelle.
        Découvrez notre gamme complète de services.
    </p>
</div>

<div class="service_page_all">
    <?php
            foreach($result_services as $result_service){
            ?>
    <div class="service_page_items">
        <img src="login/<?php echo $result_service["image2"] ?>" alt="">
        <div class="service_page_items_text">
            <h1><?php echo $result_service["titre"] ?></h1>
            <p><?php echo $result_service["description"] ?>
            </p>
        </div>
    </div>
    <?php
            }
        ?>
</div>

<?php
include('include/footer.php')
?>