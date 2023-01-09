<?php


class VueConnexion
{

    function pageConnexion()
    {
    ?>
    
    <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
          <?php if (isset($_GET['erreur']) && $_GET['erreur'] == true) {
            print('<div class="alert alert-danger" role="alert">
            Erreur de login ou de mot de passe.
             </div>'); 
          } ?>
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.png" alt="logo">
              </div>
              <h4>Accès</s> au dashboard C2</h4>
              <h6 class="fw-light">Connexion nécessaire pour continuer.</h6>
              <form class="pt-3" action="/connexion/connexion" method="POST">
                <div class="form-group">
                  <input name="login" type="text" class="form-control form-control-lg" id="login" placeholder="Nom d'utilisateur">
                </div>
                <div class="form-group">
                  <input name="mdp" type="password" class="form-control form-control-lg" id="mdp" placeholder="Mot de passe">
                </div>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" id="submit" value="SE CONNECTER">
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php
    }
}
