<section class="day-five">
	<div class="inner-column">
		<h1>Day 5 Exercises</h1>

		<h2>Function to Build out homes!!</h2>
	</div>

	<article class="build-home inner-column">
		<?php
			function build($address, $beds, $baths, $price, $sqft, $fence, $garage) {
		?>

		<div class="home">
			<div class="address">
				<h3 class="address inline">Address: </h3>
				<p class="address inline"><?=$address?></p>
			</div>

			<div class="beds">
				<h3 class="beds inline">Beds: </h3>
				<p class="beds inline"><?=$beds?></p>
			</div>

			<div class="baths">
				<h3 class="baths inline">Baths: </h3>
				<p class ="baths inline"><?=$baths?></p>
			</div>

			<div class="price">
				<h3 class="price inline">Price: </h3>
				<p class="price inline"><?=$price?></p>
			</div>

			<div class="sqft">
				<h3 class="sqft inline">Square Footage: </h3>
				<p class="sqft inline"><?=$sqft?></p>
			</div>

			<div class="fence">
				<h3 class="fence inline">Fence: </h3>
				<p class="fence inline"><?=$fence?></p>
			</div>

			<div class="garage">
				<h3 class="garage inline">Garage: </h3>
				<p class="garage inline"><?=$garage?></p>
			</div>
		</div>

		<?php } ?>

		<?php
			build("123 Main", 3, 4, 410000, 3100, true, 3);
			build("4659 SW Blue Moon", 5, 4, 450000, 2897, false, 2);
			build("8474 N Dragon", 5, 3, 385000, 2800, true, 2);
			build("833 W Eastern", 2, 2, 287000, 1980, false, false);
			build("9474 11th Dr", 3, 4, 310000, 1700, true, 2);
		?>
	</article>
</section>