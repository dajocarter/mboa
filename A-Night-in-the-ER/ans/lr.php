<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>Lymph nodes have a cortex and medulla, with lymphoid nodules composed mainly of B-lymphocytes in the cortex and cords of cells separated by sinuses in the medulla. However, lymph nodes filter lymph, not blood, and would not produce the profuse bleeding that the patient is experiencing.</p>
<p class="bold">Can you label the following lymph node slide?</p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/MM-LymphNode-Image_ER-Palatine-Tonsil.png" class="img-responsive">
	<figcaption></figcaption>
</figure>
<div class="row clearfix">
	<div class="list-item col-sm-4 col-lg-2 col-lg-offset-1">
		<label>A.) <input type="text" class="check-input" data-ansindex="1" data-hintindex="0"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4 col-lg-2">
		<label>B.) <input type="text" class="check-input" data-ansindex="2" data-hintindex="1"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4 col-lg-2">
		<label>C.) <input type="text" class="check-input" data-ansindex="3" data-hintindex="2"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4 col-sm-offset-2 col-lg-2 col-lg-offset-0">
		<label>D.) <input type="text" class="check-input" data-ansindex="4" data-hintindex="3"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4 col-lg-2">
		<label>E.) <input type="text" class="check-input" data-ansindex="5" data-hintindex="4"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<a class="back-link" href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/1.php">Return to slides</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>