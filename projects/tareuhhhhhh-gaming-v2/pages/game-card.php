<!-- Probably needs to be nixed for new game list page idea -- parallax scrolling like on Bloober home page -->

<?php 
		$title = $game["title"];
		$description = $game["description"];
		$id = $game["id"];
	?>

<game-card>
	<h1 class='title'><?=$title?></h1>

	<p class='description'><?=$description?></p>

	<a href="?page=detail&game=<?=$id?>">More Info</a>
</game-card>





