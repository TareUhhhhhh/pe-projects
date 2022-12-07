<div class="inner-column">
	<section class="info">
		<h2 class='attention-voice'>#2 Character Count</h2>

		<h3 class='info-voice'>Type some stuff and find out how many characters there are.</h3>
	</section>

	<section class="php-version">
		<form method="POST" >
			<label class='calm-voice'>Type some stuff: </label>
			<input  type="text" name="inputString" placeholder="Ready to count!" required>

			<button method="submit" name="submitted">Submit</button>
		</form>
	</section>

	<?php
		if (isset($_POST["submitted"])) {
			$inputString = $_POST["inputString"];

			echo "<p><span>$inputString</span> has " . strlen($inputString) . " characters.</p>";
		}
	?>
</div>