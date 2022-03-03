<?php 
	include("functions.php");

	// if (!empty($_COOKIE['theme'])){
	// 	if ($_COOKIE['theme'] == 'dark') {
	// 	$theme = 'dark';
	// 	}
	// 	else if ($_COOKIE['theme'] == 'light') {
	// 		$theme = 'light';
	// 	}
	// 	else {
	// 		$theme = 'light';
	// 	}
	// }

	//If there is a "page" value, then assign that to $activePage variable
	if (isset($_GET["page"])) {
		$activePage = $_GET["page"];
	} else {
		$activePage = "home";
	}

	include('header.php');
	include('images/crossbones.svg');
	include('images/brushstroke-green.svg');

	//when $activePage = Projects - echo Projects info
	//when $activePage = Writing - echo Writing info

	if($activePage != "project") { //If this is not a detail page -- then include intro file
		include('page-intro.php');
	}

	renderPage($activePage);
	
	include('footer.php');
?>