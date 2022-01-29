<?php 

	$itemOnePrice = 0;
	$itemOneQuantity = 0;
	$itemTwoPrice = 0;
	$itemTwoQuantity = 0;
	$itemThreePrice = 0;
	$itemThreeQuantity = 0;

	if ( isset($_POST["submitted"]) ) {

		if ( isset($_POST["itemOnePrice"]) ) {
			if ($_POST["itemOnePrice"] >= 0 ) {
				$itemOnePrice = $_POST["itemOnePrice"];
			}
		}

		if ( isset($_POST["itemOneQuantity"]) ) {
			if ($_POST["itemOneQuantity"] >= 0 ) {
				$itemOneQuantity = $_POST["itemOneQuantity"];
			}
		}

		if ( isset($_POST["itemTwoPrice"]) ) {
			if ($_POST["itemTwoPrice"] >= 0 ) {
				$itemTwoPrice = $_POST["itemTwoPrice"];
			}
		}

		if ( isset($_POST["itemTwoQuantity"]) ) {
			if ($_POST["itemTwoQuantity"] >= 0 ) {
				$itemTwoQuantity = $_POST["itemTwoQuantity"];
			}
		}

		if ( isset($_POST["itemThreePrice"]) ) {
			if ($_POST["itemThreePrice"] >= 0 ) {
				$itemThreePrice = $_POST["itemThreePrice"];
			}
		}

		if ( isset($_POST["itemThreeQuantity"]) ) {
			if ($_POST["itemThreeQuantity"] >= 0 ) {
				$itemThreeQuantity = $_POST["itemThreeQuantity"];
			}
		}	

	$itemOneTotal = floatval($itemOnePrice) * floatval($itemOneQuantity);
	$itemTwoTotal = floatval($itemTwoPrice) * floatval($itemTwoQuantity);
	$itemThreeTotal = floatval($itemThreePrice) * floatval($itemThreeQuantity);

	$subtotal = $itemOneTotal + $itemTwoTotal + $itemThreeTotal;

	$tax = $subtotal * 0.055;

	$total = $subtotal + $tax;

	echo "<h3>You have purchased $itemOneQuantity of item One at $$itemOnePrice for a total of $$itemOneTotal</h3>
			<h3>You have purchased $itemTwoQuantity of item Two at $$itemTwoPrice for a total of $$itemTwoTotal</h3>
			<h3>You have purchased $itemThreeQuantity of item Three at $$itemThreePrice for a total of $$itemThreeTotal</h3>

			<h2>Subtotal: $$subtotal

			<h2>Tax: $$tax

			<h1>Total:$$total</h1>";
}

?>

<form method="POST">
	<h2>Item One</h2>
	
	<div>
		<label>Price</label>
		<input type="number" name="itemOnePrice" value="0">
	</div>

	<div>
		<label>Quantity</label>
		<input type="number" name="itemOneQuantity" value="0">
	</div>

	<h2>Item Two</h2>

	<div>
		<label>Price</label>
		<input type="number" name="itemTwoPrice" value="0">
	</div>

	<div>
		<label>Quantity</label>
		<input type="number" name="itemTwoQuantity" value="0">
	</div>

	<h2>Item Three</h2>

	<div>
		<label>Price</label>
		<input type="number" name="itemThreePrice" value="0">
	</div>

	<div>
		<label>Quantity</label>
		<input type="number" name="itemThreeQuantity" value="0">
	</div>

	<input type="submit" name="submitted">

</form>