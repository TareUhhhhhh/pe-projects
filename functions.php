<?php

//If project query = slug from json file 

	// $file = file_get_contents("pages/projectData.json");
	// $projects = json_decode($file, true);

	// foreach($projects as $project) {
	// 	if ($_GET["project"] == $project["slug"]) {
	// 		$activeProject = $project["title"];
	// 	}
	// }

	function getRecordBySlug($slug) {
		//get json file records
		//decode json file records
		//look through the records  
		//when you find the right one, get it
		//Now we have it --
		$file = file_get_contents("data/projectData.json");
		$projects = json_decode($file, true);
		// var_dump($projects);

		foreach($projects as $project) {
			if ($project["slug"] == $slug) {
				return $project;
			}
		}
	}

		//GET page template
	function renderPage($pageName) {
		$filePath = "pages/$pageName.php";
		if ($pageName && file_exists($filePath)) {
			include($filePath);
		}
	}

	function renderModule($module) {
		$filePath = "pages/modules/$module[type].php";
		if ($module && file_exists($filePath)) {
			include($filePath);
		}
	}

	function enableErrorReporting() {
		error_reporting(E_ALL);
		ini_set('display_errors', '1');
	}

	enableErrorReporting();

	function show($things) {
	echo "<code class='show-code'>";
	echo '<pre>';
	print_r($things);
	echo '</pre>';
	echo '</code>';
	}