<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>After a rapid strep test came back positive, you prescribe antibiotics and decide to discuss the possibility of tonsillectomy with the father. The girl’s father is extremely concerned over the thought of having his daughter’s tonsils removed. You explain to her father that tonsils are a form of secondary lymphatic tissue known as MALT.</p>

<p class="bold">What does “MALT” stand for and where is it located?</p>
<div>
	<textarea class="check-input" data-hintindex="33"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p class="bold">What is the function of MALT?</p>
<div>
	<textarea class="check-input" data-hintindex="34"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p class="bold">How will removal of his daughter’s tonsils affect her health?</p>
<div>
	<textarea class="check-input" data-hintindex="35"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p><a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/9.php">Go check-in with your first patient</a></p>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>