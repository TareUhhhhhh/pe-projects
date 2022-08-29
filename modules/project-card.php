<?php
	$title = $module['title'];
	$teaser = $module['teaser'];
	$slug = $module['slug'];
?>


<project-card>
	<section class='project-intro'>
		<h2 class='project-title'><?=$title?></h2>

<!-- 		<picture>
			// <img src='<?=$project["image"]?>'>
		</picture> -->
	</section>

	<section class="project-description">
		<p class='project-teaser'><?=$teaser?></p>

		<a class='project-button' href="?page=project&project=<?=$slug?>">Case Study</a>
	</section>
</project-card>











