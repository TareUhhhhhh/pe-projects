<?php
	
	// foreach($project["highlights"] as $highlights){
	//decode each line to read as true?
		//	if svg = true, echo svg
		// if html = true, echo html
	// }

?>


<project-card>
	<section class='project-intro'>
		<h2 class='project-title'><?=$project["title"]?></h2>

<!-- 		<picture>
			<img src='<?=$project["image"]?>'>
		</picture> -->
	</section>

	<section class="project-description">
		<p class='project-teaser'><?=$project["teaser"]?></p>

		<a class='project-button' href="?page=project&project=<?=$project["slug"]?>">Case Study</a>
	</section>
</project-card>











