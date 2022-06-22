
<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
?>

<article class='article-card'>
	<picture>
		<img src='<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>
		<h1 class='title strong-voice'><?=$heading?></h1>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>Call to action <span class='arrow'>&#8594;</span></a>
	</text-content>
</article>
