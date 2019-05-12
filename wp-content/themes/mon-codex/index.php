<?php get_header(); ?>
<div id="container">
    <section id="section-principale">
        <?php while(have_posts()){
            the_post();
            // check if the post has a Post Thumbnail assigned to it.
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('up-medium-true', array('class' => 'center shadow'));
            } ?>
            <h2><?php the_title(); ?></h2>
            <div class="data-articles">
                <p>
                    Cet article est dans la catégorie : <?php  echo get_the_category_list(' -> '); ?>
                </p>
            </div>
            <?php if(has_excerpt()) {
                the_excerpt(); // possible de mettre echo get_the_except()
            } else {
                echo wp_trim_words(get_the_content(), 25);
            } ?>
            <span class="couleurLien"><a href="<?php echo get_permalink(); ?>">Cliquez pour lire la suite ...</a></span>
            <div class="separation">
                <span></span><span></span><span></span><span></span><span></span><span></span>
            </div>
        <?php } ?>
    </section>
    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
