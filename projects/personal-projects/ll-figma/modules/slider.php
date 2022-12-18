<release-slider data-flickity='{ "pageDots": false, "initialIndex": 1 }'>
	<?php 
		foreach([1, 2, 3] as $card) {
			include('components/slider-card.php');
		} 
	?>
</release-slider>