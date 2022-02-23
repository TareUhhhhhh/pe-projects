<!-- pseudocode

Initialize: 
	# of people
	# of pizzas
	# of slices

Input: 
	If input, get input

Calculate:
	# of total slices
	Total slices / people -- round down (no fractions)
	
Generate Message:
	How many pieces per person?
	If leftovers, how many slices?

Output:
	Display messages

// -->

<?php
	$people = "3";
	$pizzas = "2";
	$pizzaSlices = "8";
	$submitted = isset($_POST["submitted"]);

	if ($submitted) {
		if(!empty($_POST["people"])) {
			$people = $_POST["people"];
			$people = floatval($people);
		}

		if(!empty($_POST["pizza"])) {
			$pizza = $_POST["pizza"];
			$pizza = floatval($pizza);
		}

		if(!empty($_POST["slices"])) {
			$slices = $_POST["slices"];
			$slices = floatval($slices);
		}
	}

	$totalSlices = $pizzas * $pizzaSlices;
	$slicesLeft = $totalSlices % $people;
	$peopleSlices = $totalSlices - $slicesLeft;

	$message = "There are $totalSlices total slices and each person will get $peopleSlices slices.";

	function leftoverMessage($slices) {
		if ($slices > 0) {
			return "There will be $slices slices leftover.";
		}
	}
?>

<form method="POST">
	<div>
		<label>
			How many people are coming?
		</label>
		<input type="number" name="people" value="<?=$people?>">
	</div>

	<div>
		<label>
			How many pizzas will you order?
		</label>
		<input type="number" name="pizza" value="<?=$pizzas?>">
	</div>

	<div>
		<label>
			How many slices per pizza?
		</label>
		<input type="number" name="slices" value="<?=$pizzaSlices?>">
	</div>

	<input type="submit" name="submitted">
</form>

<h1><?=$message?></h1>

<?= leftoverMessage($slicesLeft) ?>

<style>
	p, label {
		padding: 10px;
	}

	input {
		margin: 10px;
	}
</style>