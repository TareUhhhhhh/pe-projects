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
	<section class="info">
		<h2 class='efp attention-voice'>#5 Simple Math</h2>

		<h3 class="intro-voice">Enter two numbers to do some math!</h3>
	</section>

	<form  method='POST'>
		<div class="efp field">
			<label class="calm-voice">First number: </label>
			<input type="number" name='firstNumber' placeholder='#' required>
		</div>

		<div class="efp field">
			<label class="calm-voice">Second number: </label>
			<input type="number" name='secondNumber' placeholder='#' required>
		</div>

		<button  method='submit' name='submitted'>Let's Do Math!</button>
	</form>

	<?php
	if(isset($_POST['submitted'])) {
	?>
		<p >Addition: <?=$firstNumber?> + <?=$secondNumber?> = <?=$addition?></p>
		<p >Subtraction: <?=$firstNumber?> - <?=$secondNumber?> = <?=$subtraction?></p>
		<p >Multiplication: <?=$firstNumber?> * <?=$secondNumber?> = <?=$multiplication?></p>
		<p >Division: <?=$firstNumber?> / <?=$secondNumber?> = <?=$division?></p>
	<?php	} ?>
</div>