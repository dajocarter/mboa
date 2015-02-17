<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

	<p>Yes! The primary lymphoid organs include the bone marrow and thymus, while secondary lymphoid organs include: spleen, lymph nodes, and MALT. Dense aggregations of MALT can be found in:</p>
	<div class="form">
		<label>1.)
			<input type="text">
		</label> <br>
		<p class="italic">(hint: lymphatic tissue in nasopharynx and oropharynx)</p>
		<label>2.)
			<input type="text">
		</label> <br>
		<p class="italic">(hint: a diverticulum off the first part of the large intestine)</p>
		<label>3.)
			<input type="text">
		</label> <br>
		<p class="italic"> (hint: in the submucosa of the ileum, the terminal part of the small intestine)</p>
	</div>

	<p>A closer view of this tissue with another stain reveals the following:</p>
	<img src="<?php echo BASE_URL; ?>assets/img/collagen.png" class="img-responsive" alt="collagen">

	<p class="bold">The dark black lines represent:</p>
	<div class="answers clearfix">
		<div class="fourcol first">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type1.php" class="btn btn-default">Type I Collagen</a>
		</div>
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type2.php" class="btn btn-default">Type II Collagen</a>
		</div>
		<div class="fourcol last">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type3.php" class="btn btn-default">Type III Collagen</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>