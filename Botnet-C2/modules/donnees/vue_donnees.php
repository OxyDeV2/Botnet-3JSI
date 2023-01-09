<?php


class VueDonnees
{

    public function attaques($data)
    { 
      ?>
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Historique des attaques</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                          Hostname
                          </th>
                          <th>
                            IP
                          </th>
                          <th>
                            Nom de l'attaque
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Ciblé
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Heure
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      foreach ($data as $attaque) {
                        ?>
                        <tr>
                          <td> 
                           <?php echo $attaque['hostname']; ?>
                          </td>
                          <td> 
                           <?php echo $attaque['ip']; ?>
                          </td>
                          <td> 
                           <?php echo $attaque['attaque_possible']; ?>
                          </td>
                        <?php  if ($attaque['status_attaque'] == "FINIE") { ?> 
                          <td> 
                           <label style="color:mediumseagreen"><b><?php echo $attaque['status_attaque']; } ?></b></label >
                          </td>
                          <?php  if ($attaque['status_attaque'] == "EN COURS") { ?> 
                          <td> 
                         <label style="color:mediumblue"><b><?php echo $attaque['status_attaque']; } ?></b></label >
                          </td>
                          <?php  if (!isset($attaque['status_attaque'])) { ?> 
                          <td> 
                          <label style="color:mediumslateblue"><b><?php echo "Status inconnu"; } ?></b></label >
                          </td>
                          <td> 
                           <?php echo $attaque['cible']; ?>
                          </td>
                          <td> 
                           <?php echo $attaque['date_attaque']; ?>
                          </td>
                          <td> 
                           <?php echo $attaque['temps_attaque']; ?>
                          </td>
                          <?php 
                      } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <?php 

    }

    public function zombies($data)
    {
      ?>
      <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">

          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Liste des Machines Zombies</h4>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                        Hostname
                        </th>
                        <th>
                          IP
                        </th>
                        <th>
                          Login
                        </th>
                        <th>
                          PASSWD
                        </th>
                        <th>
                          HASH
                        </th>
                        <th>
                        ON/OFF
                        </th>
                        <th>
                          MAC
                        </th>
                        <th>
                          Version du Botnet
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach ($data as $zombie) {

                      ?>
                      <tr>
                        <td> 
                         <?php echo $zombie['hostname']; ?>
                        </td>
                        <td> 
                         <?php echo $zombie['ip']; ?>
                        </td>
                        <td> 
                         <?php echo $zombie['login_']; ?>
                        </td>
                        <td> 
                         <?php echo $zombie['passwd']; ?>
                        </td>
                        <td> 
                         <?php echo $zombie['hash_password']; ?>
                        </td>
                      <?php  if ($zombie['est_on'] == 1) { ?> 
                        <td> 
                         <b><label style="color:mediumseagreen"><?php echo "JOIGNABLE"; } ?></label ></b>
                        </td>
                        <?php  if (($zombie['est_on'] == 0)) { ?> 
                        <td> 
                        <label style="color:mediumvioletred"><b><?php echo "INJOIGNABLE"; } ?></b></label >
                        </td>
                        <td> 
                         <?php echo $zombie['mac']; ?>
                        </td>
                        
                        <td> 
                         <?php echo $zombie['version_malware']; ?>
                        </td>
                        <?php 
                    } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php 
    }

    public function fichiers($data)
    {
      ?>
      <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">

          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Liste des Fichiers collectés</h4>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                        Hostname
                        </th>
                        <th>
                          IP
                        </th>
                        <th>
                          Nom fichier
                        </th>
                        <th>
                          Date de collecte
                        </th>
                        <th>
                          Lien
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach ($data as $fichier) {

                      ?>
                      <tr>
                        <td> 
                         <?php echo $fichier['hostname']; ?>
                        </td>
                        <td> 
                         <?php echo $fichier['ip']; ?>
                        </td>
                       <td 
                        style="color:mediumblue"> <b><?php echo $fichier['nom_fichier']; ?></b>
                        </td>
                        <td> 
                         <?php echo $fichier['date_collecte']; ?>
                        </td>
                        <td> 
                                <b><a style="color:mediumblue" href="../../<?php echo $fichier['lien_fichier']?>"><?php echo $fichier['nom_fichier']?></a></b>
                        </td>
                        <?php 
                    } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <?php 
    }

}