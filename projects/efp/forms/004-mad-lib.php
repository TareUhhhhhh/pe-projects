<head><link rel='stylesheet' href='../../../css/style.css'></head>

<div class="inner-column">
	<?php
		$madlib = "Hi!";
		if ( isset($_POST["submitted"]) ) {
			$descriptor = "Here is your Madlib!";

			if (isset($_POST["noun"])) {
				$noun = $_POST["noun"];
			}

			if (isset($_POST["verb"])) {
				$verb = $_POST["verb"];
			}

			if (isset($_POST["adjective"])) {
				$adjective = $_POST["adjective"];
			}

			if (isset($_POST["adverb"])) {
				$adverb = $_POST["adverb"];
			}

			if (isset($_POST["number"])) {
				$number = $_POST["number"];
			}

			$madlib = "<p>When you have " . $number . " " . $adjective . " " . $noun . "s, you have to " . $verb . " very " . $adverb . "!</p>";
		}
		else {
			$descriptor = "Enter your words below, please!";
		}
	?>

	<h1>#4 Mad Lib</h1>

	<form method="POST">
		<h2><?=$descriptor?></h2>

		<?php
			if (isset($_POST["submitted"])) {
				echo $madlib;
			}
		?>

		<div class="field">
			<label>Noun: </label>
			<input type="text" name="noun" placeholder="Person place or thing!" required>
		</div>

		<div class="field">
			<label>Verb: </label>
			<input type="text" name="verb" placeholder="Action word!" required>
		</div>

		<div class="field">
			<label>Adjective: </label>
			<input type="text" name="adjective" placeholder="Descriptive word!" required>
		</div>

		<div class="field">
			<label>Adverb: </label>
			<input type="text" name="adverb" placeholder="Descriptive verb!" required>
		</div>

		<div class="field">
			<label>Number: </label>
			<input type="number" name="number" placeholder="#" min=0 required>
		</div>

		<button type="submit" name="submitted">Give me my story!</button>
	</form>
</div>