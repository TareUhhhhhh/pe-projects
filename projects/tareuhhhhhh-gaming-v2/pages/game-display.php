<!-- parallax scrolling like on Bloober home page -->

<?php 
		$title = $game["title"];
		$description = $game["description"];
		$id = $game["id"];
		$image = $game["image"];
	?>

<game-display style="background-image: url(images/<?=$image?>);">
<inner-column>
		<h1 class='attention-voice title'><?=$title?></h1>

		<p class='calm-voice description'><?=$description?></p>

		<a class="calm-voice" href="?page=detail&game=<?=$id?>">More Info</a>
</inner-column>
</game-display>





