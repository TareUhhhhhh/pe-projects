<?php 

	include('header.php'); 

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
	<!-- include("pages/" . $pageId['id'] . ".php"); -->

	<section class='newsletter'>
		<inner-column>
			<h2 class='attention-voice'>Are you ready for your next scare?</h2>

			<p>Sign up for our newsletter and never miss out on the fun!</p>

			<iframe src="https://tarahaskamp.substack.com/embed" width="480" height="320" style="border:1px solid #EEE; background:white;" frameborder="0" scrolling="no"></iframe>
		</inner-column>
	</section>


<?=include('footer.php'); ?>
