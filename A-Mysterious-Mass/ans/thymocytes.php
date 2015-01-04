<?php

require_once("../../templates/config.php");

$pageTitle = "A Mysterious Mass";

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Thymocytes (aka: T-lymphoblasts) are concentrated in the thymic medulla surrounded by macrophages and thymic epithelial cells (TECs). Thymocytes will eventually differentiate into mature, circulating T-lymphocytes.
<span class="bold">Would you describe the staining of thymocytes as basophilic or eosinophilic? Explain your choice.</span>
</p>
<img src="<?php echo BASE_URL; ?>assets/img/thymocytes.png" class="img-responsive" alt="thymocytes">
<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/pg/3.php">Go back to reconsider the supportive stroma of the thymus</a>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>