<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>Nice! Type III collagen (reticulin) fibers form the delicate web of loose reticular connective tissue found in the stroma of bone marrow, lymph nodes, and the spleen. These branching reticulin fibers form a network creating a spacious mesh for many cells to reside.</p>

<p class="bold margin-top">The stain that visualizes reticular fibers is known as  ____________________.</p>
<div>
	<input type="text" class="check-input" data-ansindex="36">
	<i class="input icon ion-ios-checkmark"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p class="margin-top">Identify cells embedded in this reticulin meshwork of the lymph node and indicate their functional significance to the body.</p>
<div>
	<textarea class="check-input" data-hintindex="39"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p class="bold margin-top">Lymph from breast tissue drains into the:</p>
<div class="row margin-top clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/sup_cervical.php" class="btn btn-default">Superficial Cervical Lymph Nodes</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/axillary.php" class="btn btn-default">Axillary Lymph Nodes</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/inguinal.php" class="btn btn-default">Inguinal Lymph Nodes</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>