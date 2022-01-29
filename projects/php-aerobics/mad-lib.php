<style>
	h3, div {
		padding: 10px;
	}

	input {
		margin-left: 10px;
	}
</style>

<?php
	if ( isset($_POST["submitted"]) ) {
		if ( isset($_POST["noun"]) ) {
			$noun = $_POST["noun"];
		}

		if ( isset($_POST["verb"]) ) {
			$verb = $_POST["verb"];
		}

		if ( isset($_POST["adjective"]) ) {
			$adjective = $_POST["adjective"];
		}

		if ( isset($_POST["adverb"]) ) {
			$adverb = $_POST["adverb"];
		}


		echo "<h3>If your $noun has the tendency to $verb $adverb then it isn't very $adjective!</h3>";
	}

	
?>

<form method="POST">
	<div>
		<label>Enter a Noun: </label>
		<input type="text" name="noun">
	</div>
	
	<div>
		<label>Enter a verb: </label>
		<input type="text" name="verb">
	</div>

	<div>
		<label>Enter an adjective: </label>
		<input type="text" name="adjective">
	</div>

	<div>
		<label>Enter an adverb: </label>
		<input type="text" name="adverb">
	</div>

	<input type="submit" name="submitted">

</form>