<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>Hassall’s corpuscles are large (up to 100 um!) keratinized concentric aggregates of thymic epithelial cells found in the medulla. Although their function is not completely understood, they do secrete <input type="text"><span class="italic">(name for small signaling proteins)</span> that promote T-lymphocyte development.</p>
<img src="<?php echo BASE_URL; ?>assets/img/hassall.png" class="img-responsive" alt="hassall">
<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/3.php">Go back to reconsider the supportive stroma of the thymus</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>