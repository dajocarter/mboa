<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php");

?>

<p>Correct! Although the lymph node is not physically compartmentalized, it does show three functional regions. The paracortex is the region situated between the cortex and the medulla. Although its boundaries are not clearly delineated, this region can be distinguished by its lack of lymphoid nodules and by the presence of unique blood vessels.</p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/3pics.png" class="img-responsive" alt="">
	<figcaption></figcaption>
</figure>


<p class="bold margin-top">What is the name of the unique blood vessels found in the paracortex of lymph nodes?</p>
<input type="text" class="check-input" data-ansindex="21">
<i class="input icon ion-ios-checkmark"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<p class="bold margin-top">Why were these vessels named in this way?</p>
<textarea class="check-input" data-hintindex="44"></textarea>
<i class="input icon ion-alert-circled"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<p class="bold margin-top">What is the <span class="underline">function</span> of these vessels?</p>
<textarea class="check-input" data-hintindex="45"></textarea>
<i class="input icon ion-alert-circled"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<p class="bold margin-top">Histology Scavenger Hunt!</p>
<p>Take a screenshot of a high endothelial venule in the paracortex, from <a target="_blank" href="//medsci.indiana.edu/junqueira/virtual/msci_42_5.html">Slide 42: Lymph Node, H&amp;E</a>. Then go <a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/pg/7.php">learn the flow of lymph through a node</a>.</p>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>