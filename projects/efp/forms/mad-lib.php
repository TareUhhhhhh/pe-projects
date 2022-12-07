<div class="inner-column">
	<?php
		$madlib = "Hi!";
		if ( isset($_POST["submitted"]) ) {
			$descriptor = "That was fun! Go again?";

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
			$descriptor = "Enter words below and get a fun story in return!";
		}
	?>
	
	<section class="info">
		<h2 class='efp attention-voice'>#4 Mad Lib</h2>

		<h3 class='efp info-voice'><?=$descriptor?></h3>
	</section>

	<form method="POST">
		<div class="efp field">
			<label class="calm-voice">Noun: </label>
			<input type="text" name="noun" placeholder="Person place or thing!" required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Verb: </label>
			<input type="text" name="verb" placeholder="Action word!" required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Adjective: </label>
			<input type="text" name="adjective" placeholder="Descriptive word!" required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Adverb: </label>
			<input type="text" name="adverb" placeholder="Descriptive verb!" required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Number: </label>
			<input type="number" name="number" placeholder="#" min=0 required>
		</div>

		<button  type="submit" name="submitted">Give me my story!</button>
	</form>

	<?php
			if (isset($_POST["submitted"])) {
				echo $madlib;
			}
	?>
</div>

