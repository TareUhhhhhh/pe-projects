<div class="inner-column">
	<section class="info">
		<h2 class='attention-voice'>#3 Printing Quotes</h2>

		<h3 class='info-voice'>Enter quote info below and the page will display it.</h3>
	</section>

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
		<div class="field">
			<label class="calm-voice">Type Quote: </label>
			<input type="text" name="quote" required>
		</div>

		<div class="field">
			<label class="calm-voice">Who said it?</label>
			<input type="text" name="name" required>
		</div>

		<button   method="submit" name="submitted">Submit</button>
	</form>

	<?php
		if (isset($_POST["submitted"])) {
			echo "<p >\"" . $quote . "\" was said by " . $name . ".</p>";
		}
	?>
</div>