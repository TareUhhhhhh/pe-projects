<!-- PAGE NOT IN USE -->

<?php
	//get json file data
	$file = file_get_contents("pages/about-images.json");
	$images = json_decode($file, true);
	//foreach loop to display images 
?>

<section class='about'>
	<div class="inner-column">
		<h2>More About Me</h2>

		<p>Outside of building websites and creating cool/fun/efficiency things, I'm actually a human being! I have interests and hobbies just like anyone else.</p>

		<p>I like to crochet, cross stitch, play video games, paint with watercolor and acrylics, among many other creative endeavors! Check out some of my favorites <span class='below'>below</span><span class='right'>to the right</span>!</p>


		<div class="about-gallery">
			<?php
				foreach($images as $image) {
				include('modules/image-card.php');
				}
			?>
		</div>
	</div>
</section>