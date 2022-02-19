<?php 

	//If there is a "page" value, then assign that to $activePage variable
	if (isset($_GET["page"])) {
		$activePage = $_GET["page"];
	}

	include('header.php');

	//when $activePage = Projects - echo Projects info
	//when $activePage = Writing - echo Writing info

	$pageHeading = $pageData["$activePage"]["title"];
	$pageContent = $pageData["$activePage"]["content"];

	include('intro.php');

	include('footer.php');

?>