<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>While working in the emergency room one evening, an unconscious 58-year-old male is rushed into the scene. You are informed he was in a car accident and has a laceration along the lateral margin of the upper left abdominal quadrant between the 10th and 11th ribs resulting in profuse bleeding.</p>

<p class="bold">Click on the histology slide below that depicts the organ injured.</p>

<div class="grid-container clearfix">
	<div class="list-item half first">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/ul.php">
			<img src="<?php echo BASE_URL; ?>assets/img/UL.png" class="img-responsive" alt="">
		</a>
	</div>
	<div class="list-item half last">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/ur.php">
			<img src="<?php echo BASE_URL; ?>assets/img/UR.png" class="img-responsive" alt="">
		</a>
	</div>
	<div class="list-item second-row half first">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/ll.php">
			<img src="<?php echo BASE_URL; ?>assets/img/LL.png" class="img-responsive" alt="">
		</a>
	</div>
	<div class="list-item second-row half last">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/lr.php">
			<img src="<?php echo BASE_URL; ?>assets/img/LR.png" class="img-responsive" alt="">
		</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>