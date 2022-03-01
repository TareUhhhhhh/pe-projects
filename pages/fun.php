<?php 

	//Get contents from json file
	$projectData = file_get_contents('data/fun.json');
	$projects = json_decode($projectData, true);
	//sanity check
	// echo $projects;

	//for each project, echo a project card.

	foreach ($projects as $project) {
		include('data/fun-card.php');
	}

	// var_dump($projects);

?>