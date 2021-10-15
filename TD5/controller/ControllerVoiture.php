<?php
require_once File::build_path(Array("model", "ModelVoiture.php"));

class ControllerVoiture {

    public static function readAll() {
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        
        $controller = 'voiture';
        $view = 'list';
        $pagetitle = 'Liste des voitures';

        require_once File::build_path(Array("view", "view.php"));

    }

    public static function read(){

        if(isSet($_GET['immat'])){

        $controller = 'voiture';
        $view = 'error';
        $pagetitle = 'Lecture par immat';

            $v = ModelVoiture::getVoitureByImmat($_GET['immat']);
            
            
            if($v == false){
                require_once File::build_path(Array("view", "view.php"));

            }
            else{
                $view = 'details';
                require_once File::build_path(Array("view", "view.php"));

            }

        }
        else{
            require_once File::build_path(Array("view", "view.php"));


        }
    }

    public static function create(){
        $controller = 'voiture';
        $view = 'create';
        $pagetitle = 'Lecture par immat';
            require_once File::build_path(Array("view", "view.php"));

    }

    public static function created(){
        $controller = 'voiture';
        $view = 'created';
        $pagetitle = 'Voiture crée';

        $v = new ModelVoiture($_POST['marque'], $_POST['couleur'], $_POST['immatriculation']);
        
        
        $v->save();
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
        require_once File::build_path(Array("view", "view.php"));

    }

    public static function delete(){

        if(isSet($_GET['immat'])){
            $controller = 'voiture';
            $view = 'deleted';
            $pagetitle = 'Delete de la voiture';

            $immat = $_GET['immat'];

            ModelVoiture::deleteByImmat($immat);
            $tab_v = ModelVoiture::getAllVoitures();

            require_once File::build_path(Array("view", "view.php"));
        }
        else{
            echo "test";
        }
    }



}
?>
