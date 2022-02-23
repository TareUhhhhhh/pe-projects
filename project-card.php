<?php
	
	foreach($project["highlights"] as $highlights){
	//decode each line to read as true?
		//	if svg = true, echo svg
		// if html = true, echo html
	}

?>


<project-card>
	<h2><?=$project["title"]?></h2>

	<picture>
		<img src='<?=$project["image"]?>'>
	</picture>

	<!-- <h3><?=$project["highlights"]?></h3> -->

	<p><?=$project["teaser"]?></p>

	<p><?=$project["description"]?></p>

	<a href="projects/<?=$project["slug"]?>" target='site'>Link</a>
</project-card>













