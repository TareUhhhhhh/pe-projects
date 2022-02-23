<style>
	p, label, h1, h2, h3 {
		padding: 10px;
	}

	input {
		margin: 10px;
	}
</style>

<?php
	if(isset($_POST["submitted"])) {

		if(isset($_POST["onePrice"])) {
			$onePrice = $_POST["onePrice"];
			$onePrice = floatval($onePrice);
		}

		if(isset($_POST["twoPrice"])) {
			$twoPrice = $_POST["twoPrice"];
			$twoPrice = floatval($twoPrice);
		}

		if(isset($_POST["threePrice"])) {
			$threePrice = $_POST["threePrice"];
			$threePrice = floatval($threePrice);
		}

		if(isset($_POST["oneQuantity"])) {
			$oneQuantity = $_POST["oneQuantity"];
			$oneQuantity = floatval($oneQuantity);
		}

		if(isset($_POST["twoQuantity"])) {
			$twoQuantity = $_POST["twoQuantity"];
			$twoQuantity = floatval($twoQuantity);
		}

		if(isset($_POST["threeQuantity"])) {
			$threeQuantity = $_POST["threeQuantity"];
			$threeQuantity = floatval($threeQuantity);
		}

		$oneSub = $onePrice * $oneQuantity;
		$twoSub = $twoPrice * $twoQuantity;
		$threeSub = $threePrice * $threeQuantity;
		$subtotal = $oneSub + $twoSub + $threeSub;
		$taxAmount = 0.08;
		$tax = $subtotal * $taxAmount;
		$total = $subtotal + $tax;
		number_format((float)$total, 2, '.', '');

		echo 
		"<h3>Item One: $oneQuantity at $$onePrice each for a total of $$oneSub</h3>
			<h3>Item Two: $twoQuantity at $$twoPrice each for a total of $$twoSub</h3>
			<h3>Item Three: $threeQuantity at $$threePrice each for a total of $$threeSub</h3>
			<h2>Subtotal: $$subtotal</h2>
			<h3>Tax: $$tax</h3>
			<h1>Total: $$total</h1>";
	}
?>

<form method="POST">
	<div>
		<label>
			Item One Price:
		</label>
		<input type="number" name='onePrice'>
	</div>

	<div>
		<label>
			Item One Quantity:
		</label>
		<input type="number" name="oneQuantity">
	</div>

	<div>
		<label>
			Item Two Price:
		</label>
		<input type="number" name="twoPrice">
	</div>

	<div>
		<label>
			Item Two Quantity:
		</label>
		<input type="number" name='twoQuantity'>
	</div>

	<div>
		<label>
			Item Three Price:
		</label>
		<input type="number" name='threePrice'>
	</div>

	<div>
		<label>
			Item Three Quantity:
		</label>
		<input type="number" name='threeQuantity'>
	</div>

	<input type="submit" name="submitted">
</form>