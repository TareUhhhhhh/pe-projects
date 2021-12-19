<style>
	h1, img, h2 {
		padding-left: 20px;
	}

	picture {
		display: block;
	}

	img {
		max-width: 400;
	}

	.name {
		padding-top: 50px;
	}

	monster-card {
		display: grid;
	}
</style>

<?php

	$codey = [
		"id" => 6597,
		"name" => "Codey",
		"favoriteFood" => "Coleslaw",
		"age" => 7,
		"adopted" => true,
		"portrait" => "images/codey.jpg"
	];

	$limabean = [
		"id" => 5713,
		"name" => "Limabean",
		"favoriteFood" => "Lima beans",
		"age" => 4,
		"adopted" => false,
		"portrait" => "images/limabean.jpg"
	];

	$reads = [
		"id" => 4763,
		"name" => "Miss Reads-a-lot",
		"favoriteFood" => "Lasagna",
		"age" => 9,
		"adopted" => false,
		"portrait" => "images/miss-reads-a-lot.jpg"
	];

	$monsters = [$codey, $limabean, $reads];

	foreach ($monsters as $monster) {
		echo "<monster-card><h1 class='name'>" . $monster["name"] . "</h1><picture><img src=" . $monster["portrait"] . "></picture><h2 class='info'>Age: " . $monster["age"] . "<h2 class='food'>Favorite Food: " . $monster["favoriteFood"] . "</h2>";

		if ($monster["adopted"] == true) {
			echo "<h2 class='adopted'>Status: I found a family!</h2></monster-card>";
		}
		else {
			echo "<h2 class='available'>Status: Still available for a family!</h2></monster-card>";
		}
	}