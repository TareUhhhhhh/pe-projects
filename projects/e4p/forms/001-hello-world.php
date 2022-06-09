<!-- PSEUDOCODE

INPUT: Name
PROCESS: Set variable from INPUT
OUTPUT: "Hello, $name, nice to meet you!" -->
<head><link rel='stylesheet' href='../../../css/style.css'></head>

<div class="inner-column">
	<h1>#1 Hello, World</h1>

	<?php
		$name = "Anonymous";

		if (isset($_POST["name"])) {
			$name = $_POST["name"];

			$message = "Try again if you want. Enter another name!";
		}

		else {
			$message = "Enter your name to get a personalized message!";
		}
	?>

	<h2><?=$message?></h2>


	<form method="POST">
		<label>Name: </label>
		<input type="text" name="name" placeholder="Type your name here" required>

		<button method="submit" name="submitted">Submit</button>
	</form>

	<p>Hello, <?=$name?>! Nice to meet you!</p>

</div>