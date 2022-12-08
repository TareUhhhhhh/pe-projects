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
			<h2 class='attention-voice'>Ready for your next scare?</h2>

			<p class="calm-voice">Sign up for our newsletter and never miss out on the fun!</p>

			<form class="email-signup" method="POST">
				<div class="field">
					<!-- <label for="email">Email Address: </label> -->

					<input type="email" placeholder="enter email here">

					<button input="submit">Submit</button>
				</div>
			</form>
		</inner-column>
	</section>

<?php include('footer.php'); ?>
