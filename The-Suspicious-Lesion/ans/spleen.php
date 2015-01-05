<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>The spleen’s parenchyma is organized into distinct regions of red and white pulp, which may closely resemble a cortex and medulla of other organs. Note however, that the red and white pulp of the spleen is somewhat uniformly distributed throughout the organ and not organized into distinct layers seen in the patient’s slide.</p>

<p class="bold">Can you label the following slide of the spleen?</p>
<img src="<?php echo BASE_URL; ?>assets/img/spleen.png" class="img-responsive" alt="spleen">

<p><a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/pg/1.php">Go back and reassess the patient’s slide</a></p>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>