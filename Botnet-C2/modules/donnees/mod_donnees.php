<?php
require_once 'cont_donnees.php';

class ModDonnee 
{
    /**
     * ModDonnee constructor.
     * Ce constructeur vérifie si les actions et les paramètres sont valides pour appeler la fonction correspondante dans le controlleur
     * @param $url
     */
    public function __construct($url)
    {
        $controllDonnee = new ContDonnee();
        if (isset($_SESSION['login'])) {
            if (isset($url[1])) {
                $action = $url[1];
                switch ($action) {
                    case 'attaques':
                        $controllDonnee->donneeAttaque();
                        break;
                    case 'zombies':
                        $controllDonnee->donneeZombie();
                        break;
                    case 'collectees':
                        $controllDonnee->donneesCollectees();
                        break;
                    default:
                        die();
                        break;
                }
            } else {
                http_response_code(404);
                die();
            }
        } else {
            http_response_code(404);
            die();
        }
    }
}

?>

<?php
$modDonnee = new ModDonnee((isset($url)) ? $url : null);
?>