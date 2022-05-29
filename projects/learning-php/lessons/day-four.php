<section class="day-four">
	<div class="inner-column">
		<h1>Day Four Exercises</h1>

		<h2>Arrays, Objects and Loops</h2>
	</div>

	<article class="home-matching">
	<div class="inner-column">
		<div class="buyer-wants">
			<h3>Buyer Wants</h3>

			<?php
				$buyerWants = 
				[
					"beds" => 4,
					"baths" => 3,
					"fence" => true,
					"garage" => 3,
					"sqft" => 3000,
					"price" => 450000,
					"schools" => ["Park Hill", "Liberty",],
				];

				$buyerBeds = $buyerWants["beds"];
				$buyerBaths = $buyerWants["baths"];
				$buyerFence = $buyerWants["fence"];
				$buyerGarage = $buyerWants["garage"];
				$buyerSqft = $buyerWants["sqft"];
				$buyerPrice = $buyerWants["price"];

				foreach ($buyerWants["schools"] as $buyerSchools) {
					$buyerSchools;
				}

				if ($buyerFence == true) {
					$buyerFence = "Yes";
				}
				else {
					$buyerFence = "No";
				}
			?>

			<h4>Beds: <?=$buyerBeds?>+</h4>
			<h4>Baths: <?=$buyerBaths?>+</h4>
			<h4>Fence: <?=$buyerFence?></h4>
			<h4>Garage: <?=$buyerGarage?>+</h4>
			<h4>Square Footage: <?=$buyerSqft?>+</h4>
			<h4>Price: Up To $<?=$buyerPrice?></h4>
		</div>

		<div class="available-homes">
			<h3>Available Homes</h3>

			<?php
				$houses = 
				[
					[
					"price" => 385000,
					"address" => "123 Main St",
					"beds" => 3,
					"baths" => 2,
					"fence" => false,
					"garage" => 2,
					"sqft" => 2800,
					],
					[
					"price" => 410000,
					"address" => "321 4th St",
					"beds" => 4,
					"baths" => 3,
					"fence" => true,
					"garage" => 3,
					"sqft" => 3100,
					],
				];

				foreach ($houses as $house) {
					$housePrice = $house["price"];
					$houseAddress = $house["address"];
					$houseBeds = $house["beds"];
					$houseBaths = $house["baths"];
					$houseFence = $house["fence"];
					$houseGarage = $house["garage"];
					$houseSqft = $house["sqft"];

					if ($houseFence == true) {
						$houseFence = "Yes";
					}
					else {
						$houseFence = "No";
					}?>

			<div class="home">
				<h3>Address: <?=$houseAddress?></h3>

				<h5>Price: $<?=$housePrice?></h5>

				<h5>Beds: <?=$houseBeds?></h5>

				<h5>Baths: <?=$houseBaths?></h5>

				<h5>Fence: <?=$houseFence?></h5>

				<h5>Garage: <?=$houseGarage?></h5>

				<h5>Square Footage: <?=$houseSqft?></h5>
			</div>

			<?php } ?>
		</div>
	</div>
	</article>

	<article class="monsters">
	<div class="inner-column">
		<h3>Monsterz 4 U</h3>

		<?php
			$monsters = [
				[
					"id" => 1,
					"name" => "Shadow",
					"age" => 7,
					"food" => "Popcorn",
					"hobby" => "Video Games",
					"photo" => "shadow",
				],
				[
					"id" => 2,
					"name" => "Mr. Banana",
					"age" => 5,
					"food" => "Anything Yellow",
					"hobby" => "Playing on a yellow swingset",
					"photo" => "mr-banana",
				],
				[
					"id" => 3,
					"name" => "Fragoo",
					"age" => 6,
					"food" => "Spaghetti with Ragu",
					"hobby" => "Golfing with the fellas.",
					"photo" => "fragoo",
				],
			];

			foreach ($monsters as $monster) {
				$id = $monster["id"];
				$name = $monster["name"];
				$age = $monster["age"];
				$food = $monster["food"];
				$hobby = $monster["hobby"];
				$photo = $monster["photo"];
			?>

			<picture><img src="photos/<?=$photo?>.jpg" alt=""></picture>
			<h2><?=$name?></h2>
			<h3>Age: <?=$age?> years</h3>
			<h3>Favorite Food: <?=$food?></h3>
			<h3>Hobby: <?=$hobby?></h3>

		<?php } ?>
	</div>
	</article>
</section>









