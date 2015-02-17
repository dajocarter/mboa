<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Correct! The thymus has a thin capsule that extends CT septa into the parenchyma separating the cortex and medulla into incomplete lobules. <span class="bold">Can you label the following thymus slide?</span></p>
<img src="<?php echo BASE_URL; ?>assets/img/thymus.png" class="img-responsive" alt="thymus">
<div class="answers clearfix">
	<div class="fourcol first">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/primary.php" class="btn btn-default">Primary</a>
	</div>
	<div class="fourcol">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/secondary.php" class="btn btn-default">Secondary</a>
	</div>
	<div class="fourcol last">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/tertiary.php" class="btn btn-default">Tertiary</a>
	</div>
</div>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>