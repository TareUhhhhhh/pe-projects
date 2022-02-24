<?php

	//Get contents from json file
	$projectData = file_get_contents('pages/projectData.json');
	$projects = json_decode($projectData, true);
	//sanity check
	// echo $projects;

	//for each project, echo a project card.

	foreach ($projects as $project) {
		include('pages/project-card.php');
	}

	// var_dump($projects);