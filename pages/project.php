<?php
	//If project query = slug from json file 

	$file = file_get_contents("pages/projectData.json");
	$projects = json_decode($file, true);

	foreach($projects as $project) {
		if ($_GET["project"] == $project["slug"]) {
			$activeProject = $project["title"];
		}
	}



?>


<section>
	<div class="inner-column">
		<h1><?=$activeProject?></h1>

		<h2>Case Study</h2>
	</div>
</section>

<section>
	<div class="inner-column">
		<p>Case study information here</p>

		<p>More info pulling in from file</p>
	</div>
</section>