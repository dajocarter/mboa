<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

	<p>A 57-year-old female is evaluated for a mammogram with a suspicious lesion. Symptoms and history include:</p>
	<ul>
		<li>Weight has been stable</li>
		<li>Never smoked cigarettes</li>
		<li>Eats a “regular” diet containing a moderate amount of fat</li>
		<li>Nulligravida (she has never conceived)</li>
		<li>Patient’s aunt had breast cancer</li>
		<li>Patient has not had a mammogram in 5 years</li>
	</ul>
	<p>After core needle biopsy of the lesion and H&amp;E staining, the following slide is seen:</p>

	<img src="<?php echo BASE_URL; ?>assets/img/tsl-pg1.png" class="img-responsive" alt="">

	<p class="bold">You conclude this histology sample was taken from:</p>

	<div class="answers clearfix">
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/thymus.php" class="btn btn-default">Thymus</a>
		</div>
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/lymph_node.php" class="btn btn-default">Lymph Node</a>
		</div>
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/spleen.php" class="btn btn-default">Spleen</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>