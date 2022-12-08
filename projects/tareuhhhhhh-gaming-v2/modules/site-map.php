
<site-map>
	<nav class='user-menu'>
		<h3>Account Menu</h3>

		<a href='?page=account'>Sign-in</a>

		<a href='?page=account'>Account Info</a>

		<a href='?page=account'>Sign Up</a>
	</nav>

	<nav class='game-menu'>
		<h3>Games</h3>

		<?php foreach ($games as $game) { 
				$link = $game["id"];
				$title = $game["title"];

		?>
			<a href="?page=detail&game=<?=$link?>"><?=$title?></a>
		<?php } ?>
	</nav>
</site-map>