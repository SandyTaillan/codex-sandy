<!--header-->
<?php
// todo: mettre le titre du site en code Wordpress          ->>> Fait
// todo: mettre le slogan en code Wordpress                 ->>> fait
// todo: mettre le logo du site                             ->>> fait
// todo: modifier la couleur de font en gris/blanc          ->>> fait
//            idem pour la barre de navigation              ->>> fait
// todo: mettre le menu à l'horizontal                      ->>> fait
// todo: mettre l'image de l'ordinateur                     ->>> fait
// todo: mettre le texte de présentation                    ->>> fait
// todo: mettre le footer                                   ->>> fait
// todo: transformer le css en SASS                         ->>> fait
// todo: améliorer la font -> entre 15 et 25px (2)          ->>> fait
//              mettre h1 en 60 et h2 en 32 px              ->>> fait
//              line-spacing 120 à 150 %                    ->>> fait
//              45 à 90 caractère par ligne                 ->>> fait
// todo: Améliorer la font du menu                          ->>> fait
// todo: mettre les liens de la barre                       ->>> fait
//              de navigation à jour                        ->>> fait
// todo: Voir pour la hauteur de la barre u header          ->>> fait
// todo: rendre le css plus dynamique La barre nav          ->>> fait
// todo: Enjoliver l'image du front-page                    ->>> fait
// todo: créer la page Linux                                ->>> fait
// todo: créer la page développeur                          ->>> fait
// todo: créer la page index.php                            ->>> fait
// todo: créer le single.php                                ->>> fait
// todo: créer le page.php                                  ->>> fait
// todo: créer le 404.php                                   ->>> fait
// FIXME Voir pourquoi le site à une barre de               ->>> fait
//          navigation en bas                               ->>> fait
// todo: S'occuper de la sidebar :
//          mettre les catégories en place
//          ainsi que les publicités
//          Y placer aussi la barre de recherche
// todo: créer les archives
// todo: mettre le menu en adaptatif avec flexbox
//      (et peut être javascript)
// todo: créer les catégories
// todo: rendre le front-page adaptatif
// todo: créer le custom post type : les événements
// todo: créer les custom post type pour les affiliations Udemy
// todo: créer une page de recherche
// todo: supprimer la possibilité de mettre des mots-clefs (tags)
//          https://www.seomix.fr/problemes-mots-cles-wordpress-en-referencement/
// todo: Faire en sorte que l'on puisse cliquer sur le titre des articles dans le fichier index.php
// Todo: Faire en sorte que l'on puisse cliquer sur "continuer la lecture" dans le fichier index.php
// todo: diminuer la taille du logo
// todo: Améliorer la page 404
// todo: mettre une colonne à droite qui sera le menu de la catégorie mais aussi le menu de l'article
// todo: Faire un entête moins vide (image....)
// todo: augmenter le front-page avec des liens vers  les médias-sociaux, vers les articles les plus récents, les
//              évenements
// todo: Dans le footer, faire en sorte que l'on puisse contacter le webmaster et diriger la page vers le formulaire de
//    contact du créateur du site
// todo: Faire une design sympa pour les liens dans les articles
// todo: créer un design spécifique pour la catégorie Linux
// todo: créer un design spécifique pour la catégorie Développement web
// todo: créer des design de post différents dans index.php selon que c'est du Linux ou du dev.
// todo: Mettre toutes les catégories dans le menu du header et pas seulement les deux que j'ai mentionné
//              (comme dans le tutot de MVC).
// todo: Faire en sorte que le s articles des archives et de l'index apparaissent un à un
// todo: petit décalage sur les pages de catégories entre les articles (autour des pointillés de couleurs)
// todo: Supprimer les catégories Linux et Développeur de la barre de navigation du haut

?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Document</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="entete">
                <div id="entete-titre">
                    <!--    Titre du site-->
                    <h1><?php bloginfo('name') ?></h1>
                    <!--    Description du site-->
                    <p><?php bloginfo('description')?></p>
                </div>
                <div id="logo">
                    <img alt="logo du site" src="<?php echo get_theme_file_uri('/img/image-header-site.png') ?>);">
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url(); ?>">Accueil</a></li>
                    <li><a href="<?php echo site_url("/linux"); ?>">Linux</a></li>
                    <li><a href="<?php echo site_url("/devweb"); ?>">Développeur</a></li>
                    <li><a href="<?php echo site_url("/articles"); ?>">Les articles</a></li>
                    <li><a href="<?php echo site_url('/a-propos'); ?>">À propos</a></li>
                </ul>
            </nav>
        </header>
