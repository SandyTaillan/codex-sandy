<?php get_header();?>
    <div id="container">
        <section id="section-principale">
            <h2>Cet article est dans la catégorie Linux</h2>
            <?php while(have_posts()) {
                the_post();
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium');
                } ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content();
            } ?>
        </section>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>
