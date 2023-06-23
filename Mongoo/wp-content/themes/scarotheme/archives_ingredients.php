<?php


// Template Name: Archive Ingrédients

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        // Affichage des informations de l'ingrédient, par exemple le titre et les champs ACF
        the_title('<h2>', '</h2>');

        // Vous pouvez accéder aux champs ACF avec la fonction `get_field`
        $couleur = get_field('couleur');
        $prix = get_field('prix');

        // Affiche les valeurs des champs ACF
        echo '<p>Couleur : ' . $couleur . '</p>';
        echo '<p>Prix : ' . $prix . '</p>';
    }
} else {
    echo '<p>Aucun ingrédient trouvé.</p>';
}

get_footer();


