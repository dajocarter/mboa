<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

	<p>Nice open circulation flow! <span class="bold">For comparison, write out the steps for <span class="underline italic">closed circulation</span></span> below.</p>
	<textarea class="check-input" data-hintindex="31"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>

	<img src="<?php echo BASE_URL; ?>assets/img/NER-pg5.png" class="img-responsive">

	<p><span class="italic">Elongated epithelial cells</span> line the walls of splenic sinusoids in the slide above (<a href="http://medsci.indiana.edu/histo/virtual/73_bl_5.html">Slide 73, Spleen,Kornhauser’s Quad</a>). These cells are oriented in the direction of blood flow, have few contact points, and a discontinuous basal lamina producing spaces between the cells. These spaces allow functional blood cells to reenter the vasculature while surrounding macrophages engulf old or damaged cells.</p>

	<p class="bold">These elongated, fusiform-shaped endothelial cells of the splenic sinusoids are known as:</p>
	<input type="text" class="check-input" data-ansindex="23">
	<i class="input icon ion-ios-checkmark"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>

	<p class="bold">The spleen is considered a ____________ lymphoid organ.</p>

	<div class="grid-container clearfix">
		<div class="list-item third first">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/primary.php" class="btn btn-default">Primary</a>
		</div>
		<div class="list-item third">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/secondary.php" class="btn btn-default">Secondary</a>
		</div>
		<div class="list-item third">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/tertiary.php" class="btn btn-default">Tertiary</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>