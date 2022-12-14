<section class="hero">
<div class="inner-column">
	<?php include('modules/hero.php'); ?>
</div>
</section>

<section class="spotlight">
<div class="inner-column">
	<?php include('modules/graphic-diptych.php') ?>
</div>
</section>

<section class="new-releases">
<div class="inner-column">
	<?php 
		$heading = "New Releases";
		$paragraph = "New albums every single month, check out the newest & best from Snyder Recording artist, now available on Apple Music & Spotify.";
		include('modules/components/text-content.php'); 

		include('modules/slider.php');
	?>
</div>
</section>

<section class="location">
	<?php include('modules/components/map.php'); ?>
</section>

<section-get-in-touch>
<div class="inner-column">
	<?php include('modules/contact-us.php'); ?>
</div>
</section-get-in-touch>