<?php 

	//If there is a "page" value, then assign that to $activePage variable
	if (isset($_GET["page"])) {
		$activePage = $_GET["page"];
	} else {
		$activePage = "home";
	}

	include('header.php');

	//when $activePage = Projects - echo Projects info
	//when $activePage = Writing - echo Writing info

	$pageHeading = $pageData["$activePage"]["title"];
	$pageContent = $pageData["$activePage"]["content"];

	include('intro.php');

	if ($activePage != "home") {?>
		<div class="inner-column">
			<section class="page-content">
				<?php include($activePage . '.php'); } ?>
			</section>
		</div>

<?php include('footer.php');?>