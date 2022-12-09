<section class='welcome'>
<inner-column>

	<?php	include('modules/graphic-diptych.php'); ?>

	<video autoplay muted loop class="myVideo">
	  <source src="images/world.mp4" type="video/mp4">
	</video>
</inner-column>
</section>

<section class="signin">
<inner-column>
	<sign-in>
		<form class="signin" method="POST">
			<div class="field">
				<label for="username">Username: </label>

				<input type="text" for="username">
			</div>

			<div class="field">
				<label for="password">Password: </label>

				<input type="password" for="password">
			</div>

			<button class="button" input="submit">Sign In</button>
		</form>
	</sign-in>
</inner-column>
</section>