<?php
	$project = getRecordBySlug($_GET["project"]);
?>

	<div class="inner-column">
		<h2><?=$project["title"]?></h2>
	</div>

<section class='project-info'>
	<div class="inner-column">
		<a class='project-link' target='<?=$project['title']?>' href="<?=$project["link"]?>">Live Site</a>
		<a class='github-link' target="<?=$project['gitLink']?>" href="https://github.com/TareUhhhhhh/pe-projects/tree/master/projects/<?=$project['slug']?>">GitHub Link</a>

		<?php
		//This refers to any sort of repeatable kind of content which can be displayed in the prjectData json file -- need to revisit to figure out how to set this up
			if(isset($project["modules"])) {
				foreach($project["modules"] as $module) {
					renderModule($module);
				};
			}
		?>
	</div>
</section>


