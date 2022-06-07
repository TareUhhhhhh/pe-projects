<section class="wants">
<div class="inner-column">
	<h2>Buyer Wants</h2>

	<?php include('forms/buyer-wants.php')?>

	<p class='descriptor'>Here is the list of criteria the buyer would like in their home.</p>

	<h3>Price: <?=$price?></h3>
	<h3>Beds: <?=$beds?></h3>
	<h3>Baths: <?=$baths?></h3>
	<h3>City: <?=$city?></h3>
	<h3>Garage: <?=$garage?></h3>
	<h3>Square Footage: <?=$sqft?></h3>

	<!-- <?php
		wants(4, 3, 300000, "Platte Woods", 3, 3000, false)
	?> -->

</div>
</section>