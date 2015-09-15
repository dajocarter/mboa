<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>Correct! Lymph nodes have a distinct stroma of an outer cortex and inner medulla.</p>

<p class="bold">Lymph nodes are considered   _______________   lymphoid organs.</p>

<div class="row margin-top clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/primary.php" class="btn btn-default">Primary</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/secondary.php" class="btn btn-default">Secondary</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/tertiary.php" class="btn btn-default">Tertiary</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>