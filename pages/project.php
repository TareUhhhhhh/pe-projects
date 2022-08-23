<?php
	$project = getRecordBySlug($_GET["project"]);
?>

	<div class="inner-column">
		<h2><?=$project["title"]?></h2>
	</div>

<section class='project-info'>
	<div class="inner-column">

		<?php
		//This refers to any sort of repeatable kind of content which can be displayed in the prjectData json file -- need to revisit to figure out how to set this up
			if(isset($project["modules"])) {
				foreach($project["modules"] as $module) {
					renderModule($module);
				};
			}
		?>
 
		<?php include('modules/project-links.php'); ?>
	</div>
</section>


