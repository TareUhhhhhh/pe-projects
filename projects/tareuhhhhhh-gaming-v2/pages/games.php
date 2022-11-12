<section class='welcome'>
<inner-column>

	<?php include('modules/graphic-diptych.php'); ?>

		<video autoplay muted loop class="myVideo">
		  <source src="images/ink.mp4" type="video/mp4">
		</video>

</inner-column>
</section>

<section class="games">
	<all-games>
		<?php
		include("game-info.php");

		foreach ($games as $game) {
		include("game-display.php");
		}
	?>
	</all-games>
</section>
	


