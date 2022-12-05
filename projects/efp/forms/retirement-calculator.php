<?php
	if (isset($_POST["submitted"])) {
		if (isset($_POST["currentAge"])){
			$currentAge = $_POST["currentAge"];
		}
		if(isset($_POST['retireAge'])) {
			$retireAge = $_POST['retireAge'];
		}

		$yearsLeft = $retireAge - $currentAge;
	}
?>

<div class="inner-column">
	<h2 class='efp attention-voice'>#6 Retirement Calculator</h2>
	<form class='efp' method='POST'>
		<h3 class='efp info-voice'>Enter your current age and the age you want to retire, and find out when that can happen!</h3>

		<div class="efp field">
			<label class="calm-voice">What is your current age?</label>
			<input type="number" name='currentAge' min='0' required value=<?php if(isset($_POST["currentAge"])) { echo $currentAge;}?>>
		</div>

		<div class="efp field">
			<label class="calm-voice">What age do you want to retire?</label>
			<input type="number" name='retireAge' min='0' required value=<?php if(isset($_POST["retireAge"])){echo $retireAge;}?>>
		</div>

		<button class='efp' input='submit' name='submitted'>Submit</button>
	</form>

	<?php
		if(isset($_POST["submitted"])) {
	?>

	<p class="efp">You are currently <?=$currentAge?> years old and would like to retire at age <?=$retireAge?>. That is another <?=$yearsLeft?> years!</p>

	<?php } ?>
</div>