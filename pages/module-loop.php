<?php 
	if (isset($_GET['project'])) {
		$page = $_GET['project'];

		$json = file_get_contents("data/pages/$page.json");
		$pageData = json_decode($json, true);
	}

	else	if (isset($_GET['page'])) {
		$page = $_GET['page'];

			// if ($_GET['page'] == "project") {
			// 	$pageData = getRecordBySlug($_GET["project"]);
			// }
		$json = file_get_contents("data/pages/$page.json");
		$pageData = json_decode($json, true);
	}

	else { 
		$page = "home"; 

		$json = file_get_contents("data/pages/$page.json");
		$pageData = json_decode($json, true);
	}

	if(isset($pageData["modules"])) { 
		foreach($pageData["modules"] as $module) {
			$moduleName = $module["type"];
		}
	}
?>

<section class="has-<?=$moduleName?>">
<div class="inner-column">
	<?php if(isset($pageData["modules"])) { ?>
		<?php	foreach($pageData["modules"] as $module) { ?>

			<?php	$filePath = "modules/$module[type].php"; ?>
				
				<?php
					if ($module && file_exists($filePath)) {
						include($filePath);
				?>
			<?php	} ?>
		<?php } ?>
	<?php } ?>
</div>
</section>