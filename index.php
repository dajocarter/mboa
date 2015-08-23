<?php

require_once("templates/config.php");

$pageTitle = "My Brain on Anatomy";
$section = "none";
include(ROOT_PATH . "templates/header.php"); ?>

<div class="row">
  <h1>Check out my Histology Cases!</h1>
  <ul class="list">
    <li>
      <a href="/Learning-Objectives">Learning Objectives</a>
    </li>
    <li>
      <a href="/Pre-Test">Pre-Test</a>
    </li>
    <li>Cases
      <ul>
        <li>
          <a href="/A-Mysterious-Mass/pg/1.php">A Mysterious Mass</a>
          <br><span class="italic">A 33-year-old male presents with an anterior mediastinal mass…</span>
          <ul>
            <li>
              <a href="/A-Mysterious-Mass/references.php">References</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="/A-Night-in-the-ER/pg/1.php">A Night in the E.R.</a>
          <br><span class="italic">While working in the emergency room one evening, an unconscious 58-year-old male is rushed into the scene…</span>
          <ul>
            <li>
              <a href="/A-Night-in-the-ER/references.php">References</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="/The-Suspicious-Lesion/pg/1.php">The Suspicious Lesion</a>
          <br><span class="italic">A 57-year-old female is evaluated for a mammogram with a suspicious lesion…</span>
          <ul>
            <li>
              <a href="/The-Suspicious-Lesion/references.php">References</a>
            </li>
          </ul>
        </li> 
      </ul>
    </li>
    <li>What is a flipped class?
      <ul>
        <li>
          <a target="_blank" href="//elearninginfographics.com/what-is-a-flipped-classroom-infographic-plus-the-educator-guide-to-flipped-classroom/">What is a Flipped Classroom Infographic</a>
        </li>
        <li>
          <a target="_blank" href="//www.youtube.com/watch?v=iQWvc6qhTds">Flipping the Classroom: Explained</a>
        </li>
      </ul>
    </li>
    <li>Download the HAPS 2015 Workshop Presentation
      <ul>
        <li>
          <a href="files/pptx.php">Download as .pptx</a>
        </li>
      </ul>
    </li>
  </ul>

<?php include(ROOT_PATH . "templates/footer.php"); ?>

