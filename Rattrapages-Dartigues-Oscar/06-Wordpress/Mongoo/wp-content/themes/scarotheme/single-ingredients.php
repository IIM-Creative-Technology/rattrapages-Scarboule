<?php
// Template Name: Single Ingrédient


get_header();
?>

<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <div class="ingredient-content">
            <?php the_content(); ?>
            <div class="ingredient-content">
                <?php
                $couleur = get_field('couleur');
                $prix = get_field('prix');

                // Affiche les valeurs des champs ACF
                echo '<p>Couleur : ' . $couleur . '</p>';
                echo '<p>Prix : ' . $prix . '</p>';?>
            </div>
        </div>
        <?php
    }
} else {
    echo 'Aucun ingrédient trouvé.';
}

get_footer();
?>