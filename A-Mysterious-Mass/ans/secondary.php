<?php

require_once("../../templates/config.php");

$pageTitle = "A Mysterious Mass";

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Note that secondary lymphoid organs include the spleen, lymph nodes, and MALT. Dense aggregations of MALT can be found in:</p>
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
<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/pg/2.php">Reevaluate the thymus classification as a lymphoid organ</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>