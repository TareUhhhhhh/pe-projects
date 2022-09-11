<?php
	$json = file_get_contents("data/data.json");
	$pageData = json_decode($json, true);

	foreach ($pageData["modules"]["components"] as $modules) {
		$components = $modules['components'];
	}
?>

<?php	foreach($components as $component) { ?>

	<section class="has-<?=$component['type']?>">
	<div class="inner-column">
		<?php	
			$filePath = "sections/components/$component[type].php";
			
			if ($component && file_exists($filePath)) {
				include($filePath);
			}
		?>
	</div>
	</section>

<?php } ?>
