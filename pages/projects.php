<?php

	//Get contents from json file
	$projectData = file_get_contents('pages/projectData.json');
	$projects = json_decode($projectData, true);
	//sanity check
	// echo $projects;

	//for each project, echo a project card.

	

	// var_dump($projects);

?>

<section class="projects">
	<div class="inner-column">
		<?php 
			foreach ($projects as $project) {
				include('pages/project-card.php');
			}
		?>
	</div>
</section>
