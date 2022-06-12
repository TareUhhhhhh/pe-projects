<head><link rel="stylesheet" href="csss/site.css"></head>


<body>
	<header>
	<div class="inner-column">
		<h1 class='loud-voice'>Audiophiles</h1>
	</div>
	</header>

	<main>
	<div class="inner-column">

<?php
	$json = file_get_contents('data.json');
	$data = json_decode($json, true);
	$items = $data["products"];

	foreach($items as $item) {
		$image = $item["image"];
		$brand = $item["brand"];
		$name = $item["name"];
		$colors = $item["color"];
		$category = $item["category"];
		$tagline = $item["tagline"];
		$description = $item["description"];
		$price = $item["price"];
		$features = $item["features"];
		$sale = $item["on-sale"];
		$stock = $item["stock"];
?>

		<article class="product">
			<h2 class="brand"><?=$brand?></h2>
			<h3 class="name em"><?=$name?></h3>
			<picture><img src="<?=$image?>" alt=""></picture>
			<h4 class="category">Category: <?=$category?></h4>

			
			<h4 class='tagline em'><?=$tagline?></h4 class='calm-voice em'>
			<li><?=$description?></li>
			<h4>Color Options:<?php foreach($colors as $color) { ?>
			<li><?=$color?></li>
			<?php } ?></h4>
			<li><?=$price?></li>

			<?php foreach($features as $feature) { ?>
			<li><?=$feature?></li>
			<?php	} ?>

			<?php if ($sale == true) {
				echo "On sale now!";
			} ?>

			<li><?=$stock?></li>
		</article>

<?php } ?>
	</div>
	</main>
</body>
