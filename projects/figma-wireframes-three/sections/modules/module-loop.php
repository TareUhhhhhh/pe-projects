<?php
	$json = file_get_contents("data/data.json");
	$pageData = json_decode($json, true);
?>

<?php	foreach($pageData["modules"] as $module) { ?>

	<section class="has-<?=$module['type']?>">
	<div class="inner-column">
		<?php	
			$filePath = "sections/modules/$module[type].php";
			
			if ($module && file_exists($filePath)) {
				include($filePath);
			}
		?>
	</div>
	</section>

<?php } ?>
