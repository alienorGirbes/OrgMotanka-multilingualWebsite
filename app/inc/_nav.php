
<nav class="mnu_fixed">
  <div class="branding"> <!-- DIV qui contient logo + titre asso-->
    <div>
    <a href="index.php"><img class="circle img_logo" src="assets/img/logoMotanka_130x130.png"></a>
    </div>

    <div class="mobile_mnu">
    <div>
        <a href="index.php" class="mnu_logo"><?= $json->navbar->logo; ?></a>
      </div>
      <div class="desktop_mnu hide-on-med-and-down right-align">
        <ul class="" id="">
          <li><a href="index.php"><?= $json->navbar->whoarewe; ?></a></li>
        </ul>
      </div>
      <div class="submenu"> <!-- DIV "donate""-->
        <div class="ipad_margin">
          <a href="don.php" class="waves-effect waves-light btn-small bg_beige" ><i class="fas fa-heart perso_icon"></i><?= $json->navbar->donate; ?></a>
        </div>
        <div>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger left-align center"><i class="material-icons">menu</i></a>
        </div>
      </div> <!-- FIN DIV "donate""-->
    </div>
  </div> <!-- FIN DIV qui contient logo + titre asso-->



  <ul class="sidenav" id="mobile-demo">
    <li><a href="index.php"><?= $json->navbar->whoarewe; ?></a></li>
    <li><a href="don.php"><?= $json->navbar->donate; ?></a></li> 
    <li><a href="mailto:contact@motanka.fr"><?= $json->navbar->contact; ?></a></li>
  </ul>

</nav>

 <!-- Dropdown Connexion a placer ici quand nécéssaire -->
