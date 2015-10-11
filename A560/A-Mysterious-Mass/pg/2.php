<?php

require_once("../../../templates/config.php");

include(ROOT_PATH . "/A560/A-Mysterious-Mass/index.php"); 

?>

<p>Correct! The thymus has a thin capsule that extends CT septa into the parenchyma separating the cortex and medulla into incomplete lobules. <span class="bold">Can you label the following thymus slide?</span></p>

<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/MM-Pg-2.png" class="img-responsive" alt="thymus">
	<figcaption></figcaption>
</figure>

<div class="row clearfix">
	<div class="list-item col-sm-3">
		<label>A.) <input type="text" class="check-input" data-ansindex="7" data-hintindex="5">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>B.) <input type="text" class="check-input" data-ansindex="8" data-hintindex="6">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>C.) <input type="text" class="check-input" data-ansindex="9" data-hintindex="7">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>D.) <input type="text" class="check-input" data-ansindex="10" data-hintindex="8">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<p class="bold margin-top-lg">The thymus is considered a ________________ lymphoid organ.</p>
<div class="row clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A560/A-Mysterious-Mass/ans/primary" class="btn btn-default">Primary</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A560/A-Mysterious-Mass/ans/secondary" class="btn btn-default">Secondary</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A560/A-Mysterious-Mass/ans/tertiary" class="btn btn-default">Tertiary</a>
	</div>
</div>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>