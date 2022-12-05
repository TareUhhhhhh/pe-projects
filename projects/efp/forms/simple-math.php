<?php
	if (isset($_POST['submitted'])) {
		if(isset($_POST['firstNumber'])) {
			$firstNumber = $_POST['firstNumber'];
		}
		if(isset($_POST['secondNumber'])) {
			$secondNumber = $_POST['secondNumber'];
		}
		$addition = $firstNumber + $secondNumber;
		$subtraction = $firstNumber - $secondNumber;
		$multiplication = $firstNumber * $secondNumber;
		$division = $firstNumber / $secondNumber;
	}
?>
<div class="inner-column">
	<h2 class='efp'>#5 Simple Math</h2>
	<form class='efp' method='POST'>
		<h3>Enter two numbers to do some math!</h3>

		<div class="efp field">
			<label>First number: </label>
			<input type="number" name='firstNumber' placeholder='#' required>
		</div>

		<div class="efp field">
			<label>Second number: </label>
			<input type="number" name='secondNumber' placeholder='#' required>
		</div>

		<button class='efp' method='submit' name='submitted'>Let's Do Math!</button>
	</form>

	<?php
	if(isset($_POST['submitted'])) {
	?>
		<p class='efp'>Addition: <?=$firstNumber?> + <?=$secondNumber?> = <?=$addition?></p>
		<p class='efp'>Subtraction: <?=$firstNumber?> - <?=$secondNumber?> = <?=$subtraction?></p>
		<p class='efp'>Multiplication: <?=$firstNumber?> * <?=$secondNumber?> = <?=$multiplication?></p>
		<p class='efp'>Division: <?=$firstNumber?> / <?=$secondNumber?> = <?=$division?></p>
	<?php	} ?>
</div>