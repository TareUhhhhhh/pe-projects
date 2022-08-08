<?php
	$project = getRecordBySlug($_GET["project"]);
?>

<section>
	<div class="inner-column">
		<h2><?=$project["title"]?></h2>
	</div>
</section>

<section>
	<div class="inner-column">
		<?php
		<a class='project-link' target='<?=$project['slug']?>' href="../<?=$project["link"]?>">Live Site</a>

		//This refers to any sort of repeatable kind of content which can be displayed in the prjectData json file -- need to revisit to figure out how to set this up
			if(isset($project["sections"])) {
				foreach($project["sections"] as $section) {
					$type = $section["type"]; 

					if ($type == "highlights") { 
						include('highlights.php');
						}
					};
			}
		?>
	</div>
</section>





