<?php
$taxonomy_type = '';
if (isset($_GET['taxonomy-type'])) {
    $taxonomy_type = sanitize_key($_GET['taxonomy-type']);

}

$terms = get_terms(array(
    'taxonomy' => 'ingredient-type',
    'hide_empty' => true,
));
get_header();
?>

<h1>Les articles pour ta salade composée</h1>
<form id="filter-ingredient" action="<?php echo esc_url(get_post_type_archive_link('ingredients')); ?>" method="POST">


    <select name="taxonomy-type">
        <option value="">Tous les types</option>
        <?php foreach ($terms as $term) : ?>

            <option value="<?php echo esc_attr($term->slug); ?>" <?php selected($term->slug, $taxonomy_type); ?>><?php echo esc_html($term->name); ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Filtrer">
</form>

<?php
// Récupérer les ingrédients filtrés en fonction du critère de taxonomie sélectionné
$args = array(
    'post_type' => 'ingredients',
    'posts_per_page' => -1,
    'paged' => get_query_var('paged'),
);


if (isset($_POST['taxonomy-type']) && !empty($_POST['taxonomy-type'])) {
    $taxonomy_type = sanitize_text_field($_POST['taxonomy-type']);


    $args['tax_query'] = array(
        array(
            'taxonomy' => 'ingredient-type',
            'field' => 'slug',
            'terms' => $taxonomy_type,
        ),
    );
}

$ingredients_query = new WP_Query($args);

if ($ingredients_query->have_posts()) {
    while ($ingredients_query->have_posts()) {
        $ingredients_query->the_post();
        $couleur = get_field('couleur');
        ?>
        <h2><a class="<?php echo $couleur?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php
    }
} else {
    echo 'Aucun ingrédient trouvé.';
}

wp_reset_query();


get_footer();
?>
