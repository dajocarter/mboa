<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>While checking in with your first patient, you are informed that surgeons performed a splenectomy and that the procedure was successful without any complications.</p>

<p class="bold">What are some issues your patient should be aware of after spleen removal and how does the body compensate for the loss of splenic function?</p>
<textarea class="check-input" data-hintindex="36"></textarea>
<i class="input icon ion-alert-circled"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<p>Congratulations! <a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/1">Return to the beginning of the case and play again!</a> Try selecting other options to verify you understand <span class="italic">why</span> an answer was incorrect before moving on.</p>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>