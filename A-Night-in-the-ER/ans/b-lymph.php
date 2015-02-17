<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>B-cells form primary and secondary lymphoid nodules (follicles) adjacent to the central artery. Larger lymphoid nodules may contain a germinal center, displacing the central arteriole to the nodule’s periphery (see Junqueira, Fig. 14-23b).</p>
<p class="bold">Can you label the following slide of a secondary lymphoid follicle in the spleen?</p>
<img src="<?php echo BASE_URL; ?>assets/img/hassall.png" class="img-responsive" alt="hassall">
<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/6.php">Go back to reconsider the cells forming PALS.</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>