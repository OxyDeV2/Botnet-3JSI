<?php

require_once 'config/connexion.php';

class ModeleDonnees
{


    public function getDonneeAttaque()
    {
        try {
            $req = Connexion::$bdd->prepare("SELECT hostname, ip, attaque_possible, status_attaque, cible, date_attaque, temps_attaque  from historique_attaque inner join Attaque on historique_attaque.id_attaque = Attaque.id_attaque INNER JOIN attaque_cible on historique_attaque.id_historique_attaque = attaque_cible.id_historique_attaque INNER JOIN Machine ON attaque_cible.id_machine = Machine.id_machine order by date_attaque desc, temps_attaque desc");
            $req->execute();
            $result = $req->fetchAll();
            return $result;

        } catch (PDOException $e) {
        }
    }

    public function getDonneeZombie()
    {
        try {
            $req = Connexion::$bdd->prepare("SELECT ip, hostname, login_, passwd, hash_password, est_on, mac, version_malware from Machine INNER JOIN Malware_Botnet on Machine.id_malware_botnet = Malware_Botnet.id_malware_botnet order by est_on desc, hostname");
            $req->execute();
            $result = $req->fetchAll();
            return $result;
        } catch (PDOException $e) {
        }
    }



	public function getDonneeFichier()
    {
        try {
            $req = Connexion::$bdd->prepare("SELECT ip, hostname, nom_fichier, date_collecte, lien_fichier from Fichier INNER JOIN Machine ON Fichier.id_machine = Machine.id_machine order by date_collecte desc, hostname desc");
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