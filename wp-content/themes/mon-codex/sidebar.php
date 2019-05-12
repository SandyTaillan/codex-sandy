<nav id="sidebar">
<!--    <form role="search" method="get" id="searchform" action="http://example.com/">-->
<!--        <div><label class="screen-reader-text" for="s">Search for:</label>-->
<!---->
<!---->
<!--        </div>-->
<!--    </form>-->

<!--    --><?php //get_search_form() ?>
<!--    <div class="searform">-->
<!--        <form action="--><?php //echo site_url("/searchform.php"); ?><!--" method="POST" id="recherche">-->
<!--            <input type="text" name="recherche" id="recherche" placeholder="Rechercher...">-->
<!--            <input type="submit" value="recherche">-->
<!--        </form>-->
<!--    </div>-->
    <div id="sidebar-pub">
        <h3>Publicité</h3>
    </div>
        <div id="pub1A"></div>
    <nav id="categorie">
        <ul class="current_page_item">
            <?php wp_list_categories(array(
                'orderby'               => 'name',
                'order'                 => 'ASC',
                'depth'                 => 3,
                'style'                 => 'list',
                'hide_empty'            => 1,
                'use_desc_for_title'    => 1,
                'child_of'              => 0,
                'feed'                  => '',
                'feed_image'            => '',
                'exclude'               => '',
                'hierarchical'          => true,
                'title_li'              =>'<h3>' .__( "D'autres articles" ) . '</h3>'

                )); ?>
        </ul>
    </nav>
</nav>

