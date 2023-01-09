<?php

require_once 'config/connexion.php';

class ModeleConnexion extends Connexion{

    function connexion($pseudo){
        try{
            $selectPreparee =Connexion::$bdd->prepare('SELECT login, hash_password FROM Admin_C2 WHERE login = ?');
            $selectPreparee->execute(array($pseudo));
            return $selectPreparee->fetchAll();
        } catch (PDOException $e) {
        }
    }
}
