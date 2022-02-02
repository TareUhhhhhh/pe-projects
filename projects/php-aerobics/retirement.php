<style>
	p, label {
		padding: 10px;
		line-height: 1.5;
	}

	input {
		margin: 10px;
	}
</style>

<?php
	if ( isset($_POST["submitted"])) {

		if ( isset($_POST["currentAge"])) {
			$currentAge = $_POST["currentAge"];
		};

		if ( isset($_POST["retireAge"])) {
			$retireAge = $_POST["retireAge"];
		};

		$timeLeft = floatval($retireAge) - floatval($currentAge);
		$currentYear = date("Y");
		$retireYear = floatval($currentYear) + floatval($timeLeft);

		echo "<p> You are currently $currentAge years old. <br> 
		If you would like to retire at the age of $retireAge then you have $timeLeft years until you can retire. <br>
		You will be able to retire in $retireYear";
	}
?>


<form method="POST">
	<div>
		<label>
			What is your current age?
		</label>
		<input type="number" name="currentAge">		
	</div>

	<div>
		<label>
			At what age do you want to retire?
		</label>
		<input type="number" name="retireAge">
	</div>

	<input type="submit" name="submitted">	
</form>