<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Lymph nodes have a capsule extending trabeculae into the parenchyma that is densely packed with lymphocytes. Lymph nodes also have morphologically distinct regions, however notice the lack of a paracortex, medullary cords, medullary sinuses, and lymphoid follicles in the patient’s slide that are seen in lymph nodes. 

<span class="bold">Can you label the following lymph node slide?</span></p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/MM-LymphNode-Image_ER-Palatine-Tonsil.png" class="img-responsive" alt="lymph_node">
	<figcaption></figcaption>
</figure>
<div class="row">
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
	<div class="list-item col-sm-4 col-sm-offset-2 col-lg-offset-0 col-lg-2">
		<label>D.) <input type="text" class="check-input" data-ansindex="4" data-hintindex="3"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4 col-lg-2">
		<label>E.) <input type="text" class="check-input" data-ansindex="5" data-hintindex="4"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>
<a class="back-link" href="<?php echo BASE_URL; ?>A-Mysterious-Mass/pg/1">Return to investigate the slide from the mysterious mediastinal mass</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>