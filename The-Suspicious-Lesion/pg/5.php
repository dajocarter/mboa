<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>The umbilicus (transumbilical plane) serves as a dividing line for superficial lymphatics. Superior to the umbilicus, lymph drains to axillary nodes. Inferior to the umbilicus lymph drains to the superficial inguinal nodes. The breast is divided into four quadrants. The lateral two quadrants drain into axillary lymph nodes and the medial two quadrants drain into mediastinal lymph nodes.</p>

<img class="img-responsive" src="<?php echo BASE_URL; ?>assets/img/SL-Boobs.png">

<p class="bold">What are the functions of lymph nodes?</p>
<div>
	<textarea class="check-input" data-hintindex="40"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p class="bold">The patient’s slide exhibits numerous structures seen at label A. What is this structure and how did it form?</p>
<div>
	<textarea class="check-input" data-hintindex="41"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>
<img src="<?php echo BASE_URL; ?>assets/img/tsl-pg5.jpg" class="img-responsive" alt="">

<p class="bold">What <span class="underline">region</span> of the lymph node is structure B located in?</p>

<div class="grid-container clearfix">
	<div class="list-item third first">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/cortex.php" class="btn btn-default">Cortex</a>
	</div>
	<div class="list-item third">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/paracortex.php" class="btn btn-default">Paracortex</a>
	</div>
	<div class="list-item third last">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/medulla.php" class="btn btn-default">Medulla</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>