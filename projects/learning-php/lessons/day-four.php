<section class="day-four">
<div class="inner-column">
	<h1>Day Four Exercises</h1>
</div>

<div class="inner-column">
	<h2>Arrays, Objects and Loops</h2>

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
			
	<div class="available-home">
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
</section>











</div>