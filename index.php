<?php 
	include("functions.php");

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