<?php
require_once("../templates/config.php");
$str = file_get_contents("problems.json");
$problems = json_decode($str, true);
$pageTitle = "Histo Cases | Pre-Test";
include(ROOT_PATH . "templates/header.php"); ?>

	<h1>This is a Pre-Test for the Histology cases.</h1>
	<div class="list-group">
		<?php foreach ($problems as $qstnIndex => $problem) { ?>
			<div class="list-group-item">
				<h4 class="list-group-item-heading"><?php echo ($qstnIndex + 1) . ".) " . $problem["text"]; ?></h4>
				<?php if( isset( $problem["img"] ) ) { ?>
					<img src="<?php echo BASE_URL; ?>assets/img/<?php echo $problem["img"]; ?>">
				<?php } ?>
				<?php foreach ($problem["options"] as $answIndex => $answer) { ?>
					<label class="list-group-item-text" for="q<?php echo $qstnIndex + 1; ?>-<?php echo $answIndex; ?>">
						<input type="radio" id="q<?php echo $qstnIndex + 1; ?>-<?php echo $answIndex; ?>" name="q<?php echo $qstnIndex + 1; ?>" value="<?php echo $answIndex; ?>">
						<?php echo $answIndex . ".) " . $answer["text"]; ?>
					</label>
					<br/>
				<?php } ?>
			</div>
		<?php } ?>
		<div class="list-group-item buttons">
			<button class="btn btn-success" id="quizSubmit">Submit</button>
		</div>
	</div>

<?php include(ROOT_PATH . "templates/footer.php"); ?>