<?php
	//Check the URL and see if there is a value for the key "game" -- if there is, we will route it
	if (isset($_GET["game"])) {
		$route = $_GET["game"];
	}
	
	//Now we need to pull in the data file so we have the array information
	include("game-info.php");

	foreach ($games as $game) {
		if ($game["id"] == $route) { //Once the loop finds the id in the file that matches the route (from the URL) we will use that below - as the detail variable
			$detail = $game;

		}
	}
?>

<section class="game-detail">
	<div class="shadow">
		<picture class='background'>
			<img src="https://peprojects.dev/alpha-3/tara/projects/tareuhhhhhh-gaming-v2/images/<?=$detail["image"]?>">
		</picture>
		<inner-column>
			<intro-content>
				<h1 class='title'><?=$detail["title"]?></h1>
			</intro-content>
		</inner-column>
	</div>
</section>

<section class="game-info">
<inner-column>
	<text-content>
			<p class='important-voice description'><?=$detail["longDescription"]?></p>

			<a class="button" href="#">Buy Now</a>
		</text-content>
</inner-column>
</section>

