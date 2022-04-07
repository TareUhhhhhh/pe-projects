<?php
	
	foreach($project["highlights"] as $highlights){
	//decode each line to read as true? $todo: ????
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

	<section class="project-description">
		<p><?=$project["teaser"]?></p>

		<p><?=$project["description"]?></p>

		<a href="?page=project&project=<?=$project["slug"]?>">Case Study</a>
		<!-- $todo: A screenreader will read "Link: Link" - which isn't going to be very useful. -->
		<!-- include aria-label with the project title to create something like "Read the {{title}} article" -->
		<!-- https://www.youtube.com/watch?v=dnhnSoMEv6Q -->
	</section>
</project-card>











