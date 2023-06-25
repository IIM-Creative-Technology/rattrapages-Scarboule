<?php
// Template Name: Single Ingrédient


get_header();
?>

<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $couleur = get_field('couleur');
        ?>


            <div class="ingredient-content <?php echo $couleur?>">
                <div>
                    <h1><?php the_title(); ?></h1>
                    <?php

                    $prix = get_field('prix');

                    // Affiche les valeurs des champs ACF
                    echo '<p>Couleur : ' . $couleur . '</p>';
                    echo '<p>Prix : ' . $prix . '€</p>';?>
                    <button class="addbtn">Ajoutez à mon menu</button>
                </div>
                <img class="salade" src="<?php echo get_theme_file_uri()?>/img/salade.webp">
            </div>


        <?php
    }
} else {
    echo 'Aucun ingrédient trouvé.';
}

get_footer();
?>