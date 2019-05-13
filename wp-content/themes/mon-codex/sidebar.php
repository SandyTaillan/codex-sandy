<div id="sidebar">
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
    <div class="github">

    </div>
</div>

