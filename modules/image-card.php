<?php
	$file = file_get_contents("pages/about-images.json");
	$images = json_decode($file, true);
	$imgFile = $image["image"];
?>

<picture>
	<img src='<?=$imgFile?>' alt=''>
</picture>