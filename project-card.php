<?php

// $dead?
	
	foreach($project["highlights"] as $highlights) {
	//decode each line to read as true?
		//	if svg = true, echo svg
		// if html = true, echo html
	}

?>


<project-card>
	<h2 class="attention-voice">
		<?=$project["title"]?>sadfsd	
	</h2>

	<picture>
		<img src='<?=$project["image"]?>'>
	</picture>

	<!-- <h3><?=$project["highlights"]?></h3> -->

	<p class="teaser"><?=$project["teaser"]?></p>

	<p class="description"><?=$project["description"]?></p>

	<a href="projects/<?=$project["slug"]?>" target='site'>Link</a>
</project-card>
