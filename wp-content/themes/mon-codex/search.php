<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
    <div id="container">
        <section id="section-principale">
            <div id="recherche">
                <h2>Résultat de recherche</h2>
<!--                <p class="rechertext">--><?php //echo get_search_query(); ?><!--</p>-->
                <h3>
                    <?php
                    $count = $wp_query->found_posts;
                    $several = ($count<=1) ? '' : 's'; //pluriel
                    if ($count>0) : $output =  $count.' résultat'.$several.' pour la recherche';
                    else : $output = 'Aucun résultat pour la recherche';
                    endif;
                    $output .= ' "<span class="terms_search">'. get_search_query() .'</span>" :';
                    echo $output;
                    ?>
                </h3>
                    <?php while(have_posts()) { ?>
                        <div id="index-recherche">
                            <?php the_post();
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail', array('class' => 'center shadow'));
                            } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php if(has_excerpt()) {
                                the_excerpt(); // possible de mettre echo get_the_except()
                            } else {
                                echo wp_trim_words(get_the_content(), 25);
                            } ?>
                            <a class="couleurLien" href="<?php echo get_permalink(); ?>">Cliquez pour lire la suite ...</a>
                                <span></span><span></span><span></span><span></span><span></span><span></span>
                        </div>

                        <?php
                    } ?>
            </div>
        </section>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
