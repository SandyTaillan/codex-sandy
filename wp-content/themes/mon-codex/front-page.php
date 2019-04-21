<!--front-page-->
<?php get_header(); ?>
<section id="front-page">
    <div id="front-image">
        <img class="shadow" src="<?php echo get_theme_file_uri('/img/informatique_ecran-1.jpg'); ?>"
             alt="image d'ordinateur">
    </div>
    <div id="text-presentation">
        <?php while(have_posts()){
            the_post();
            the_content();
        } ?>
    </div>
</section>
<?php get_footer(); ?>

