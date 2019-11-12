<?php
    require '../../vendor/autoload.php';
    header('Content-Type: text/html; charset=utf-8');
    // include 'app/inc/inc.init.php';
	$lang = new \App\Lang();
	$json = $lang->expose();
    require '../inc/_header.php';
    require '../inc/_nav.php';
?>
<div class="parallax-container">
      <div class="parallax"><img src="assets/img/heartonthetable.jpg"></div>
</div>



    <div class="container">
    <div class="row">
    <div id="whoarewe" class="col s12">
        <h1><?= $json->pageWhoweare->title; ?></h1>
        <h2><?= $json->pageWhoweare->subTitle; ?></h2>
        <p><?= $json->pageWhoweare->textParagraphe1; ?></p>
        <p><?= $json->pageWhoweare->textParagraphe2; ?>
        <span class="highlight"><?= $json->pageWhoweare->textHighlight1; ?></span></p>
        <p><?= $json->pageWhoweare->textParagraphe3; ?></p>
        <p><span class="highlight"><?= $json->pageWhoweare->textHighlight2; ?></span></p>
        <p><?= $json->pageWhoweare->textParagraphe4; ?>
        <span class="highlight"><?= $json->pageWhoweare->textHighlight3; ?></span></p>

    <div>
        <h4><?= $json->footer->facebook; ?></h4>
        <div class="center-align">
        <a class="btn-floating pulse bg_beige center-align" href="https://www.facebook.com/OrganisationMotanka/"><i class="material-icons fab fa-facebook-f"></i></a>
</div>
    </div>
            </div>


</div> <!-- FIN de div ROW -->
    </div> <!-- FIN de div container -->
<?php require '../inc/_footer.php'; ?>
