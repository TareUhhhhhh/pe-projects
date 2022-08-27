<?php
	$pageHeading = $module["title"];
	$pageContent = $module["subtitle"];
	$activePage = $pageData["slug"];
?>

<section class="intro <?=$activePage?>">
	<article class="intro-content">
		<h1><?=$pageHeading?></h1>
		<?=$pageContent?>	
	</article>	
</section>

