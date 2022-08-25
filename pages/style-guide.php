<?php
	$projectsJson = file_get_contents('data/projectData.json');
	$projects = json_decode($projectsJson, true);
?>

<section class="content">
<div class="inner-column">
	<?php
		if(isset($project["modules"])) {
			foreach($project["modules"] as $module) {
				renderModule($module);
			};
		}
	?>
</div>
</section>