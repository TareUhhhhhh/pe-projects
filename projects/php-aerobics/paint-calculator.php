<!-- Pseudocode:

Initialize:
	350 sqft / gallon = paint coverage
	Length of room
	Width of room
	Height of room

Input:
	IF input, get info

Calculations:
	Length * height * 2
	Width * height * 2
	Add Those two = area
	area / paintcoverage = total gallons
	Round up to nearest full gallon

Outputs:
	Total Area: 
	Total Gallons / sqft (rounded up) -->

<?php
//Initialize
	$areaPerGallon = 350;
	$length = 10;
	$width = 12;
	$height = 8;

//If user Input

//Calculations
	function area($l, $w, $h) {
		$lengthArea = $l * $h * 2;
		$widthArea = $w * $h * 2;
		$totalArea = $lengthArea + $widthArea;
		return $totalArea;
	}

	function gallonsNeeded($a, $p) {
		return ceil($a / $p);
	}

	$totalArea = area($length, $width, $height);
	$totalGallons = gallonsNeeded($totalArea, $areaPerGallon);

	$areaMessage = "Total wall area: $totalArea";
	$gallonsMessage = "Total gallons needed: $totalGallons";


	echo $areaMessage;
	echo $gallonsMessage;