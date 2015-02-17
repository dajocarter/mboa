<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

	<p>Nice! Type III collagen (reticulin) fibers form the delicate web of loose reticular connective tissue found in the stroma of bone marrow, lymph nodes, and the spleen. These branching reticulin fibers form a network creating a spacious mesh for many cells to reside.</p>

	<p class="bold">The stain that visualizes reticular fibers is known as <input type="text"></p>

	<p><span class="bold">Identify cells embedded in this reticulin meshwork of the lymph node and indicate their functional significance to the body.</span><span class="italic"> (List as many as you can, I came up with 6 different cell types)</span></p>
	<textarea></textarea>

	<p class="bold">Lymph from breast tissue drains into the:</p>

	<div class="answers clearfix">
		<div class="fourcol first">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/sup_cervical.php" class="btn btn-default">Superficial Cervical Lymph Nodes</a>
		</div>
		<div class="fourcol">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/axillary.php" class="btn btn-default">Axillary Lymph Nodes</a>
		</div>
		<div class="fourcol last">
			<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/inguinal.php" class="btn btn-default">Inguinal Lymph Nodes</a>
		</div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>