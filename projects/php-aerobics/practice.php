<?php 

$normalOne = ["Grayson", "boy", 8, "stinky", "sweet"];
$normalTwo = ["Grant", "boy", 35, "stinky", "stinkybutt"];
$normalThree = ["Tara", "mom", 33, "tired", "rude"];

$anotherArray = [
	$normalOne = ["Grayson", "boy", 8, "stinky", "sweet"],
	$normalTwo = ["Grant", "boy", 35, "stinky", "stinkybutt"],
	$normalThree = ["Tara", "mom", 33, "tired", "rude"],
];

$enjoy = [
	"animal" => "cats",
	"food" => "mashed potatoes",
	"fun" => "video games",
	"hobby" => "crochet",
	"tv" => "ghost shows!",
];

$dislike = [
	"sport" => "football",
	"food" => "tomatoes",
	"people" => true,
	"smells" => "farts",
];

$family = [
	"mom" => "Tara",
	"grant" => "Grant",
	"child" => "Grayson",
	"cat" => "Hershel",
];

$normalOne[4] = "TURD BUTT";
$normalTwo[0] = "William";
array_push($normalOne,"2ndgrade");
array_push($normalTwo, "injured");
unset($enjoy["tv"]);
unset($dislike["smells"]);
$family["dog"] = "Michonne";
$dislike["work"] = true;
$enjoy["relaxing"] = true;
$family["house"] = "too small";

echo "$normalOne[4] $normalOne[3] $normalTwo[0] $normalTwo[2]";

echo "<br>" . $enjoy["animal"] . $enjoy["hobby"] . $dislike["sport"] . $dislike["food"];

var_dump($normalOne);
var_dump($normalTwo);
var_dump($normalThree);
var_dump($enjoy);
var_dump($dislike);
var_dump($family);
var_dump($anotherArray);