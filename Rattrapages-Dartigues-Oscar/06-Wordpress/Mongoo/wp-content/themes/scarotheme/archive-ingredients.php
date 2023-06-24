<?php


// Template Name: Archive Ingrédients

get_header();
//$terms = get_terms('ingredient-type');
//var_dump($terms);
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="GET">
    <select name="taxonomy-type">
        <option value="">Tous les types</option>
        <?php
        $terms = get_terms('ingredient-type');
        foreach ($terms as $term) {
            echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="Filtrer">
</form>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php
    }
} else {
    echo 'Aucun ingrédient trouvé.';
}

get_footer();


