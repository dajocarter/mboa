<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>The thymus parenchyma has a lobular arrangement of cortical caps surrounding medullary tissue that may resemble a lymphatic nodule with a germinal center in a lymph node. However, notice in the slide below the lack of lymphoid nodules in the cortex that are seen in the patient’s slide.</p>

<p class="bold">Can you label the following thymus slide?</p>
<img src="<?php echo BASE_URL; ?>assets/img/thymus.png" class="img-responsive" alt="thymus">

<p><a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/pg/1.php">Go back and reassess the patient’s slide</a></p>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>