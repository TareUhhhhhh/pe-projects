<?php
	// include ('data/project-data.php');
	
	if (isset ($_GET['id'])) {
		$projectDetail = $_GET['id'];
	}
	$json = file_get_contents('data/project-data.json');
	$projects = json_decode($json, true);

	foreach ($projects as $project) {
		if ($projectDetail == $project['id']) {
			$title = $project['title'];
			$image = $project['image'];
			$media = $project['media'];
			$description = $project['description'];
		}
	}
?>

<project-detail>
	<h1><?=$title?></h1>

	<picture>
		<img src="<?=$image?>" alt="<?=$title?>">
	</picture>

	<h2>Media Used: <?=$media?></h2>

	<p><?=$description?></p>
</project-detail>