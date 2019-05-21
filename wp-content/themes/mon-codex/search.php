<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
    <div id="container">
        <section id="section-principale">
            <p>Résultat de recherche pour le mot <?php echo get_search_query(); ?></p>
            <h2>
                <?php
                $count = $wp_query->found_posts;
                $several = ($count<=1) ? '' : 's'; //pluriel

                if ($count>0) : $output =  $count.' résultat'.$several.' pour la recherche';
                else : $output = 'Aucun résultat pour la recherche';
                endif;

                $output .= ' "<span class="terms_search">'. get_search_query() .'</span>"';

                echo $output;
                ?>
            </h2>
            <?php while(have_posts()) {
                the_post();
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('up-medium-true', array('class' => 'center shadow'));
                } ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
            } ?>
        </section>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
