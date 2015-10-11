<?php

require_once("../../../templates/config.php");

include(ROOT_PATH . "/A560/A-Mysterious-Mass/index.php"); 

?>

<p>Correct! Primary lymphoid organs include the thymus and 
	<input type="text" class="check-input" data-ansindex="14">
	<i class="icon ion-ios-checkmark input"></i>
</p>

<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/MM-Pg3.png" class="img-responsive" alt="">
	<figcaption></figcaption>
</figure>

<p class="margin-top">What is the function of the thymus?</p>
<textarea class="check-input" data-hintindex="12"></textarea>
<i class="icon ion-alert-circled input"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<p class="margin-top-lg">Although considered a primary lymphoid organ, the thymus does not contain a stroma of reticulin fibers like many lymphoid organs. Instead, the supporting stroma arises from:</p>

<div class="row margin-top clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A560/A-Mysterious-Mass/ans/hassall" class="btn btn-default">Hassall’s corpuscles</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A560/A-Mysterious-Mass/ans/epi_cells" class="btn btn-default">Epithelioreticular cells</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A560/A-Mysterious-Mass/ans/thymocytes" class="btn btn-default">Thymocytes</a>
	</div>
</div>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>
