<?php

require_once("templates/config.php");

$pageTitle = "My Brain on Anatomy";
$section = "none";
include(ROOT_PATH . "templates/header.php"); ?>

<div class="hero-unit">
  <h1>A560 Histology Cases</h1>
</div>

<div class="container">
<div class="row cases margin-top-lg">
  <h2>Cases</h2>
  <div class="col-md-4 margin-top-lg">
    <a class="round-img" href="/A-Mysterious-Mass/pg/1"><img src="assets/img/mm-pg1.png"></a>
    <h3><a href="/A-Mysterious-Mass/pg/1">A Mysterious Mass</a></h3>
    <p class="italic">A 33-year-old male presents with an anterior mediastinal mass…</p>
    <a href="/A-Mysterious-Mass/references">References</a>
  </div>
  <div class="col-md-4 margin-top-lg">
    <a class="round-img" href="/The-Suspicious-Lesion/pg/1"><img src="assets/img/tsl-pg1.png"></a>
    <h3><a href="/The-Suspicious-Lesion/pg/1">The Suspicious Lesion</a></h3>
    <p class="italic">A 57-year-old female is evaluated for a mammogram with a suspicious lesion…</p>
    <a href="/The-Suspicious-Lesion/references">References</a>
  </div>
  <div class="col-md-4 margin-top-lg">
    <p class="italic">While working in the emergency room one evening, an unconscious 58-year-old male is rushed into the scene…</p>
    <a class="round-img" href="/A-Night-in-the-ER/pg/1"><img src="assets/img/UL.png"></a>
    <h3><a href="/A-Night-in-the-ER/pg/1">A Night in the E.R.</a></h3>
    <a href="/A-Night-in-the-ER/references">References</a>
  </div>
</div>

<div class="row extras margin-top-lg">
  <h2>Learn More about the Cases</h2>
  <div class="col-md-4 margin-top-lg">
    <a class="round-img" href="/Learning-Objectives"><img src="assets/img/mm-pg1.png"><i class="icon ion-ios-checkmark-empty"></i></a>
    <h3><a href="/Learning-Objectives">Learning Objectives</a></h3>
    <p>View the learning objectives for these cases and see which cases the objectives can be found.</p>
  </div>
  <div class="col-md-4 margin-top-lg">
    <a class="round-img" href="javascript:void(0)"><img src="assets/img/tsl-pg1.png"><i class="icon ion-ios-help-empty"></i></a>
    <h3>What is a flipped class?</h3>
    <p>Watch this <a class="video-link" href="//www.youtube.com/watch?v=iQWvc6qhTds">video</a> explaining what a flipped 
    class is, and then check out this 
    <a target="_blank" href="//elearninginfographics.com/what-is-a-flipped-classroom-infographic-plus-the-educator-guide-to-flipped-classroom/">infographic</a>
     to learn more about flipped classes.</p>
  </div>
  <div class="col-md-4 margin-top-lg">
    <a class="round-img" href="javascript:void(0)"><img src="assets/img/UL.png"><i class="icon ion-ios-cloud-download-outline"></i></a>
    <h3>Download Links</h3>
    <p>Download the HAPS 2015 Workshop Presentation as a <a href="files/pptx.php">.pptx file</a>, 
    a <a href="files/ppt.php">.ppt file</a>, or a <a href="files/pdf.php">.pdf file</a>.</p>
  </div>

<?php include(ROOT_PATH . "templates/footer.php"); ?>

