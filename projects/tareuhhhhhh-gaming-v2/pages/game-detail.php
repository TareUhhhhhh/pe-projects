<?php
	if (isset($_GET["game"])) {
		$route = $_GET["game"];
	}
	
	include("game-info.php");

	foreach ($games as $game) {
		if ($game["id"] == $route) {
			$detail = $game;

		}
	}
?>

<section class="game-detail">
	<inner-column>
		<h1><?=$detail["title"]?></h1>

		<picture>
			<img src="https://peprojects.dev/alpha-3/tara/projects/tareuhhhhhh-gaming-v2/images/<?=$detail["image"]?>">
		</picture>

		<p><?=$detail["longDescription"]?></p>
	</inner-column>
</section>

