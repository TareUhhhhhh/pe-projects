<?php
	//get json file data
	$file = file_get_contents("pages/about-images.json");
	$images = json_decode($file, true);
	//foreach loop to display images 
?>

<?php 
	include('pages/about.php');
?>