<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Correct! Primary lymphoid organs include the thymus and <input type="text">?</p>

<p>What is the function of the thymus?</p>
<textarea></textarea>

<p>Although considered a primary lymphoid organ, the thymus does not contain a stroma of reticulin fibers like many lymphoid organs. Instead, the supporting stroma arises from:</p>

<div class="answers clearfix">
	<div class="fourcol first">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/hassall.php" class="btn btn-default">Hassall’s corpuscles</a>
	</div>
	<div class="fourcol">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/epi_cells.php" class="btn btn-default">Epithelioreticular cells</a>
	</div>
	<div class="fourcol last">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/thymocytes.php" class="btn btn-default">Thymocytes</a>
	</div>
</div>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>
