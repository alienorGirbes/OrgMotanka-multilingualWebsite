<?php
    require '../../vendor/autoload.php';
    // include 'app/inc/inc.init.php';
	$lang = new \App\Lang();
	$json = $lang->expose();
    require '../inc/_header.php';
    require '../inc/_nav.php';
?>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="display-4">
                <h1><?= $json->homeTitle; ?></h1>                   
            </div>         
        </div>
    </div>
    <div class="container">
        <p><?= $json->textArea; ?></p>
    </div>
<?php require '../inc/_footer.php'; ?>
