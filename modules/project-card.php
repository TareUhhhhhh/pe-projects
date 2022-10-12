<?php
	$title = $module["title"];
	$teaser = $module["teaser"];
	$slug = $module["slug"];
?>


<project-card>

	<h2 class="title attention-voice"><?=$title?></h2>

	<p class="teaser"><?=$teaser?></p>

	<a class="button" href="?page=project&project=<?=$slug?>">
		Case Study
	</a>

</project-card>
