<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Thymocytes (aka: T-lymphoblasts) are concentrated in the thymic medulla surrounded by macrophages and thymic epithelial cells (TECs). Thymocytes will eventually differentiate into mature, circulating T-lymphocytes.</p>

<div class="margin-top">
	<p class="bold">Would you describe the staining of thymocytes as basophilic or eosinophilic?</p>
	<input type="text" class="check-input" data-ansindex="16">
	<i class="icon ion-ios-checkmark input"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<div class="margin-top">
	<p class="bold">Explain your choice.</p>
	<textarea class="check-input" data-hintindex="14"></textarea>
	<!--i class="icon ion-alert-circled input"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div-->
</div>

<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/MM-Thymocytes.png" class="img-responsive" alt="thymocytes">
	<figcaption></figcaption>
</figure>

<a class="back-link" href="<?php echo BASE_URL; ?>A-Mysterious-Mass/pg/3.php">Go back to reconsider the supportive stroma of the thymus</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>