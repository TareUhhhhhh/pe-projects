<head><link rel='stylesheet' href='../../../css/style.css'></head>

<div class="inner-column">
	<h1>#3 Printing Quotes</h1>

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
		<h2>Enter quote info.</h2>

		<div class="field">
			<label>Type Quote: </label>
			<input type="text" name="quote">
		</div>

		<div class="field">
			<label>Who said it?</label>
			<input type="text" name="name">
		</div>

		<button method="submit" name="submitted">Submit</button>
	</form>

	<?php
		if (isset($_POST["submitted"])) {
			echo "\"" . $quote . "\" was said by " . $name . ".";
		}
	?>
</div>