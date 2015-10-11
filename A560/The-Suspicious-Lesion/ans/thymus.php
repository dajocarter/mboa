<?php

require_once("../../../templates/config.php");

include(ROOT_PATH . "/A560/The-Suspicious-Lesion/index.php"); 

?>

<p>The thymus parenchyma has a lobular arrangement of cortical caps surrounding medullary tissue that may resemble a lymphatic nodule with a germinal center in a lymph node. However, notice in the slide below the lack of lymphoid nodules in the cortex that are seen in the patient’s slide.</p>

<p class="bold">Can you label the following thymus slide?</p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/MM-Pg-2.png" class="img-responsive" alt="thymus">
	<figcaption></figcaption>
</figure>
<div class="row clearfix">
	<div class="list-item col-sm-3">
		<label>A.) <input type="text" class="check-input" data-ansindex="7" data-hintindex="5"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>B.) <input type="text" class="check-input" data-ansindex="8" data-hintindex="6"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>C.) <input type="text" class="check-input" data-ansindex="9" data-hintindex="7"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>D.) <input type="text" class="check-input" data-ansindex="10" data-hintindex="8"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<a class="back-link" href="<?php echo BASE_URL; ?>A560/The-Suspicious-Lesion/pg/1">Go back and reassess the patient’s slide</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>