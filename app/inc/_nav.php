<div id="redMotanka" class="navbar-fixed">

<!-- Dropdown Connexion a placer ici quand nécéssaire-->

<nav class="nav-extended nav_mnu">
<div class="container">

    <div class="nav-wrapper">

    <img class="responsive-img circle img_logo" src="assets/img/logoMotanka_130x130.png">
      <a href="#" class="brand-logo mnu_logo"><?= $json->navbar->logo; ?></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#whoarewe"><?= $json->navbar->whoarewe; ?></a></li>
        <!-- <li><a href="#"><?= $json->navbar->ouractions; ?></a></li> -->
        <!-- <li><a href="#"><?= $json->navbar->thenews; ?></a></li> -->
        <!-- <li><a href="#"><?= $json->navbar->donate; ?></a></li> -->
        <li><a class="btn-floating pulse bg_beige" href="mailto:contact@motanka.fr"><i class="material-icons">mail_outline</i></a></li>

                <!-- Dropdown Trigger -->
                <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Connexion<i class="material-icons right">arrow_drop_down</i></a></li> -->
      </ul>
    </div>
    </div> <!-- FIN div container -->

  </nav>
</div> <!-- FIN div navbar fixed -->


<ul class="sidenav" id="mobile-demo">
    <li><a href="#"><?= $json->navbar->whoarewe; ?></a></li>
    
    <!-- <li><a href="#"><?= $json->navbar->ouractions; ?></a></li> -->
    <!-- <li><a href="#"><?= $json->navbar->thenews; ?></a></li> -->
    <!-- <li><a href="#"><?= $json->navbar->donate; ?></a></li> -->
    <li><a href="mailto:contact@motanka.fr"><?= $json->navbar->contact; ?></a></li>

    </ul>
