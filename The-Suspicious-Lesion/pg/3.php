<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>Yes! The primary lymphoid organs include the bone marrow and thymus, while secondary lymphoid organs include: spleen, lymph nodes, and MALT. Dense aggregations of MALT can be found in:</p>
<div class="grid-container clearfix">
	<div class="list-item first third">
		<label>1.) <input type="text" class="check-input" data-ansindex="11" data-hintindex="9"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item third">
		<label>2.) <input type="text" class="check-input" data-ansindex="12" data-hintindex="10"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item last third">
		<label>3.) <input type="text" class="check-input" data-ansindex="13" data-hintindex="11"><i class="icon ion-ios-help input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<p>A closer view of this tissue with another stain reveals the following:</p>
<img src="<?php echo BASE_URL; ?>assets/img/collagen.png" class="img-responsive" alt="collagen">

<p class="bold">The dark black lines represent:</p>
<div class="grid-container clearfix">
	<div class="list-item third first">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type1.php" class="btn btn-default">Type I Collagen</a>
	</div>
	<div class="list-item third">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type2.php" class="btn btn-default">Type II Collagen</a>
	</div>
	<div class="list-item third last">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type3.php" class="btn btn-default">Type III Collagen</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>