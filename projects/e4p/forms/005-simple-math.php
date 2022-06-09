<!-- PSEUDOCODE 
Two number values entered by user - entries will be strings and need to be converted to float
Use each converted string number to do 4 different math equations
-->
<head><link rel='stylesheet' href='../../../css/style.css'></head>


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
<h1>EFP</h1>
<h2>Simple Math</h2>
<form method='POST'>
	<h3>Enter two numbers to do some math!</h3>

	<label>First number: </label>
	<input type="number" name='firstNumber' placeholder='#' required>

	<label>Second number: </label>
	<input type="number" name='secondNumber' placeholder='#' required>

	<button method='submit' name='submitted'>Let's Do Math!</button>
</form>

<?php
	if(isset($_POST['submitted'])) {
?>
	<h2>Addition: <?=$firstNumber?> + <?=$secondNumber?> = <?=$addition?></h2>
	<h2>Subtraction: <?=$firstNumber?> - <?=$secondNumber?> = <?=$subtraction?></h2>
	<h2>Multiplication: <?=$firstNumber?> * <?=$secondNumber?> = <?=$multiplication?></h2>
	<h2>Division: <?=$firstNumber?> / <?=$secondNumber?> = <?=$division?></h2>
<?php	} ?>