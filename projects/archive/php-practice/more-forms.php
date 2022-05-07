<?php 

$numberOne = 0;
$numberTwo = 0;

if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["numberOne"]) ) {
		$numberOne = $_POST["numberOne"];
	}

	if ( isset($_POST["numberTwo"]) ) {
	$numberTwo = $_POST["numberTwo"];
	}

	$total = floatval($numberOne) + floatval($numberTwo);
	$diff = floatval($numberOne) - floatval($numberTwo);
	$product = floatval($numberOne) * floatval($numberTwo);
	$quotient = floatval($numberOne) / floatval($numberTwo);

	echo "<p>Total: $total </p>
			<p>Difference: $diff </p>
			<p>Product: $product </p>
			<p>Quotient: $quotient </p>";
}
?>

<form method='POST'>
	<p>Calca-tater</p>

	<label for="number">Pick a number</label>
	<input type="number" name='numberOne' value="<?=$numberOne?>">

	<label for="number">Pick another number</label>
	<input type="number" name ='numberTwo' value="<?=$numberTwo?>">

	<input type="submit" name='submitted'>
</form>