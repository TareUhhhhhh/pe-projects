<?php 
	foreach ($pageData['modules'] as $modules) {
		if ($modules['type'] == "project-grid") {
			foreach ($modules['projects'] as $projects) {
				$projects = $projects;
			}
		}
	}

?>

<project-grid>
	<?php 
		foreach ($projects as $project) {
			include('pages/project-card.php');
		}
	?>
</project-grid>