<?php
	$pageHeading = $pageData["$activePage"]["title"];
	$pageContent = $pageData["$activePage"]["content"];

?>

<section class="intro <?=$activePage?>">
	<div class="inner-column">
		<article class="intro-content">
			<h1><?=$pageHeading?></h1>
			<?=$pageContent?>	
		</article>	
	</div>
</section>



