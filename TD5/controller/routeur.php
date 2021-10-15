<?php
    require_once File::build_path(Array("controller", "ControllerVoiture.php"));
    // On recupère l'action passée dans l'URL
    if(isset($_GET['action'])){
        $action = $_GET["action"];
    }
    else{
        $action = 'readAll';
    }
    // Appel de la méthode statique $action de ControllerVoiture
    if(!(in_array($action, get_class_methods('ControllerVoiture')))){

        $controller = 'voiture';
        $view = 'error';
        $pagetitle = 'Erreur';

        require_once File::build_path(Array("view", "view.php"));

    }
    else{
        ControllerVoiture::$action(); 
    }
?>

