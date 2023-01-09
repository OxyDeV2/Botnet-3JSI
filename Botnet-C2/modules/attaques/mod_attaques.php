<?php
require_once 'cont_attaques.php';

class ModAttaque 
{
    /**
     * ModAttaque constructor.
     * Ce constructeur vérifie si les actions et les paramètres sont valides pour appeler la fonction correspondante dans le controlleur
     * @param $url
     */
    public function __construct($url)
    {
        $controllAttaque = new ContAttaque();

        ob_start();
        if (isset($_SESSION['login'])) {
            if (isset($url[1])) {
                $action = $url[1];
                switch ($action) {
                    case 'choix-massive-zombie':
                        $controllAttaque->choixAttaqueMassiveZombie();
                        break;
                    case 'choix-massive-victime':
                        $controllAttaque->choixAttaqueMassiveVictime();
                        break;
                    case 'choix-ciblee-zombie':
                        $controllAttaque->choixAttaqueCibleeZombie();
                        break;
                    case 'attaque-cible-zombie':
                        $controllAttaque->attaque_cible_zombie();
                        break;
                    case 'attaque-massive-zombie':
                        $controllAttaque->attaque_massive_zombie();
                        break;
                    case 'attaque-massive-victime':
                        $controllAttaque->attaque_massive_victime();
                        break;                       
                    default:

                        break;
                }
            } else {
                http_response_code(404);
                die;           
             }
            }
        }
    }
?>

<?php
$modAttaque = new ModAttaque((isset($url)) ? $url : null);
?>