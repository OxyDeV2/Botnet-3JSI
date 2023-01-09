<?php

require_once "modele_connexion.php";
require_once "vue_connexion.php";

class ContConnexion 
{

    function __construct()
    {
        $this->modele = new ModeleConnexion();
        $this->vue = new VueConnexion();
    }

    function pageConnexion()
    {
        $this->vue->pageConnexion();
    }

    function connexion()
    {
        $requete = $this->modele->connexion(addslashes(strip_tags($_POST['login'])));
        if ($requete != NULL) {
            //Vérification du mot de passe :
            if (password_verify(addslashes(strip_tags($_POST['mdp'])), $requete[0]['hash_password'])) {
                $_SESSION['login'] = $requete[0]['login'];
                header("Location: http://localhost");
            } else {
                header("Location: http://localhost?erreur=true");
            }
        } else {
            header("Location: http://localhost?erreur=true");
        }
    }

    function deconnexion()
    {
        session_unset();
        session_destroy();
        header("Location: http://localhost");
    }
}
