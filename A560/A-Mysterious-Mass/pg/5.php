<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/A-Mysterious-Mass/index.php"); 

?>

<p>Correct! <span class="bold">Adaptive immunity</span>, also known as acquired immunity, develops gradually over time in response to specific <span class="italic">antigens</span> (such as proteins, polysaccharides or molecular components of bacteria, viruses, or tumor cells) displayed on antigen presenting cells (APCs) and presented to B- and T-lymphocytes.</p>
<p class="bold margin-top">Why is this system slow to respond initially but faster with subsequent infections?</p> 
<div>
	<textarea class="check-input" data-hintindex="20"></textarea>
	<i class="icon ion-alert-circled input"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>


<p class="margin-top">Although T-lymphoblasts (thymocytes) develop and mature in the thymus, they do not originate there.</p>
<p class="bold">Where are these cells originally created?</p> 
<div>
	<input type="text" class="check-input" data-ansindex="14">
	<i class="icon ion-ios-checkmark input"></i>
</div>

<div class="img-split margin row clearfix">
	<div class="list-item col-sm-6">
		<ul class="left">
			<li>Thymocytes that arrive to the thymus are considered to be in the double-negative stage and do not posses a T-cell receptor (TCR), CD4, or CD8 glycoproteins until they proliferate and begin differentiation in the cortex.</li>
			<li>Eventually both CD4 and CD8 are expressed (double-positive stage).</li>
			<li>These naïve thymocytes are schooled before they are released into circulation, undergoing a two-stage selection process that begins in the cortex with positive (clonal) selection.</li>
		</ul>
	</div>
	<div class="list-item col-sm-6">
		<figure>
			<img class="img-responsive" src="<?php echo BASE_URL; ?>assets/img/mm-positive-selection.png">
			<figcaption>Source: <a target="_blank" href="//accessiblebiosci.blogspot.com/2013/08/negative-selectivi-t-dzhagalov-et-al.html">http://accessiblebiosci.blogspot.com/2013/08/negative-selectivi-t-dzhagalov-et-al.html</a></figcaption>
		</figure>
	</div>
</div>

<p class="bold margin-top">What events occur during positive selection?</p> 
<div>
	<textarea class="check-input" data-hintindex="21"></textarea>
	<i class="icon ion-alert-circled input"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>


<p class="bold margin-top">If lymphocytes pass the positive selection test in the thymic cortex, they move onto their next test in the:</p>

<div class="row margin-top clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/sub_sinus" class="btn btn-default">Subcapsular Sinus</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/paracortex" class="btn btn-default">Paracortex</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>A-Mysterious-Mass/ans/medulla" class="btn btn-default">Medulla</a>
	</div>
</div>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>
