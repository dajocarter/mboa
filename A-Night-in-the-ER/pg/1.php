<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

	<p>While working in the emergency room one evening, an unconscious 58-year-old male is rushed into the scene. You are informed he was in a car accident and has a laceration along the lateral margin of the upper left abdominal quadrant between the 10th and 11th ribs resulting in profuse bleeding.</p>

	<p class="bold">Click on the histology slide below that depicts the organ injured.</p>

	<div class="answers clearfix">
		<div class="sixcol first">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/ul.php">
				<img src="<?php echo BASE_URL; ?>assets/img/ul.png" class="img-responsive" alt="">
			</a>
		</div>
		<div class="sixcol last">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/ur.php">
				<img src="<?php echo BASE_URL; ?>assets/img/ur.png" class="img-responsive" alt="">
			</a>
		</div>
		<div class="sixcol first">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/ll.php">
				<img src="<?php echo BASE_URL; ?>assets/img/ll.png" class="img-responsive" alt="">
			</a>
		</div>
		<div class="sixcol last">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/lr.php">
				<img src="<?php echo BASE_URL; ?>assets/img/lr.png" class="img-responsive" alt="">
			</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>