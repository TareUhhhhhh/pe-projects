
<style>
	ul, ol {
/*		list-style: none;
		margin: 0;
		padding: 0;*/
	}

	.monster {
		margin-top:  20px;
	}

	card {
		display: block;
		border: 1px solid gray;
		padding: 10px;
	}

	h2, h3 {
		display: inline;
	}
</style>

<?php

$monstersData = file_get_contents('monsters.json');
$monsters = json_decode( $monstersData, true);




echo "<ul class='monster-list'>";

foreach ($monsters as $monster) {
	$name = $monster["name"]["english"];
	$id = $monster["id"];
	$
	foreach ("type" as "types") {
		"types" = $monster["type"];
	};

	echo "<li class='monster'>
				<card>
					<h2>$id</h2>
					<h3>$name</h3>
					<h4>"types"</h4>
				</card>
			</li>";
}

echo "</ul>";



echo "<pre>";
var_dump( $monsters );
echo "</pre>";