<?php
	$page = $_GET['page'];

	if ($_GET['page'] == "project") {
		$pageData = getRecordBySlug($_GET["project"]);
	}
	
	else {
		$json = file_get_contents("data/pages/$page.json");
		$pageData = json_decode($json, true);
	}
?>


<?php if(isset($pageData["modules"])) { ?>
	<?php	foreach($pageData["modules"] as $module) { ?>

		<section class="has-<?=$module['type']?>">
		<div class="inner-column">
			<?php	
				$filePath = "modules/$module[type].php";
				
				if ($module && file_exists($filePath)) {
					include($filePath);
				}
			?>

		</div>
		</section>

	<?php } ?>
<?php } ?>
