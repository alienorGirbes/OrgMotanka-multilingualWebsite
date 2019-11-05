<div class="navbar-fixed">

<!-- Dropdown Connexion a placer ici quand nécéssaire-->

<nav>
<div class="container">

    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><?= $json->navbar->logo; ?></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#"><?= $json->navbar->whoarewe; ?></a></li>
        <li><a href="#"><?= $json->navbar->ouractions; ?></a></li>
        <li><a href="#"><?= $json->navbar->thenews; ?></a></li>

                <!-- Dropdown Trigger -->
                <!-- <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Connexion<i class="material-icons right">arrow_drop_down</i></a></li> -->
      </ul>
    </div>

    <ul class="sidenav" id="mobile-demo">
    <li><a href="#"><?= $json->navbar->whoarewe; ?></a></li>
    <li><a href="#"><?= $json->navbar->ouractions; ?></a></li>
    <li><a href="#"><?= $json->navbar->thenews; ?></a></li>
    </ul>

    </div> <!-- FIN div container -->

  </nav>
</div> <!-- FIN div navbar fixed -->

