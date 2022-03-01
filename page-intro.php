<?php
	$pageHeading = $pageData["$activePage"]["title"];
	$pageContent = $pageData["$activePage"]["content"];

?>

<div class="inner-column">
	<section class="intro <?=$activePage?>">
		<h1><?=$pageHeading?></h1>
		<?=$pageContent?>
	</section>
</div>


