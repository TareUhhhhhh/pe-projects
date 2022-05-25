<div class="inner-column">
	<h1>Day Two Exercises</h1>
</div>

<div class="inner-column">
	<section class='id-checker'>
		<h2>ID Checker:</h2>

		<?php
		$currentYear = 2022;
		$birthYear = 1989;

		$age = $currentYear - $birthYear;

		echo "<h3>Current Age: " . $age;

		if ($age >= 21) {
			echo "<p>Beer, wine or whiskey??</p>";
			}
		else {
				echo "<p>NO DRINKS FOR YOU!</p>";
			}
	?>
	</section>

	<section class="hotel-key">
		<h2>Hotel Key Access</h2>
		<?php
			$keyCode = 8364;
			$keyCard = 7492;

			if ($keyCode == $keyCard) {
				echo "<p>Access Granted</p>";
			}
			else {
				echo "<p>Access Denied</p>";
			}

		?>
	</section>
</div>