

<?php include('header.php'); ?>

<?php
	if ($pageId == "home") {
		include("pages/home.php");
	}
	//IF there is a page - find it's file include("pages/$page.php") $todo

	if ($pageId == "games") {
		include("pages/games.php");
	}

	if ($pageId == "detail") {
		include("pages/game-detail.php");
	}

	if ($pageId == "news") {
		include("pages/news.php");
	}

	if ($pageId == "account") {
		include("pages/account.php");
	}
?>


<?php include('footer.php'); ?>
