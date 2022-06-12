<head><link rel="stylesheet" href="css/site.css"></head>


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
			<h4 class='description'><?=$description?></h4>
			<h4>Color Options:<?php foreach($colors as $color) { ?>
			<li><?=$color?></li>
			<?php } ?></h4>
			

			<h4 class="features">Features:
				<?php foreach($features as $feature) { ?>
					<li><?=$feature?></li>
				<?php	} ?>
			</h4>

			<?php if ($sale == true) {
				echo "<h2 class='sale strong'>On sale now!</h2>";
			} ?>
			<H3 class='price strong'><?=$price?></H3>

			<?php 
				if ($stock < 1) {
					echo "<h3 class='oos em'>Returning soon!</h3>";
				}
				else if ($stock > 5) {
					echo "<h3 class='in-stock'>In stock</h3>";
				}
				else {
					echo "<h3 class='low-stock strong'>Low stock!</h3>";
				}
			?>
		</article>

<?php } ?>
	</div>
	</main>
</body>
