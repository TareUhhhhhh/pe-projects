<div class="inner-column">
	<section class="info">
		<h2 class='efp attention-voice' >#1 Hello, World</h2>

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

		<h3 class='efp info-voice' ><?=$message?></h3>
	</section>

	<section class="php-version display">	
		<h3 class="medium-voice">PHP</h3>

		<form method="POST">
			<label for="name1" class='calm-voice'>Name: </label>
			<input   type="text" id="name1" placeholder="Type your name here" required>

			<button method="submit" name="submitted">Submit</button>
		</form>

		<p  >Hello, <?=$name?>! Nice to meet you!</p>
	</section>

	<section class="js-version display">
		<h3 class="medium-voice">JS</h3>

		<form id="hello" method="POST">
			<label for="name2" class="calm-voice">Enter Name</label>
			<input type="text" id="name2" placeholder="Type your name here">

			<button type="submit">Submit</button>
		</form>
		<script src="forms/scripts/hello-world.js"></script>
	</section>

</div>