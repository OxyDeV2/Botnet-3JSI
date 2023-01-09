<?php
require_once 'cont_accueil.php';

class ModAccueil
{

    public function __construct($url)
    {
        $controllAccueil = new ContAccueil();
        if (isset($_SESSION['login'])) {
            $controllAccueil->accueil();
        } else {
            http_response_code(404);
            die;
        }
    }
}
?>

<?php
$modAccueil = new ModAccueil((isset($url)) ? $url : null);
?>