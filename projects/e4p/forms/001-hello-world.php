<!-- PSEUDOCODE

INPUT: Name
PROCESS: Set variable from INPUT
OUTPUT: "Hello, $name, nice to meet you!" -->
<head><link rel='stylesheet' href='../../../css/style.css'></head>

<div class="inner-column">
	<h1 class='efp' >EFP</h1>

	<h2 class='efp' >#1 Hello, World</h2>

	<?php
		$name = "Anonymous";

		if (isset($_POST["name"])) {
			$name = $_POST["name"];

			$message = "Try again if you want. Enter another name or make one up!";
		}

		else {
			$message = "Enter your name to get a personalized message!";
		}
	?>

	<h3 class='efp' ><?=$message?></h3>


	<form method="POST" class='efp' >
		<label class='efp' >Name: </label>
		<input  class='efp' type="text" name="name" placeholder="Type your name here" required>

		<button  class='efp' method="submit" name="submitted">Submit</button>
	</form>

	<p class='efp' >Hello, <?=$name?>! Nice to meet you!</p>

</div>