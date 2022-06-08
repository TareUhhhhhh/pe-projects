<head><link rel='stylesheet' href='../css/style.css'></head>

<div class="inner-column">
	<h1>#2 Character Count</h1>

	<?php
		if (isset($_POST["submitted"])) {
			$inputString = $_POST["inputString"];

			echo "<p><span>$inputString</span> has " . strlen($inputString) . " characters.</p>";
		}
	?>

	<form method="POST">
		<h2>Type some stuff and find out how many characters there are.</h2>

		<label>Type some stuff: </label>
		<input type="text" name="inputString" placeholder="Ready to count!">

		<button method="submit" name="submitted">Submit</button>
	</form>
</div>