<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

	<p>Yes! Cells immediately surrounding the central artery, known as PALS, are largely CD4+ T-cells, although smaller numbers of CD8+ T-cells may also be present.</p>
	<div class="img-split grid-container clearfix">
		<div class="list-item first half">
			<p>While waiting for the patient to return from the OR, another case awaits you in the emergency room. A 7-year-old girl presents with a 3-day history of fever and sore throat. Her medical chart indicates she has allergies and repeated tonsillitis. Looking into the girl’s mouth revealed extremely swollen palatine tonsils covered with white exudate.</p>
		</div>
		<div class="list-item last half">
			<img src="<?php echo BASE_URL; ?>assets/img/teeth.jpg" class="img-responsive">
		</div>
	</div>

	<p>Quickly review your tonsil histology by labeling the slide below, and then <a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/8.php">go talk with the patient’s father.</a></p>
	<img src="<?php echo BASE_URL; ?>assets/img/NER-Palatine-Tonsil.png" class="img-responsive">
	<div class="grid-container clearfix">
		<div class="list-item first fourth">
			<label>A.) <input type="text" class="check-input" data-ansindex="28"><i class="icon ion-ios-checkmark input"></i></label>
		</div>
		<div class="list-item fourth">
			<label>B.) <input type="text" class="check-input" data-ansindex="29"><i class="icon ion-ios-checkmark input"></i></label>
		</div>
		<div class="list-item fourth">
			<label>C.) <input type="text" class="check-input" data-ansindex="30"><i class="icon ion-ios-checkmark input"></i></label>
		</div>
		<div class="list-item last fourth">
			<label>D.) <input type="text" class="check-input" data-ansindex="31"><i class="icon ion-ios-checkmark input"></i></label>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>