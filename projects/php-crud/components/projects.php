<?php

include ('data/project-data.php');
foreach ($projects as $project) { 
	$title = $project["title"];
	$image = $project['image'];
	$medium = $project['media'];
	$description = $project['description'];
?>

<article class="project">
	<h1><?=$title?></h1>

	<picture>
		<img src="<?=$image?>" alt="<?=$title?>">
	</picture>

	<h2>Medium Used: <?=$medium?></h2>

	<p><?=$description?></p>
</article>

<?php
}