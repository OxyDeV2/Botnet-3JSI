<?php
require_once 'vue_accueil.php';
require_once 'modele_accueil.php';

class ContAccueil
{
    function __construct()
    {
        $this->modele = new ModeleAccueil();
        $this->vue = new VueAccueil();
    }

    public function accueil()
	{
        $nb_zombie = $this->modele->nb_zombie();
        $nb_at = $this->modele->nb_at();
        $nb_at_massive = $this->modele->nb_at_massive();
        $nb_at_cible = $this->modele->nb_at_cible();
        $pc_at_ciblee =  $this->modele->cacul_pourcentage($nb_at_cible, $nb_at, 100);
        $pc_at_massive = $this->modele->cacul_pourcentage($nb_at_massive, $nb_at, 100);
        $nb_donnee = $this->modele->nb_donnee();

        $attaques_possibles = $this->modele->obj_to_array($this->modele->get_attaques_possibles());
        
        $pourcentage_par_attaques_possibles = $this->modele->tab_pourcentage_par_attaque($attaques_possibles);
        
        $a = date("Y-m-d", strtotime("day"));
        $b = date("Y-m-d", strtotime("-1 day"));
        $c = date("Y-m-d", strtotime("-2 day"));
        $d = date("Y-m-d", strtotime("-3 day"));
        $e = date("Y-m-d", strtotime("-4 day"));
        $f = date("Y-m-d", strtotime("-5 day"));
        $g = date("Y-m-d", strtotime("-6 day"));
        $h = date("Y-m-d", strtotime("-7 day"));
        $i = date("Y-m-d", strtotime("-8 day"));
        $j = date("Y-m-d", strtotime("-9 day"));
        $k = date("Y-m-d", strtotime("-10 day"));
        $l = date("Y-m-d", strtotime("-11 day"));
        $m = date("Y-m-d", strtotime("-12 day"));
        $n = date("Y-m-d", strtotime("-13 day"));

        $sem1 = array(0, 0, 0, 0, 0, 0, 0);
        $sem1[6] = $this->modele->nb_attaque_par_j($a);
        $sem1[5] = $this->modele->nb_attaque_par_j($b);
        $sem1[4] = $this->modele->nb_attaque_par_j($c);
        $sem1[3] = $this->modele->nb_attaque_par_j($d);
        $sem1[2] = $this->modele->nb_attaque_par_j($e);
        $sem1[1] = $this->modele->nb_attaque_par_j($f);
        $sem1[0] = $this->modele->nb_attaque_par_j($g);
        $sem1_pretty = $this->modele->obj_to_array($sem1);

        $sem2 = array(0, 0, 0, 0, 0, 0, 0);
        $sem2[6] = $this->modele->nb_attaque_par_j($h);
        $sem2[5] = $this->modele->nb_attaque_par_j($i);
        $sem2[4] = $this->modele->nb_attaque_par_j($j);
        $sem2[3] = $this->modele->nb_attaque_par_j($k);
        $sem2[2] = $this->modele->nb_attaque_par_j($l);
        $sem2[1] = $this->modele->nb_attaque_par_j($m);
        $sem2[0] = $this->modele->nb_attaque_par_j($n);
        $sem2_pretty = $this->modele->obj_to_array($sem2);


        ?>
        <script>
            var sem1_pretty = <?php echo json_encode($sem1_pretty); ?>;
            var sem2_pretty = <?php echo json_encode($sem2_pretty); ?>;
            var attaques_possibles = <?php echo json_encode($attaques_possibles); ?>;
            var pourcentage_par_attaques_possibles = <?php echo json_encode($pourcentage_par_attaques_possibles); ?>;
        </script>

        <?php
        $this->vue->accueil($nb_zombie, $nb_at, $pc_at_massive, $pc_at_ciblee, $nb_donnee);
	}
}