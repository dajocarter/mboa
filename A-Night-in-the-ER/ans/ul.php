<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>Although lymphatic follicles are present, notice the lack of a distinct capsule and the specific tissue in the upper right corner of the slide.</p>
<p class="bold">What is this specific tissue? <input type="text"></p>
<div class="clearfix">
	<div class="sixcol first">
		<img src="<?php echo BASE_URL; ?>assets/img/UL.png" class="img-responsive" alt="">
	</div>
	<div class="sixcol last">
		<img src="<?php echo BASE_URL; ?>assets/img/UL2.png" class="img-responsive" alt="">
	</div>
</div>
<p>This indicates that the section was taken from the palatine tonsil in the back of the oral cavity. The tonsils have the same general organization of other mucosa-associated lymphoid tissue (MALT) in which mainly B-lymphocytes aggregate into lymphoid follicles.</p>
<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/1.php">Return to slides</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>