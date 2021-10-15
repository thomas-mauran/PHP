<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
<nav class="crumbs">
    <ol>
        <li class="crumb"><a href="index.php?action=readAll">Liste de toute les voitures</a></li>
        <li class="crumb"><a href="index.php?action=readAll&controller=utilisateur">future page des utilisateurs</a></li>
        <li class="crumb"><a href="index.php?action=readAll&controller=trajet">page d’accueil des trajets</a></li>
    </ol>
</nav>

<?php
// Si $controleur='voiture' et $view='list',
// alors $filepath="/chemin_du_site/view/voiture/list.php"
$filepath = File::build_path(array("view", $controller, "$view.php"));
require $filepath;
?>
    </body>
    <footer>
        <p style="border: 1px solid black;text-align:right;padding-right:1em;">
            Site de covoiturage de ...
        </p>
    </footer>
</html>