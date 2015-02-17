<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

	<p>Nice open circulation flow! <span class="bold">For comparison, think about the steps for <span class="underline italic">closed circulation</span></span>.</p>

	<img src="<?php echo BASE_URL; ?>assets/img/tsl-pg5.jpg" class="img-responsive" alt="Responsive image">

	<p>Elongated epithelial cells line the walls of splenic sinusoids in the slide above (<a href="http://medsci.indiana.edu/histo/virtual/73_bl_5.html">Slide 73, Spleen,Kornhauser’s Quad</a>). These cells are oriented in the direction of blood flow, have few contact points, and a discontinuous basal lamina producing spaces between the cells. These spaces allow functional blood cells to reenter the vasculature while surrounding macrophages engulf old or damaged cells.</p>

	<p class="bold">These elongated, fusiform-shaped endothelial cells of the splenic sinusoids are known as:
	<input type="text"></p>

	<p class="bold">The spleen is considered a ____________ lymphoid organ.</p>

	<div class="answers clearfix">
		<div class="fourcol first">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/primary.php" class="btn btn-default">Primary</a>
		</div>
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/secondary.php" class="btn btn-default">Secondary</a>
		</div>
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/tertiary.php" class="btn btn-default">Tertiary</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>