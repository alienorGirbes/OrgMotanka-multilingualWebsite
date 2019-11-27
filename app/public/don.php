<?php
    require '../../vendor/autoload.php';
    header('Content-Type: text/html; charset=utf-8');
    // include 'app/inc/inc.init.php';
	$lang = new \App\Lang();
	$json = $lang->expose();
    require '../inc/_header.php';
    require '../inc/_nav.php';
?>




    <div class="container">
    <div class="row">
    <div id="whoarewe" class="col s12">
        <h1>pade de don</h1>
        <h2><?= $json->navbar->donate; ?></h2>


    
            </div>


</div> <!-- FIN de div ROW -->
    </div> <!-- FIN de div container -->
<?php require '../inc/_footer.php'; ?>
