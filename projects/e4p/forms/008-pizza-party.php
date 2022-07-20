<head><link rel='stylesheet' href='../../../css/style.css'></head>

<?php
	if (isset($_POST['submitted'])) {
		if (isset($_POST['pizzas'])) {
			$pizzas = $_POST['pizzas'];
		}

		if (isset($_POST['guests'])) {
			$guests = $_POST['guests'];
		}

		$totalSlices = $pizzas * 8;
		$guestSlices = intval($totalSlices) / intval($guests);
		$guestSlices = intval($guestSlices);
		$leftover = intval($totalSlices) - (intval($guestSlices) * $guests);

	}
?>

<div class="inner-column">
	<h1 class="efp">EFP</h1>

	<h2 class="efp">#8 Pizza Party</h2>

	<form method='POST'>
		<h3 class="efp">Enter how many people are attending your pizza party, and how many pizzas you will order. We will calculate how many slices each person can have plus how many leftovers there will be.</h3>

		<h4 class="efp">*(Each pizza will default to 8 slices)</h4>

		<div class="efp field">
			<label>Number of guests: </label>

			<input type="number" name='guests' value='<?=$guests?>' min='1' step='1' required>
		</div>

		<div class="efp field">
			<label>Number of pizzas: </label>

			<input type="number" name='pizzas' value='<?=$pizzas?>' min='1' step='1' required>
		</div>

		<button class="efp" input='submit' name='submitted'>Calculate</button>

		<?php if (isset($_POST['submitted'])) { ?>
			<p class="efp">Each guest can have <?=$guestSlices?> slices.</p>

			<p class="efp">There will be <?=$leftover?> extra slice(s).</p>
		<?php } ?>


	</form>
</div>
