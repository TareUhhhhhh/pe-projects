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
	<!-- $todo: the HTML don't really work - when PHP is involved -->

	<p><?=$project["teaser"]?></p>

	<p><?=$project["description"]?></p>

	<a href="projects/<?=$project["slug"]?>" target='site'>Link</a>

	<!-- $todo: A screenreader will read "Link: Link" - which isn't going to be very useful. -->
	<!-- include aria-label with the project title to create something like "Read the {{title}} article" -->
	<!-- https://www.youtube.com/watch?v=dnhnSoMEv6Q -->
</project-card>













