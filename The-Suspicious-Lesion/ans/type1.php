<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>Type I collagen is most common and resists tensile stresses.</p>

<p class="margin-top">List some places throughout the body were type I collagen can be found:</p>
<textarea class="check-input" data-hintindex="37"></textarea>
<!--i class="input icon ion-alert-circled"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div-->

<p class="margin-top">Type I collagen is not heavily glycosylated and thus stains <span class="pink">pink</span> with </p>
<input type="text" class="check-input" data-ansindex="35" placeholder="(dye)">
<i class="input icon ion-ios-checkmark"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<a class="back-link" href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/pg/3.php">Go back and reevaluate the dark black lines</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>