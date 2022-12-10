<?php
	if (isset($_POST['submitted'])) {
		if (isset($_POST['pizzas'])) {
			$pizzas = $_POST['pizzas'];
		}

		if (isset($_POST['guests'])) {
			$guests = $_POST['guests'];
		}

		if (isset($_POST['slices'])) {
			$slices = intval($_POST['slices']);
		}

		$totalSlices = $pizzas * $slices;
		$guestSlices = intval($totalSlices) / intval($guests);
		$guestSlices = intval($guestSlices);
		$leftover = intval($totalSlices) - (intval($guestSlices) * $guests);
	}
?>

<div class="inner-column">
	<section class="info">
		<h2 class="efp attention-voice">#8 Pizza Party</h2>

		<h3 class="efp intro-voice">Enter how many people are attending your pizza party, and how many pizzas you will order. We will calculate how many slices each person can have plus how many leftovers there will be.</h3>
	</section>

	<form method='POST'>
		<div class="efp field">
			<label class="calm-voice">Number of guests: </label>

			<input type="number" name='guests' value='<?=$guests?>' min='1' step='1' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Number of pizzas: </label>

			<input type="number" name='pizzas' value='<?=$pizzas?>' min='1' step='1' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Number of Slices per Pizza: </label>

			<input type="number" name='slices' value='<?=$slices?>' min='2' step='1' required>
		</div>

		<button  input='submit' name='submitted'>Calculate</button>

		<?php if (isset($_POST['submitted'])) { ?>
			<p >Each guest can have <?=$guestSlices?> slices.</p>

			<p >There will be <?=$leftover?> extra slice(s).</p>
		<?php } ?>


	</form>
</div>
