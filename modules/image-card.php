<?php
	$imgFile = $image["image"];
	$slug = $image["slug"];
?>

<picture class="<?=$slug?>">
	<img src='<?=$imgFile?>' alt='<?=$slug?>'>
</picture>
