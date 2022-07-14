<?php
$json = file_get_contents('data/project-data.json');
$projects = json_decode($json, true);
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

	<a href="?page=project-detail&id=<?=$id?>">More Info</a>
</article>

<?php
}