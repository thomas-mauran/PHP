<!DOCTYPE html>
<html>
    
    <body>
        <?php

            
            echo "<p> La voiture " . htmlspecialchars($v->getImmatriculation()) . " de marque " . htmlspecialchars($v->getMarque()) . "est de couleur ". htmlspecialchars($v->getCouleur()) ."</p>";

        ?>
        <a href="index.php?action=delete&immat=<?php echo rawurlencode($v->getImmatriculation())?>">supprimer la voiture</a>

    </body>
</html>