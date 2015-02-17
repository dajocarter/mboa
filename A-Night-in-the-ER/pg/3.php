<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

	<p>You realize the patient may become immunologically compromised by this injury from damage to the white pulp.</p>

	<label class="bold">What is white pulp and how does it participate in immunity?<br/>
	<input type="text"></label>

	<p>The patient has lost a massive amount of blood and his vital signs are as follows:</p>
	<table>
		<thead>
			<tr>
				<th rowspan="2">Vitals</th>
				<th rowspan="2">Recorded</th>
				<th colspan="3">Do you think the recorded value is:</th>
			</tr>
			<tr>
				<th>High</th>
				<th>Normal</th>
				<th>Low</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Heart Rate</td>
				<td>104 bpm</td>
				<td><input type="radio" name="heart-rate" value="high"></td>
				<td><input type="radio" name="heart-rate" value="normal"></td>
				<td><input type="radio" name="heart-rate" value="low"></td>
			</tr>
			<tr>
				<td>Blood Pressure</td>
				<td>84/52 mm Hg</td>
				<td><input type="radio" name="blood-pressure" value="high"></td>
				<td><input type="radio" name="blood-pressure" value="normal"></td>
				<td><input type="radio" name="blood-pressure" value="low"></td>
			</tr>
			<tr>
				<td>Respiratory Rate</td>
				<td>18 breaths per minute</td>
				<td><input type="radio" name="resp-rate" value="high"></td>
				<td><input type="radio" name="resp-rate" value="normal"></td>
				<td><input type="radio" name="resp-rate" value="low"></td>
			</tr>
			<tr>
				<td>Body Tempurature</td>
				<td>98.3&deg; F</td>
				<td><input type="radio" name="body-temp" value="high"></td>
				<td><input type="radio" name="body-temp" value="normal"></td>
				<td><input type="radio" name="body-temp" value="low"></td>
			</tr>
			<tr>
				<td>Physical Appearance</td>
				<td>Pale Skin and Overt Shock</td>
				<td colspan="3"></td>
			</tr>
		</tbody>
	</table>

	<p class="bold">Based on this information, and the previous histological analysis, you decide to:</p>

	<div class="answers clearfix">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/CTscan.php" class="sixcol first">Perform a blood transfusion and CT scan the abdomen and pelvis</a>
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/operate.php" class="sixcol last">Rush the patient to the operating room for exploratory surgery and possible splenectomy</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>