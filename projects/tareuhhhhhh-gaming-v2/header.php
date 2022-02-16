<!doctype html>

<?php 
	//Include pages-data
	include("pages.php");

	//Default page Id
	$pageId = "home";

	//Figure out which page we're on -- if not home
	if (isset($_GET["page"])) {
		$pageId = $_GET["page"];
	}

	//Get data for page based on "id"
	foreach($pages as $page) {
		//If "id" => "current query string" 
		if ($page["id"] == $pageId )  {
			$pageContent = $page; //assign proper page data from the pages.php file
		}
	}
	//Now the page content can be used on the page content in modules
 ?>
<html lang='en'>
	<?php include('head.php'); ?>

	<body>
		<a id='top' href="#"></a>
		<header class='site-header'>
		<inner-column>

			<?php include('modules/masthead.php'); ?>

		</inner-column>
		</header>


		<main class='page-content'>
			<!-- STUFF -->
