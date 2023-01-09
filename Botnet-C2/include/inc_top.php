<div class="container-scroller">
<!--NAV -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">

    <div>
      <a class="navbar-brand brand-logo" href="http://localhost/">
        <img src="http://localhost/images/logo.png" alt="logo" width="100" />
      </a>
    </div>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-top"> 
    <ul class="navbar-nav">
      <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
        <h1 class="welcome-text">Bonjour <?php echo $_SESSION['login'] ?>, </h1>
        <h3 class="welcome-sub-text"><?php print($titrePage) ?> </h3>
      </li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown d-none d-lg-block user-dropdown">
        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle" src="http://localhost/images/faces/facex.jpg" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="http://localhost/images/faces/facex.jpg" alt="Profile image">
            <p class="mb-1 mt-3 font-weight-semibold"><?php print($_SESSION['login'])?></p>
          </div>
          <a href="http://localhost/connexion/deconnexion/" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Se déconnecter</a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
<div class="container-fluid page-body-wrapper">
  <!-- SIDEBAR -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Accueil</span>
        </a>
      </li>
      <li class="nav-item nav-category">Attaques</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="http://localhost/#cible" aria-expanded="false" aria-controls="cible">
          <i class="menu-icon mdi mdi mdi-account"></i>
          <span class="menu-title">Ciblée</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="cible">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="http://localhost/attaques/choix-ciblee-zombie">Sur Zombie</a></li>
          </ul>
        </div>

      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="http://localhost/#massive" aria-expanded="false" aria-controls="massive">
          <i class="menu-icon mdi mdi-account-multiple-outline"></i>
          <span class="menu-title">Massive</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="massive">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="http://localhost/attaques/choix-massive-zombie">Sur Zombies</a></li>
          </ul>
        </div>
        <div class="collapse" id="massive">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="http://localhost/attaques/choix-massive-victime">Sur Victimes</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Données</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="http://localhost/#tables" aria-expanded="true" aria-controls="tables">
          <i class="menu-icon mdi mdi-table"></i>
          <span class="menu-title">Tableaux</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="http://localhost/donnees/attaques">Attaques</a></li>
          </ul>
        </div>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="http://localhost/donnees/zombies">Zombies</a></li>
          </ul>
        </div>
        <div class="collapse" id="tables">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="http://localhost/donnees/collectees">Fichiers collectés</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>