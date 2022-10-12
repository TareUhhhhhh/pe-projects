<?php
	if ($module['type'] == "image-gallery") {
			$images = $module['images'];
		}

	foreach ($images as $image) {
		include('image-card.php');
	}
?>
