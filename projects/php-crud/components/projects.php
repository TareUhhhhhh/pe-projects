<?php
include ('data/project-data.php');
foreach ($projects as $project) { 
	$id = $project['id'];
	$title = $project["title"];
	$image = $project['image'];
?>

<article class="project">
	<h1><?=$title?></h1>

	<picture>
		<img src="<?=$image?>" alt="<?=$title?>">
	</picture>

	<a href="?page=detail&id=<?=$id?>">More Info</a>
</article>

<?php
}