<?php

function wants($beds, $baths, $price, $city, $garage, $sqft, $fence) {
	?>
	<h3>Beds: <?=$beds?></h3>

	<h3>Baths: <?=$baths?></h3>

	<h3>Price: $<?php echo number_format($price, 0, '.', ',')?></h3>

	<h3>City: <?=$city?></h3>

	<h3>Garage: <?=$garage?></h3>

	<h3>Square Footage: <?=number_format($sqft, 0, '.', ',')?></h3>

<?php
	if ($fence == true) {
		echo "<h3>Fence: Yes</h3>";
	}
 
}

function available($address, $city, $beds, $baths, $price, $garage, $sqft, $fence) {
	?>
	<article class="available-home">
		<h3>Address: <?=$address?></h3>

		<h3>City: <?=$city?></h3>

		<h3>Beds: <?=$beds?></h3>

		<h3>Baths: <?=$baths?></h3>

		<h3>Price: $<?php echo number_format($price, 0, '.', ',')?></h3>

		<h3>Garage: <?=$garage?></h3>

		<h3>Square Footage: <?=number_format($sqft, 0, '.', ',')?></h3>
		<?php 
			if ($fence == true) {
			echo "<h3>Fence: Yes</h3>";
			} 
		?>
	</article>
<?php
}