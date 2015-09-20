<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>Correct! The primary lymphoid organs include the bone marrow and thymus, while secondary lymphoid organs include: spleen, lymph nodes, and MALT. Dense aggregations of MALT can be found in:</p>
<div class="row clearfix">
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

<p><span class="bold">Periarteriolar lymphoid sheath (PALS)</span> surrounds the central arteriole playing an important role in immunological surveillance.</p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/collagen.png" class="img-responsive" alt="collagen">
	<figcaption></figcaption>
</figure>

<p class="bold">PALS are formed <span class="underline">mainly</span> from:</p>
<div class="row clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/b-lymph" class="btn btn-default">B-Lymphocytes</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/t-lymph" class="btn btn-default">T-Lymphocytes</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/macrophages" class="btn btn-default">Macrophages</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>