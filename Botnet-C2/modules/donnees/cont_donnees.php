<?php
require_once 'vue_donnees.php';
require_once 'modele_donnees.php';

class ContDonnee 
{

    function __construct()
    {
        $this->modele = new ModeleDonnees();
        $this->vue = new VueDonnees();
    }

    public function donneeAttaque()
    {
        $data = $this->modele->getDonneeAttaque();
        $this->vue->attaques($data);
    }

    public function donneeZombie()
    {
        $data = $this->modele->getDonneeZombie();
        $this->vue->zombies($data);
    }


    public function donneesCollectees()
    {
        $data = $this->modele->getDonneeFichier();
        $this->vue->fichiers($data);
    }
}