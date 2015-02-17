<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

	<p>Correct! The primary lymphoid organs include the bone marrow and thymus, while secondary lymphoid organs include: spleen, lymph nodes, and MALT. Dense aggregations of MALT can be found in:</p>
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

	<p><span class="bold">Periarteriolar lymphoid sheath (PALS)</span> surrounds the central arteriole playing an important role in immunological surveillance.</p>
	<img src="<?php echo BASE_URL; ?>assets/img/collagen.png" class="img-responsive" alt="collagen">

	<p class="bold">PALS are formed <span class="underline">mainly</span> from:</p>
	<div class="answers clearfix">
		<div class="fourcol first">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/b-lymph.php" class="btn btn-default">B-Lymphocytes</a>
		</div>
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/t-lymph.php" class="btn btn-default">T-Lymphocytes</a>
		</div>
		<div class="fourcol last">
			<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/macrophages.php" class="btn btn-default">Macrophages</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>