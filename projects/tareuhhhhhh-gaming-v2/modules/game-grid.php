<h1>Other TareUhhhhhh Gaming Titles</h1>

<game-grid>
	<?php
		$json = file_get_contents("data/game-grid.json");
		$pageData = json_decode($json, true);

		foreach ($pageData as $game) { 
			$title = $game["title"];
			$image = $game["image"];
			$teaser = $game["teaser"];
			$genres = $game["genres"];
	?>

		<game-card>
			<picture>
				<img src="<?=$image?>">
			</picture>

			<h1 class="title"><?=$game["title"]?></h1>

			<h2 class="genre">
				<?php foreach ($genres as $genre) { ?>
					<?=$genre?> 
				<?php } ?>
			</h2>
		</game-card>

	<?php	} ?>

</game-grid>