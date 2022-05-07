<style>
	p, label {
		padding: 10px;
		font-size: 20px;
	}

	input {
		margin: 10px;
	}
</style>

<?php 
	if ( isset($_POST["submitted"])) {

		if ( isset($_POST["numberOne"])) {
			$numberOne = $_POST["numberOne"];
			$numberOne = floatval($numberOne);
		}

		if(isset($_POST["numberTwo"])) {
			$numberTwo = $_POST["numberTwo"];
			$numberTwo = floatval($numberTwo);
		}

		$sum = $numberOne + $numberTwo;
		$difference = $numberOne - $numberTwo;
		$product = $numberOne * $numberTwo;
		$quotient = $numberOne / $numberTwo;

		echo "<p>$numberOne + $numberTwo = $sum</p>
				<p>$numberOne - $numberTwo = $difference</p>
				<p>$numberOne * $numberTwo = $product</p>
				<p>$numberOne / $numberTwo = $quotient</p>";
	}
?>

<form method="POST">
	<div>
		<label>
			Pick a number
		</label>
		<input type="number" name="numberOne">
	</div>

	<div>
		<label>
			Pick another number
		</label>
		<input type="number" name="numberTwo">
	</div>

	<input type="submit" name="submitted">
</form>