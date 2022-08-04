<?php
	
	foreach($project["highlights"] as $highlights){
	//decode each line to read as true?
		//	if svg = true, echo svg
		// if html = true, echo html
	}

?>


<project-card>
	<section class='project-intro'>
		<h2><?=$project["title"]?></h2>

		<picture>
			<img src='<?=$project["image"]?>'>
		</picture>
	</section>

	<!-- <h3><?=$project["highlights"]?></h3> -->

	<section class="project-description">
		<p><?=$project["teaser"]?></p>

		<a href="?page=project&project=<?=$project["slug"]?>">Case Study</a>
	</section>
</project-card>











