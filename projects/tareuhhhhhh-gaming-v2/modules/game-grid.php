<game-grid>

	<?php
		$json = file_get_contents("data/game-grid.json");
		$pageData = json_decode($json, true);

		foreach ($pageData as $game) { 
			$title = $game["title"];
			$image = $game["image"];
			$teaser = $game["teaser"];
	?>

		<game-card>
			<h1 class="title"><?=$game["title"]?></h1>

			<picture>
				<img src="<?=$image?>">
			</picture>

			<p class="teaser"><?=$teaser?></p>
		</game-card>

	<?php	} ?>

</game-grid>