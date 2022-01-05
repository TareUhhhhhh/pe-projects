<?php

	$students = [
		[
			"id" => "tara",
			"name" => "TareUhhhhhh",
			"intro" => "A person who makes things.",
			"link" => "Check it out!",
		],
		[
			"id" => "folder-name",
			"name" => "Your Name HERE!",
			"intro" => "Tell us why we should check out your site.",
			"link" => "Clicky clack",
		],
		[
			"id" => "sheriff",
			"name" => "Sheriff Derek",
			"intro" => "Someone's got to design this town.",
			"link" => "Giddy Up",
		]
	];

	foreach ($students as $student) {
		echo "<h1>" . $student["name"] . "</h1> <p>" . $student["intro"] . "<p>
			<a href='https://peprojects.dev/alpha-3/" . $student["id"] . "'>" . $student["link"] . "</a>";
	}

?>

<h1>The Net of the A-Threem</h1>