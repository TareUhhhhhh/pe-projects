<?php 
	include("functions.php");

	if (isset($_GET["page"])) {
		$activePage = $_GET["page"];
	} else {
		$activePage = "home";
	}

	include('header.php');

	renderPage($activePage);
	include('footer.php');
?>