<div class="inner-column">
	<h2 class='efp attention-voice'>#3 Printing Quotes</h2>

	<?php
		if (isset($_POST["submitted"])) {
			if (isset($_POST["quote"])) {
				$quote = $_POST["quote"];
			}
			if (isset($_POST["name"])) {
				$name = $_POST["name"];
			}
		}
	?>

	<form method="POST">
		<h3 class='efp info-voice'>Enter quote info below and the page will display it.</h3>

		<div class="efp field">
			<label class="calm-voice">Type Quote: </label>
			<input type="text" name="quote" required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Who said it?</label>
			<input type="text" name="name" required>
		</div>

		<button  class='efp' method="submit" name="submitted">Submit</button>
	</form>

	<?php
		if (isset($_POST["submitted"])) {
			echo "<p class='efp'>\"" . $quote . "\" was said by " . $name . ".</p>";
		}
	?>
</div>