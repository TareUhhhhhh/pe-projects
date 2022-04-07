<?php 

	$projectData = file_get_contents('data/fun.json');
	$projects = json_decode($projectData, true);

	foreach ($projects as $project) {
		include('data/fun-card.php');
	}

?>