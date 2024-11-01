<?php
include('include/header.php');
$PDO = getConn();
$id_galerie = $_GET['id'];

$req_galerie_view = "SELECT * FROM galeries WHERE id_galerie = :id_galerie";
$stmt_galerie_view = $PDO->prepare($req_galerie_view);
$stmt_galerie_view->bindValue(":id_galerie", $id_galerie, PDO::PARAM_INT);
$stmt_galerie_view->execute();
$galeries = $stmt_galerie_view->fetch();

?>

<div class="slide_service_galerie slide_galerie space_bottom">
    <div class="slide_filter_service">
        <div class="slide_text_service">
            <h1>Galerie</h1>
        </div>
    </div>
</div>


<div class="galerie_view_all_page">
    <?php
            $additionalImages = json_decode($galeries["images"]);
            foreach ($additionalImages as $img) {?>
    <div class="galerie_view_items">
        <img src="login/<?php echo $img ?> " alt="">
    </div>
    <?php }
        ?>

</div>

<div id="image-viewer">
    <span class="close">&times;</span>
    <img class="modal-content" id="full-image">
</div>


<?php
include('include/footer.php')
?>