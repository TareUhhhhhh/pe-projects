<?php
	$pageHeading = $pageData["$activePage"]["title"];
	$pageContent = $pageData["$activePage"]["content"];

?>

<section class="intro <?=$activePage?>">
	<div class="inner-column">
		<h1><?=$pageHeading?></h1>
		<?=$pageContent?>		
	</div>
</section>



