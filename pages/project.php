<?php
	$project = getRecordBySlug($_GET["project"]);
?>

<section>
	<div class="inner-column">
		<h1><?=$project["title"]?></h1>

		<h2>Case Study</h2>
	</div>
</section>

<section>
	<div class="inner-column">
		<?php
			if(isset($project["sections"])) {
				foreach($project["sections"] as $section) {
					echo $section["type"];
				};
			}
		?>
	</div>
</section>





