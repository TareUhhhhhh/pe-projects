<head><link rel='stylesheet' href='../../../css/style.css'></head>

<div class="inner-column">
	<h1 class='efp'>EFP</h1>

	<h2 class='efp'>#2 Character Count</h2>

	<form method="POST" class='efp'>
		<h3 class='efp'>Type some stuff and find out how many characters there are.</h3>

		<label class='efp'>Type some stuff: </label>
		<input  class='efp'type="text" name="inputString" placeholder="Ready to count!" required>

		<button  class='efp'method="submit" name="submitted">Submit</button>
	</form>

		<?php
		if (isset($_POST["submitted"])) {
			$inputString = $_POST["inputString"];

			echo "<p><span>$inputString</span> has " . strlen($inputString) . " characters.</p>";
		}
	?>
</div>