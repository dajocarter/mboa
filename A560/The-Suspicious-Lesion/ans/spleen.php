<?php

require_once("../../../templates/config.php");

include(ROOT_PATH . "/A560/The-Suspicious-Lesion/index.php"); 

?>

<p>The spleen’s parenchyma is organized into distinct regions of red and white pulp, which may closely resemble a cortex and medulla of other organs. Note however, that the red and white pulp of the spleen is somewhat uniformly distributed throughout the organ and not organized into distinct layers seen in the patient’s slide.</p>

<p class="bold">Can you label the following slide of the spleen?</p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/SL-Spleen.png" class="img-responsive" alt="spleen">
	<figcaption></figcaption>
</figure>
<div class="row clearfix">
	<div class="list-item col-sm-3">
		<label>A.) <input type="text" class="check-input" data-ansindex="8" data-hintindex="48"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>B.) <input type="text" class="check-input" data-ansindex="32" data-hintindex="49"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>C.) <input type="text" class="check-input" data-ansindex="33" data-hintindex="50"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>D.) <input type="text" class="check-input" data-ansindex="34" data-hintindex="51"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<a class="back-link" href="<?php echo BASE_URL; ?>A560/The-Suspicious-Lesion/pg/1">Go back and reassess the patient’s slide</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>