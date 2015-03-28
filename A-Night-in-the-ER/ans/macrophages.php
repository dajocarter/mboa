<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>Macrophages are abundant within splenic cords of the red pulp and ensheath penicillar arterioles.</p>
<p class="bold">What is the function of these cells in the spleen?</p>
<div>
	<textarea class="check-input" data-hintindex="32"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/6.php">Go back to reconsider the cells forming PALS.</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>