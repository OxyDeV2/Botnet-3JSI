<?php

class Connexion
{
    static $bdd;

    public function __construct()
    {
    }
    public static function initConnexion()
    {
        $db_host = "localhost";
        $user = "admin";
        $password = "mH5AZCH@m1!PUQjr28XgF4cP9*d97#zDla9RW&1djZJqX8ot";
        $db_name = "botnet";
        $dns = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8';
        try {
            self::$bdd = new PDO($dns, $user, $password);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
<?php
Connexion::initConnexion();
?>