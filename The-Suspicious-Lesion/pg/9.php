<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php");

?>

	<p>Correct! Lymphedema is an accumulation of interstitial fluid in the affected region.</p>
	<p class="bold">How would a complete axillary node dissection (CAD) lead to lymphedema?</p>
	<textarea></textarea>

	<div class="clearfix">
		<div class="ninecol first">
			<p>You alleviate your patient’s unease by explaining that the margins of her positive lymph nodes were free of disease after the SNL biopsy and a CAD is not necessary. As an additional measure, you advise for a bone and liver scan. Luckily no additional metastasis was seen.</p>

			<p class="bold">From the original histology slide, what vessels were infiltrated with tumor cells?</p>
			<textarea></textarea>
		</div>
		<img src="<?php echo BASE_URL; ?>assets/img/table.png" class="img-responsive threecol last" alt="">
	</div>

	<p>Your eventual diagnosis is infiltrating ductal carcinoma with micrometastasis. Based on the case presented, select your patient’s stage of breast cancer.</p>


	<table>
		<thead>
			<tr>
				<th colspan="3">Staging of Breast Cancer</th>
			</tr>
			<tr>
				<th>Stage</th>
				<th>Circumstances</th>
				<th>5-yr Survival</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/stage0.php">Stage 0</a></td>
				<td>Duct cell or lobular in situ</td>
				<td>92%</td>
			</tr>
			<tr>
				<td><a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/stage1.php">Stage I</a></td>
				<td>Invasive carcinoma, &lt;2 cm <br> No metastasis</td>
				<td>87%</td>
			</tr>
			<tr>
				<td><a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/stage2.php">Stage II</a></td>
				<td>Invasive carcinoma, &lt;5 cm <br> Involved axillary nodes <br> No distant metastasis</td>
				<td>75%</td>
			</tr>
			<tr>
				<td><a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/stage3.php">Stage III</a></td>
				<td>Invasive cancer >5cm, with nodal involvement <br> Any cancer with ipsilateral internal mammary node involvement <br> Any cancer with chest wall fixation, skin or pectoral involvement, inflammatory carcinoma <br> No distant metastasis</td>
				<td>46%</td>
			</tr>
			<tr>
				<td><a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/stage4.php">Stage IV</a></td>
				<td>Any cancer with distant metastasis (including ipsilateral supraclavicular lymph nodes)</td>
				<td>13%</td>
			</tr>
		</tbody>
	</table>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>