<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>Yes! Primary lymphoid organs include the bone marrow and thymus, while secondary lymphoid organs include: spleen, lymph nodes, and MALT. Dense aggregations of MALT can be found in:</p>
<div class="row margin-top clearfix">
	<div class="list-item col-sm-4">
		<label>1.) <input type="text" class="check-input" data-ansindex="11" data-hintindex="9"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4">
		<label>2.) <input type="text" class="check-input" data-ansindex="12" data-hintindex="10"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4">
		<label>3.) <input type="text" class="check-input" data-ansindex="13" data-hintindex="11"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<p class="margin-top">A closer view of this tissue with another stain reveals the following:</p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/collagen.png" class="img-responsive" alt="collagen">
	<figcaption></figcaption>
</figure>

<p class="bold margin-top">The dark black lines represent:</p>
<div class="row margin-top clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type1" class="btn btn-default">Type I Collagen</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type2" class="btn btn-default">Type II Collagen</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/type3" class="btn btn-default">Type III Collagen</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>