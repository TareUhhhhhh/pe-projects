<?php
	$projectsJson = file_get_contents('data/projectData.json');
	$projects = json_decode($projectsJson, true);
?>

<project-grid>
	<?php 
		foreach ($projects as $project) {
			include('pages/project-card.php');
		}
	?>
</project-grid>