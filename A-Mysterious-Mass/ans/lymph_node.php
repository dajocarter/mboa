<?php

require_once("../../templates/config.php");

$pageTitle = "A Mysterious Mass";

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Lymph nodes do have a capsule extending trabeculae into the parenchyma that is densely packed with lymphocytes. Lymph nodes also have morphologically distinct regions, however notice the lack of a paracortex, medullary cords, medullary sinuses, and lymphoid follicles in the patient’s slide that are seen in lymph nodes. 
<span class="bold">Can you label the following lymph node slide?</span></p>
<img src="<?php echo BASE_URL; ?>assets/img/lymph_node.png" class="img-responsive" alt="lymph_node">
<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/pg/1.php">Return to investigate the slide from the mysterious mediastinal mass</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>