<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php");

?>

<p class="bold">Which of the following is the correct order of lymph flow through the lymph node?</p>

<ol class="list">
	<li>Afferent lymphatic vessel &rarr; subcapsular sinus &rarr; medullary sinus &rarr; trabecular sinus &rarr; efferent lymphatic vessel</li>
	<li>Efferent lymphatic vessel &rarr; subcapsular sinus &rarr; trabecular sinus &rarr; medullary sinuses &rarr; afferent lymphatic vessel</li>
	<li>Afferent lymphatic vessel &rarr; high endothelial venule &rarr; subcapsular sinus &rarr; trabecular sinus &rarr; efferent lymphatic vessel</li>
	<li>Afferent lymphatic vessel &rarr; subcapsular sinus &rarr; trabecular sinus &rarr; medullary sinuses &rarr; efferent lymphatic vessel</li> 
</ol>

<div class="grid-container margin-top clearfix">
	<div class="list-item fourth first tablet-first-half">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/flow1.php" class="btn btn-default">Number 1</a>
	</div>
	<div class="list-item fourth tablet-second-half">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/flow2.php" class="btn btn-default">Number 2</a>
	</div>
	<div class="list-item fourth tablet-first-half">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/flow3.php" class="btn btn-default">Number 3</a>
	</div>
	<div class="list-item fourth last tablet-second-half">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/flow4.php" class="btn btn-default">Number 4</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>