<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>B-cells form primary and secondary lymphoid nodules (follicles) adjacent to the central artery, but not PALS. Larger lymphoid nodules may contain a germinal center, displacing the central arteriole to the nodule’s periphery (see Junqueira, 13th Ed., Fig. 14-23b).</p>
<p class="bold">Can you label the following slide of a secondary lymphoid follicle in the spleen?</p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/NER-PAL-B-Cells.png" class="img-responsive">
	<figcaption></figcaption>
</figure>
<div class="row clearfix">
	<div class="list-item col-sm-4">
		<label>A.) <input type="text" class="check-input" data-ansindex="25"><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4">
		<label>B.) <input type="text" class="check-input" data-ansindex="26"><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4">
		<label>C.) <input type="text" class="check-input" data-ansindex="27"><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>
<a class="back-link" href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/6">Go back to reconsider the cells forming PALS.</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>