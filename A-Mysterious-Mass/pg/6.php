<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<div class="img-split grid-container clearfix">
	<div class="list-item first half">
		<p>Awesome! Those lymphocytes that recognize MHC pass the positive selection test in the cortex and move onto the negative selection (clonal deletion) test in the medulla.</p>
		<p class="bold">What is negative selection?</p> 
		<textarea class="check-input" data-hintindex="22"></textarea>
		<i class="input icon ion-alert-circled"></i>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item last half">
		<img src="<?php echo BASE_URL; ?>assets/img/mm-negative-selection.png">
	</div>
</div>

<h3>Histo Scavenger Hunt!</h3>
<p>Take a snapshot of a thymic (Hassall’s) corpuscle in the medulla, from <a href="//medsci.indiana.edu/histo/virtual/msci_76.html">Slide 76: Thymus, H&amp;E.</a></p>


<p>Normally the thymus involutes with age.</p>
<p class="bold">What is the difference between <a href="//medsci.indiana.edu/histo/virtual/msci_123.html">Slide 123 Thymus, H&amp;E</a> and <a href="http://medsci.indiana.edu/histo/virtual/msci_126.html">Slide 126 Thymus, H&amp;E</a>?</p>
<div>
	<textarea class="check-input" data-hintindex="23"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p>The results from a blood test that you ordered are in. <a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/pg/7.php">Go check-in with your patient.</a></p>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>
