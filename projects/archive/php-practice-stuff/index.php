<?php
	
	// print_r($_GET);

	// $dynamicPage = isset($_GET["page"]);

	// if ($dynamicPage) {	
	// 	$activePage = $dynamicPage;
	// }	else {
	// 	$activePage = "home";
	// }

	// // if ( isset($_GET["page"]) ) {	
	// // 	$activePage = $_GET["page"];
	// // }	else {
	// // 	$activePage = "home";
	// // }


	// $activePage = page($_GET["page"]);
?>

<h1><?=page();?> Page</h1>

<nav>
	<a href="?page=home">Home</a>
	<a href="?page=about">About</a>
	<a href="?page=contact">Contact</a>
</nav>

<?php

	if (page() == "home") {
		echo "Welcome";
	}