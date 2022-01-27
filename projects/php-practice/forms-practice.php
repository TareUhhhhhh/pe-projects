
<? php

$guests = 0;
$berries = 0;

if ( isset($_POST["submitted"]) ) {

	if ( isset($_POST["guests"]) ) {
		if ( $_POST["guests"] >= 0 ) {
			$guests = $_POST["guests"];
		}
	}

	if  ( isset($_POST["berries"]) ) {
		if ( $_POST["berries"] >= 0 ) {
			$berries = $_POST["berries"];
		}
	}

	$total = floatval($guests) * floatval($berries);

	echo "<p class='feedback'>$total</p>";
}

?>


<form method='POST'>
	<p>Calculating the berries!</p>

	<div class="field">
		<label>Number of guests</label>
		<input type='number' name='guests' value='3'>
	</div>

	<div class="field">
		<label>Number of Berries</label>
		<input type='number' name='berries' value='6'>
	</div>

	<button type='submit' name='submitted'>
		Push Me!
	</button>
</form>



