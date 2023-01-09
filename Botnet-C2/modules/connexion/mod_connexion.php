<?php
require_once "cont_connexion.php";

class ModConnexion
{

    function __construct($url)
    {

        $controleurConnexion = new ContConnexion();

        if (isset($url[1])){ 
            $action = $url[1];
        }

        if (isset($url[1])) {
            switch ($action) {
                case "connexion":
                    $controleurConnexion->connexion();
                    break;
                case "deconnexion":
                    $controleurConnexion->deconnexion();
                    break;
                default:
                    break;
            }
        } else {
            $controleurConnexion->pageConnexion();
        }
    }
}
?>
<?php
    $modConnexion = new ModConnexion((isset($url)) ? $url : null);
?>