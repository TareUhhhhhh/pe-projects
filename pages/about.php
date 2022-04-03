<?php
	//get json file data
	$file = file_get_contents("pages/about-images.json");
	$images = json_decode($file, true);
	//foreach loop to display images 
?>

<section class='about-gallery'>
	<div class="inner-column">
		<?php
			foreach($images as $image) {
			$imgFile = $image["image"];

			echo "
			<picture>
				<img src='" . $imgFile . "' alt=''>
			</picture>";
			}
		?>
	</div>
</section>