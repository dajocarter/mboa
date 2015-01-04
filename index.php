<?php

require_once("templates/config.php");

$pageTitle = "My Brain on Anatomy";
$section = "none";
include(ROOT_PATH . "templates/header.php"); ?>

  <div class="row">
    <h1>Check out my Histology Cases!</h1>
    <ul>
      <li>
        <a href="/Pre-Test">Pre-Test</a>
      </li>
      <li>
        <a href="/A-Mysterious-Mass/pg/1.php">A Mysterious Mass</a>
      </li>
      <li>
        <a href="/A-Night-in-the-ER/pg/1.php">A Night in the E.R.</a>
      </li>
      <li>
        <a href="/The-Suspicious-Lesion/pg/1.php">The Suspicious Lesion</a>
      </li>
    </ul>
</div>

<?php include(ROOT_PATH . "templates/footer.php"); ?>

