<?php

	$info = [37, "banana", true, "Jigglypuff"];

	echo "I would like to eat " . $info[0] . " " . $info[1] . "s.";


	$codey = [
		"id" => 6597,
		"name" => "Codey",
		"favoriteFood" => "Mountain Dew Code Red",
		"age" => 7,
		"adopted" => true,
	];

	$limabean = [
		"id" => 5713,
		"name" => "Limabean",
		"favoriteFood" => "lima beans",
		"age" => 4,
		"adopted" => false,
	];

	$reads = [
		"id" => 4763,
		"name" => "Miss Reads-a-lot",
		"favoriteFood" => "lasagna",
		"age" => 9,
		"adopted" => false,
	];

	$monsters = [$codey, $lima, $reads];

	$story = $monster["name"] . " is " . $monster["age"] . " years old and his favorite food is " . $monster["favoriteFood"] . ".";

	$template = "<p id=" . $monster["id"] . ">" . $story . "</p>";

	foreach ($monsters as $monster) {
		echo $template;
	}

	$pets = ["Alfred", "Luna", "Michonne", "Hershel"];

		echo "<ol>";

	foreach ($pets as $pet) {
		echo "<li>" . $pet . "</li>";
	}

		echo "</ol>";