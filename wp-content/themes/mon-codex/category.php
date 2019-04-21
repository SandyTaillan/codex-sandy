<!-- id des catégories-->
<!-- id de linux = 12-->
<!--id de developpement-web = 3-->
<?php
$post = $wp_query->post;
if (is_page('12')){
    include(TEMPLATEPATH.'/single-linux.php');
}elseif (is_page('3')){
    include (TEMPLATEPATH.'/single-developpement_web.php');
}else {
    include (TEMPLATEPATH.'/single-developpement_web.php');
} ?>
<p>Désolé, pas de page appropriée</p>
