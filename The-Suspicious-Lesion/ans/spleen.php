<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>The spleen’s parenchyma is organized into distinct regions of red and white pulp, which may closely resemble a cortex and medulla of other organs. Note however, that the red and white pulp of the spleen is somewhat uniformly distributed throughout the organ and not organized into distinct layers seen in the patient’s slide.</p>

<p class="bold">Can you label the following slide of the spleen?</p>
<img src="<?php echo BASE_URL; ?>assets/img/SL-Spleen.png" class="img-responsive" alt="spleen">
<div class="grid-container clearfix">
	<div class="list-item fourth first">
		<label>A.) <input type="text" class="check-input" data-ansindex="8"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item fourth">
		<label>B.) <input type="text" class="check-input" data-ansindex="32"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item fourth">
		<label>C.) <input type="text" class="check-input" data-ansindex="33"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item fourth">
		<label>D.) <input type="text" class="check-input" data-ansindex="34"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/pg/1.php">Go back and reassess the patient’s slide</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>