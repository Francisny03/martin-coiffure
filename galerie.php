<?php
include('include/header.php');

$req_galeries = "SELECT * FROM galeries ORDER BY position ASC";
$stmt_galeries = $conn->prepare($req_galeries);
$stmt_galeries->execute();
$result_galeries = $stmt_galeries->fetchAll();
?>

<div class="slide_service_galerie slide_galerie space_bottom">
    <div class="slide_filter_service">
        <div class="slide_text_service">
            <h1>Galerie</h1>
        </div>
    </div>
</div>

<div class="description_text space_bottom">
    <p>Plongez dans l'univers du salon Martin Coiffure à travers notre galerie de
        réalisations. Admirez les transformations spectaculaires et les styles uniques
        realisés par notre équipe de professionnels.
    </p>
</div>


<div class="galerie_all_page">
    <?php foreach($result_galeries as $results_galeries): ?>
    <?php
            $imagesField = $results_galeries['images'];

            // Vérifiez si le champ 'images' est un tableau JSON vide ou une chaîne vide
            if (empty($imagesField) || $imagesField === '[]') {
                $imageCount = 0;
            } else {
                // Si le champ n'est pas vide, traiter les images comme un tableau
                $imagesArray = json_decode($imagesField, true);

                // Vérifiez si la décode a réussi et si c'est un tableau
                if (is_array($imagesArray)) {
                    $imageCount = count($imagesArray);
                } else {
                    // Si ce n'est pas du JSON valide, on revient à la méthode d'explosion par virgules
                    $imagesArray = array_filter(explode(',', $imagesField), function($value) {
                        return trim($value) !== '';
                    });
                    $imageCount = count($imagesArray);
                }
            }
        ?>
    <a href="galerie_view.php?id=<?php echo $results_galeries["id_galerie"] ?>">
        <div class="galerie_page_items">
            <img src="login/<?php echo $results_galeries["image"] ?>" alt="">
            <div class="galerie_page_badge"><?php echo $imageCount; ?></div>
            <div class="galerie_page_title"><?php echo $results_galeries["titre"] ?></div>
        </div>
    </a>
    <?php endforeach; ?>
</div>

<?php
include('include/footer.php')
?>