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
		<intro-content>
			<h1 class='title'><?=$detail["title"]?></h1>

			<picture class='preview'>
				<img src="https://peprojects.dev/alpha-3/tara/projects/tareuhhhhhh-gaming-v2/images/<?=$detail["image"]?>">
			</picture>
		</intro-content>

		<text-content>
			<p class='description'><?=$detail["longDescription"]?></p>
		</text-content>
	</inner-column>
</section>

