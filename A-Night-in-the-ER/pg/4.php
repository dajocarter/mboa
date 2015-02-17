<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

	<p>The patient appears hemodynamically unstable (low blood pressure and/or a high heart rate). While the patient is rushed to the OR for exploratory abdominal surgery, you begin to recall the specifics of splenic function realizing that the massive blood loss was due to the spleen’s unique form of blood circulation.</p>

	<p>Think about what white pulp is and what its function is.</p>

	<p class="bold">Which of the following is the correct order of blood flow in <span class="italic underline">open circulation</span> through the spleen?</p>

	<ol>
		<li>Splenic artery &rarr; trabecular artery &rarr; central arteriole &rarr; penicillar arteriole &rarr; splenic sinusoids &rarr; trabecular veins &rarr; splenic vein</li>
		<li>Splenic artery &rarr; central arteriole &rarr; penicillar arteriole &rarr; trabecular artery &rarr; splenic sinusoids &rarr; splenic cord &rarr; trabecular veins &rarr; splenic vein</li>
		<li>Splenic artery &rarr; trabecular artery &rarr; central arteriole &rarr; penicillar arteriole &rarr; splenic cord &rarr; splenic sinusoids &rarr; trabecular veins &rarr; splenic vein</li>
		<li>Splenic artery &rarr; penicillar arteriole &rarr; central arteriole &rarr; splenic cord &rarr; splenic sinusoids &rarr; trabecular veins &rarr; splenic vein</li>
	</ol>

	<div class="answers clearfix">
		<div class="threecol first">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow1.php" class="btn btn-default">Number 1</a>
		</div>
		<div class="threecol">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow2.php" class="btn btn-default">Number 2</a>
		</div>
		<div class="threecol">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow3.php" class="btn btn-default">Number 3</a>
		</div>
		<div class="threecol last">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow4.php" class="btn btn-default">Number 4</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>