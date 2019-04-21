<?php
/*
Template Name: category-linux
*/
//categorie Linux -> id = 2
?>
<?php get_header(); ?>
<div id="container">
    <section id="section-principale">
        <div class="description">
            <h2><?php echo get_the_category_by_ID(3); ?> </h2>
            <?php echo category_description('3'); ?>
        </div>
        <?php
        // le query pour n'avoir que les pages Linux
        $the_query = new WP_Query( array
            ( 'cat' => 3 )
        ); ?>
        <!--             La loop-->
        <?php if( $the_query->have_posts() ): ?>
            <!-- pagination here -->
            <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="articles-devweb">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('up-medium-true', array('class' => 'center shadow'));
                    } ?>
                    <h2><?php the_title(); ?></h2>
                    <div class="data-articles">
                    </div>
                    <?php if(has_excerpt()) {
                        the_excerpt(); // possible de mettre echo get_the_except()
                    } else {
                        echo wp_trim_words(get_the_content(), 25);
                    } ?>
                </div>
                <div class="separation">
                    <span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
            <?php endwhile; ?>
                <!-- pagination here -->
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php esc_html_e( 'Désolé, aucun article pour cette catégorie.' ); ?></p>
            <?php endif; ?>
    </section>
    <?php get_sidebar(); ?>
</div>
    <?php get_footer(); ?>
