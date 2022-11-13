<!-- parallax scrolling like on Bloober home page -->

<?php 
		$title = $game["title"];
		$description = $game["description"];
		$id = $game["id"];
		$image = $game["image"];
	?>


<game-display style="background-image: url(images/<?=$image?>);">
<div class="shadow">
<inner-column>
	<text-content>
		<h1 class='attention-voice title'><?=$title?></h1>

		<p class='calm-voice description'><?=$description?></p>

		<a class="calm-voice button" href="?page=detail&game=<?=$id?>">More Info</a>
	</text-content>
</inner-column>
</div>
</game-display>





