<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>Although lymphatic follicles are present, notice the lack of a distinct capsule and the specific tissue in the upper right corner of the slide.</p>

<p class="bold">What is this specific tissue?</p>
<input type="text" class="check-input" data-ansindex="22" data-hintindex="25">
<i class="input icon ion-ios-help"></i><i class="input icon ion-ios-checkmark"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/NER-Strat-Squamous.png" class="img-responsive">
	<figcaption></figcaption>
</figure>
<p>This indicates that the section was taken from the palatine tonsil in the back of the oral cavity. The tonsils have the same general organization of other mucosa-associated lymphoid tissue (MALT) in which mainly B-lymphocytes aggregate into lymphoid follicles.</p>
<a class="back-link" href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/1.php">Return to slides</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>