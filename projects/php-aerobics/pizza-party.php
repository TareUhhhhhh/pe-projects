<!-- pseudocode

Total Pizzas
Total Slices = $slices * $pizza

Need to round down # of slices
Then figure out how many slices are left over


// -->

<style>
	p, label {
		padding: 10px;
	}

	input {
		margin: 10px;
	}
</style>

<?php
	if (isset($_POST["submitted"])) {
		if(isset($_POST["people"])) {
			$people = $_POST["people"];
			$people = floatval($people);
		}

		if(isset($_POST["pizza"])) {
			$pizza = $_POST["pizza"];
			$pizza = floatval($pizza);
		}

		if(isset($_POST["slices"])) {
			$slices = $_POST["slices"];
			$slices = floatval($slices);
		}

		$totalSlices = $pizza * $slices / $people;

		echo $totalSlices;
	}
?>

<form method="POST">
	<div>
		<label>
			How many people are coming?
		</label>
		<input type="number" name="people">
	</div>

	<div>
		<label>
			How many pizzas will you order?
		</label>
		<input type="number" name="pizza">
	</div>

	<div>
		<label>
			How many slices per pizza?
		</label>
		<input type="number" name="slices">
	</div>

	<input type="submit" name="submitted">
</form>