<section class='welcome'>
<inner-column>

	<?php include('modules/graphic-diptych.php'); ?>

</inner-column>
</section>

<section class='get-involved'>
<inner-column>

	<?php 
		$ctaHeading = "Our Newest Release";
		$ctaText = "Action, adventure, drama, thrills, chills and scares! Not the latest Blumhouse film, but an all new game from TareUhhhhhh Gaming! It's called Spoops and Skills!";
		$prompt = "Dare to play?";
		include('modules/call-to-action.php'); 
	?>

</inner-column>
</section>

<section class="our-team">
<inner-column>
	<?php 
		$pageContent["heading"] = "Join The Masters";
		$pageContent["intro"] = "Our team of storytellers, environment creaters and character developers are the best of the best, in our own biased opinion. (That's why we hired them after all!) Join our growing company with ";
		$pageContent['image'] = "images/gamer.jpg";
		include("modules/graphic-diptych.php")
	?>
</inner-column>
</section>


<section class="spotlight">
<inner-column>
	<?php include('modules/game-grid.php') ?>
</inner-column>
</section>


<section class='not-ready'>
<inner-column>

	<?php 
		$ctaHeading = "Not ready for the terror?";
		$ctaText = "Our developers specialize in the creepy and crawly, but they know their way around the cutesy and adorable as well. Stay tuned for more from the land of Mary Mint and Joy.";
		$prompt = "Care to play?";
		include('modules/call-to-action.php'); 
	?>

</inner-column>
</section>
