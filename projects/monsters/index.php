
<?php

	$codey = [
		"id" => 6597,
		"name" => "Codey",
		"favoriteFood" => "coleslaw",
		"age" => 7,
		"adopted" => true,
		"portrait" => "https://peprojects.dev/images/portrait.jpg"
	];

	$limabean = [
		"id" => 5713,
		"name" => "Limabean",
		"favoriteFood" => "lima beans",
		"age" => 4,
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/portrait.jpg"
	];

	$reads = [
		"id" => 4763,
		"name" => "Miss Reads-a-lot",
		"favoriteFood" => "lasagna",
		"age" => 9,
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/portrait.jpg"
	];

	$monsters = [$codey, $limabean, $reads];

	foreach ($monsters as $monster) {

	$story = $monster["name"] . " is " . $monster["age"] . " years old and loves to eat " . $monster["favoriteFood"] . "!";

	$template = "<p class='monster'" . $monster["id"] . ">" . "<img src=" . $monster["portrait"] . "width=200>" . $story . "</p>";

		echo $template;
	}

	

