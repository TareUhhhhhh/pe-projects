<section class='welcome'>
<inner-column>

	<?php include('modules/graphic-diptych.php'); ?>

	<video autoplay muted loop class="myVideo">
	  <source src="images/tree.mp4" type="video/mp4">
	  	<!-- Video by <a href="https://pixabay.com/users/christianbodhi-9869182/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=video&amp;utm_content=134913">Christian Bodhi</a> from <a href="https://pixabay.com//?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=video&amp;utm_content=134913">Pixabay</a> -->
	</video>

</inner-column>
</section>

<section class='spotlight'>
<inner-column>

	<?php 
		$ctaHeading = "Our Newest Release";
		$ctaText = "Action, adventure, drama, thrills, chills and scares! Not the latest Blumhouse film, but an all new game from TareUhhhhhh Gaming! It's called After Dusk!";
		$prompt = "Dare to play?";
		$link = "?page=detail&game=after-dusk";
		include('modules/call-to-action.php'); 
	?>

</inner-column>
</section>

<section class="other-games">
<inner-column>
	<?php include('modules/game-grid.php') ?>
</inner-column>
</section>

<section class="our-team">
<div class="shadow">
<inner-column>
	<?php 
		$pageContent["heading"] = "Join The Masters";
		$pageContent["intro"] = "Our team of storytellers, environment creaters and character developers are the best of the best, in our own biased opinion. (That's why we hired them after all!) Join our growing company and join the fun.";
		$pageContent['image'] = "images/gamer.jpg";
		include("modules/graphic-diptych.php")
	?>
</inner-column>
</div>
</section>

<section class='not-ready'>
<inner-column>

	<?php 
		$ctaHeading = "Not ready for the terror?";
		$ctaText = "Our developers specialize in the creepy and crawly, but they know their way around the cutesy and adorable as well. Stay tuned for more from the land of Mary Mint and Joy.";
		$prompt = "Care to play?";
		$link = "?page=detail&game=mary-mint-and-joy";
		include('modules/call-to-action.php'); 
	?>

</inner-column>
</section>
