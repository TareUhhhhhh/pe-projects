<head><link rel='stylesheet' href='../../../css/style.css'></head>

<?php
	if (isset($_POST['submitted'])) {
		if (isset($_POST['widthFeet'])) {
			$widthFeet = floatval($_POST['widthFeet']);
		}

		if (isset($_POST['widthInches'])) {
			$widthInches = floatval($_POST['widthInches']);
		}

		if(isset($_POST['lengthFeet'])) {
			$lengthFeet = floatval($_POST['lengthFeet']);
		}

		if(isset($_POST['lengthInches'])) {
			$lengthInches = floatval($_POST['lengthInches']);
		}

		$totalWidth = ($widthFeet * 12) + $widthInches;
		$totalLength = ($lengthFeet * 12) + $lengthInches;

		$totalArea = $totalWidth * $totalLength; //inches
		$totalArea = $totalArea / 12 / 12; //back to feet

		$gallons = ceil($totalArea / 350); //350 sqft per gallon
	}
?>

<div class="inner-column">
	<h1 class="efp">EFP</h1>

	<h2 class="efp">#9 Paint Calculator</h2>

	<form method="POST">
		<h3 class="efp">Enter room dimensions to calculate how much paint is needed to paint the ceiling.</h3>

		<div class="efp field">
			<label>Room width: </label>

			<input type="number" name='widthFeet' placeholder='feet' value='<?=$widthFeet?>' min='1' step='1' required>

			<input type="number" name='widthInches' value='<?=$widthInches?>' placeholder='inches' min='0' step='1' required>
		</div>

		<div class="efp field">
			<label>Room Length: </label>

			<input type="number" name='lengthFeet' placeholder='feet' value='<?=$lengthFeet?>' min='1' step='1' required>

			<input type="number" name='lengthInches' placeholder='inches' value='<?=$lengthInches?>' min='0' step='1' required>
		</div>

		<button input='submit' name='submitted'>Calculate</button>


	</form>

	<?php if (isset($_POST['submitted'])) { ?>
		<p>You will need <?=$gallons?> gallon(s) of paint for the ceiling.</p>
	<?php } ?>


</div>