<section class="submit-wants">
<?php
		$price = "<span>Enter info into the form.</span>";
		$beds = "<span>Enter info into the form.</span>";
		$baths = "<span>Enter info into the form.</span>";
		$city = "<span>Enter info into the form.</span>";
		$garage = "<span>Enter info into the form.</span>";
		$sqft = "<span>Enter info into the form.</span>";

	if ( isset($_POST["submitted"]) ) {
		echo "Info Submitted.";

		if ( isset( $_POST["price"] ) ) {
			$price = "$" . $_POST["price"];
		}

		if ( isset( $_POST["beds"] ) ) {
			$beds = $_POST["beds"];
		}

		if ( isset( $_POST["baths"] ) ) {
			$baths = $_POST["baths"];
		}

		if ( isset( $_POST["city"] ) ) {
			$city = $_POST["city"];
		}

		if ( isset( $_POST["garage"] ) ) {
			$garage = $_POST["garage"];
		}

		if ( isset( $_POST["sqft"] ) ) {
			$sqft = $_POST["sqft"];
		}
	}
?>
	<form method="POST" class='want-form'>
		<p>What kind of home are you looking for?</p>

		<div class="input price">
			<label>Max Price</label>
			<input type="number" name='price' min='50000' max='1000000'>
		</div>

		<div class="input beds">
			<label>Beds</label>
			<input type="number" name='beds' min='0'>
		</div>

		<div class="input baths">
			<label>Baths</label>
			<input type="number" name='baths' min='0'>
		</div>

		<div class="input city">
			<label>City</label>
			<input type="text" name='city'>
		</div>

		<div class="input garage">
			<label>Garage</label>
			<input type="number" name='garage' min='0'>
		</div>

		<div class="input sqft">
			<label>Square Footage</label>
			<input type="number" name='sqft' min='500'>
		</div>

		<div class="submit">
			<button typ='submit' name='submitted'>Submit</button>
		</div>
	</form>
</section>