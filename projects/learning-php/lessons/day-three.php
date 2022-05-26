<section class="day-three">
<div class="inner-column">
	<h1>Day Three Exercises</h1>
</div>

<div class="inner-column">
	<h2>Home Matching <3</h2>

	<?php
		$house = [
			"bedrooms" => 4,
			"bathrooms" => 3.5,
			"fence" => false,
			"city" => "Platte Woods",
			"garage" => 3,
			"style" => "1.5 story",
			"year" => 1968,
			"appliances" => ["dishwasher", "double oven", "cooktop", "kitchen grill"],
		];

		$bedrooms = $house["bedrooms"];
		$bathrooms = $house["bathrooms"];
		$fence = $house["fence"];
		$city = $house["city"];
		$garage = $house["garage"];
		$style = $house["style"];
		$year = $house["year"];
	?>

	<h3>House Details</h3>

	<p>This wonderful <?=$style?> home in <?=$city?> has <?=$bedrooms?> bedrooms and <?=$bathrooms?> bathrooms. There is even a <?=$garage?> car garage! It even includes the <?=$house["appliances"][0]?>, <?=$house["appliances"][1]?>, <?=$house["appliances"][2]?> and <?=$house["appliances"][3]?>!</p>
</div>
</section>